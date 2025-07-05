<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailSellers extends Model
{
    protected $fillable = [
        'user_id',
        'store_name',
        'phone',
        'store_address',
        'status',
    ];
    //relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
