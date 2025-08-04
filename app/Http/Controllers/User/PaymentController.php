// In your controller
public function processPayment(Request $request) {
    // Validate input
    $validated = $request->validate([
        'medicine_id' => 'required|exists:medicines,id',
        'quantity' => 'required|integer|min:1',
        'card_data.number' => 'required|digits:16',
        'card_data.expiry' => 'required|regex:/^\d{2}\/\d{2}$/',
        'card_data.cvv' => 'required|digits_between:3,4',
        'card_data.name' => 'required|string'
    ]);
    
    // Process with MySQL (using PDO for security)
    try {
        $pdo = DB::connection()->getPdo();
        
        $pdo->beginTransaction();
        
        // Check stock
        $stmt = $pdo->prepare("SELECT quantity FROM medicines WHERE id = ? FOR UPDATE");
        $stmt->execute([$validated['medicine_id']]);
        $stock = $stmt->fetchColumn();
        
        if ($validated['quantity'] > $stock) {
            throw new Exception("Not enough stock available");
        }
        
        // Process payment (in real app, integrate with payment gateway here)
        $orderNumber = 'ORD-' . strtoupper(Str::random(8)) . '-' . time();
        $totalPrice = Medicine::find($validated['medicine_id'])->price * $validated['quantity'];
        
        // Create order
        $stmt = $pdo->prepare("
            INSERT INTO orders (
                user_id, order_number, total_price, status, 
                payment_method, payment_status, created_at, updated_at
            ) VALUES (?, ?, ?, 'paid', 'card', 'completed', NOW(), NOW())
        ");
        $stmt->execute([
            auth()->id(),
            $orderNumber,
            $totalPrice
        ]);
        
        $orderId = $pdo->lastInsertId();
        
        // Create order item
        $stmt = $pdo->prepare("
            INSERT INTO order_items (
                order_id, medicine_id, quantity, price, created_at, updated_at
            ) VALUES (?, ?, ?, ?, NOW(), NOW())
        ");
        $stmt->execute([
            $orderId,
            $validated['medicine_id'],
            $validated['quantity'],
            Medicine::find($validated['medicine_id'])->price
        ]);
        
        // Update stock
        $stmt = $pdo->prepare("
            UPDATE medicines SET quantity = quantity - ? WHERE id = ?
        ");
        $stmt->execute([
            $validated['quantity'],
            $validated['medicine_id']
        ]);
        
        $pdo->commit();
        
        return response()->json([
            'success' => true,
            'order_id' => $orderId
        ]);
        
    } catch (Exception $e) {
        $pdo->rollBack();
        return response()->json([
            'success' => false,
            'message' => $e->getMessage()
        ], 400);
    }
}