<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Medicine;
use App\Models\User;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'medicine_id', 'quantity', 'total_price', 'status'
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
