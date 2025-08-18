<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    protected $fillable = ['name'];
    public $timestamps = true;

    public function data()
    {
        return $this->hasMany(Data::class);
    }
}
