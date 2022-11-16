<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cashOfficeTotals extends Model
{
    use HasFactory;

    protected $table = 'tbl_cash_office_totals';

    protected $fillable = [
        'floatTotal',
        'changeBoxes',
        'cashOnHand'
    ];
}
