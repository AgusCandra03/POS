<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'member_id', 'product_id', 'note'];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function members()
    {
        return $this->belongsTo('App\Models\Member', 'member_id');
    }

    public function products()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
