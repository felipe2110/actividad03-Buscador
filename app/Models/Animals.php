<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;
    protected $table ='animals';
    protected $primaryKey = 'id';
    protected $fillable =['name','description','type'];

    public function images()
    {
        return $this->belongsToMany(image::class);
    }
}
