<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['menu_item_id', 'name', 'image', 'price'];

    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class);
    }
}
