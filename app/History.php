<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class History extends Model
{
    protected $fillable = [
        'currency_name',
        'transaction_balance',
        'trans_status',
        'trans_package',
        'trans_wallet_address',
        'user_id',
        'transaction_action',

    ];
}
