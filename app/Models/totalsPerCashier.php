<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class totalsPerCashier extends Model
{
    use HasFactory;

    protected $table = 'tbl_totals_per_cashier';

    protected $fillable = [
        'cashier',
        'cash',
        'cheques',
        'EFT',
        'portableDevices',
        'innovation'
    ];
}
