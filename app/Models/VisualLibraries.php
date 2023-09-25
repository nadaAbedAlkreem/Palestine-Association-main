<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Images; 
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class VisualLibraries extends Model
{
    use HasFactory ,  SoftDeletes ;
    protected $fillable = [
        'title', 
        'description',  
        'title_ar'   , 
        'description_ar' , 
        'image'
   
];
public function images(): MorphMany
{
    return $this->morphMany(Images::class, 'parentable');
}
}
