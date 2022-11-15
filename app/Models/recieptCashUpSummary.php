<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recieptCashUpSummary extends Model
{
    use HasFactory;
    protected $table = 'reciept_cash_up_summary';
    protected $fillable = [
        'totalG4SDeposit1',
        'looseChange',
        'totalG4SDeposit2',
        'changeFromBank',
        'comments'
    ];
}
