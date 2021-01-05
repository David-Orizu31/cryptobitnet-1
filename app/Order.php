<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $fillable = [
        'order_unique_id',
        'order_item_name',
        'order_product_id',
        'order_status',
        'order_billing_name',
        'order_amount',
        'company_name',
        'user_id',
        'company_branch_name',
        'delivery_status',
        'gender',

    ];


    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('order_quantity');
    }
}
