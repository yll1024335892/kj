<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Image extends Model
{
    protected $fillable = ['type', 'path'];

    public function user()
    {//一对一数据表的处理
        return $this->belongsTo(User::class);
    }
}
