<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cardStatementCheck extends Model
{
    use HasFactory;

    protected $table = 'tbl_card_statement_check';

    protected $fillable = [
        'portableDevice',
        'innovation'
    ];
}
