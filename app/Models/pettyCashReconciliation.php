<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pettyCashReconciliation extends Model
{
    use HasFactory;

    protected $table = 'tbl_petty_cash_reconciliation';

    protected $fillable = [
        'supplier',
        'explainExpense',
        'approvedSlipAttached',
        'amount'
    ];
}
