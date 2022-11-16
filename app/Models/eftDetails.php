<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eftDetails extends Model
{
    use HasFactory;

    protected $table = 'tbl_e_f_t_details';

    protected $fillable = [
        'dateOfPayment',
        'salesOrderNumber',
        'amount'
    ];
}
