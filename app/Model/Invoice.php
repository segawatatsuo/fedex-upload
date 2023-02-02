<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'quotation_no',
        'customers_id',
        'date_of_issue',
        'consignee',
        'country',
        'company'
    ]; //保存したいカラム名が複数の場合
}
