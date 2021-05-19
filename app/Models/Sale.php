<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable=['recommendation', 'speed', 'contract_no', 'service', 'comments', 'agreement', 'employee_id'];
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
