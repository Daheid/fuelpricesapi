<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';

    protected $fillable = [
        'period',
        'area_id',
        'product_id',
        'value',
        'name',
        'code'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
