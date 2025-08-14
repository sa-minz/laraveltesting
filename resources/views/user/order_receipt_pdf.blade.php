<!DOCTYPE html>
<html>
<head>
    <title>Receipt #{{ $order->id }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .details { margin: 20px 0; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
        .total-row { font-weight: bold; }
        .footer { text-align: center; margin-top: 30px; font-size: 0.9em; color: #666; }
    </style>
</head>
<body>
    <div class="header">
        <h2>QuickMeds Pharmacy</h2>
        <p>No 23, Ward Place, Colombo</p>
        <p>Phone:0771234556 | 0112345678| Email: info@quickmeds.com</p>
        <h3>PAYMENT RECEIPT</h3>
    </div>

    <div class="details">
        <p><strong>Receipt No:</strong> #{{ $order->id }}</p>
        <p><strong>Date:</strong> {{ $order->updated_at->format('d M Y, h:i A') }}</p>
        <p><strong>Customer:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Transaction ID:</strong> {{ $order->transaction_id }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $order->medicine->name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>Rs. {{ number_format($order->medicine->price, 2) }}</td>
                <td>Rs. {{ number_format($order->total_price, 2) }}</td>
            </tr>
            <tr class="total-row">
                <td colspan="3" style="text-align: right;">Total Paid:</td>
                <td>Rs. {{ number_format($order->total_price, 2) }}</td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        <p>Thank you for your purchase!</p>
        <p>This is an automated receipt. No signature required.</p>
    </div>
</body>
</html>