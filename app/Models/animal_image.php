<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animal_image extends Model
{
    use HasFactory;
    protected $table ='animals_image';
    protected $primaryKey = 'id';
    protected $fillable =['animals_id','image_id'];
}
