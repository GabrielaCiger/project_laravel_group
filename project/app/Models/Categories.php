<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use function Termwind\renderUsing;

class Categories extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'categories';

    public function products() : HasMany
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
