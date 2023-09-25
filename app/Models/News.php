<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Images ; 
class News extends Model
{
    use HasFactory , SoftDeletes ;
    protected $fillable = [
        'title', 
        'description',  
        'description_ar',  
        'date'   , 
        'location' , 
        'title_ar' , 
        'location_ar' , 
   
];
public function images(): MorphMany
{
    return $this->morphMany(Images::class, 'parentable');
}
}
