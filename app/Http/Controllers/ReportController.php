<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
   // app/Http/Controllers/Admin/ReportController.php

public function index(Request $request)

{
  
    $reportData = [
        'totalUsers' => rand(100, 500),
        'totalPharmacists' => rand(5, 20),
        'totalMedicines' => rand(50, 200),
        'totalSales' => rand(10000, 100000),
        'totalOrders' => rand(500, 2000),
        'mostSoldMedicine' => 'Paracetamol',
        'bestPharmacist' => 'John Doe',
    ];

    return view('admin.report.index', compact('reportData'));
}
}