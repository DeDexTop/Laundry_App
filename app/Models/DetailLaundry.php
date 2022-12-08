<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLaundry extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function detail()
    {
        return $this->belongsTo(Laundry::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Category::class);
    }
}
