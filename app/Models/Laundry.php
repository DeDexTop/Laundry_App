<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    // protected $fillable = ['tgl_masuk'];

    public function laundry()
    {
        return $this->hasMany(Detail_Laundry::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

