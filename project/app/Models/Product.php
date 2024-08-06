<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    public $timestamps = false; /* ! If not set to false, creates SQL error - timestamps not in the DB */
    use HasFactory; /* ? Model factories are a way to create fake data for your models, which is useful for testing and database seeding. */
    protected $table = 'products'; /* * This is our table 'products' in the DB */
    /* * Par default, if the model is named Product, it will by default communicate with table "Product" in DB, it's case-sensitive */
//    protected $fillable = [
//        'name',
//        'description',
//        'price',
//        'imageUrl',
//        'discount',
//        'category_id',
//        'stock',
//        'weight',
//        'height',
//        'rarity'
//    ];
    protected $guarded = [ /* ! we can change all except the ID = GUARDED, either this or fillables, never both */
        'id'
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
