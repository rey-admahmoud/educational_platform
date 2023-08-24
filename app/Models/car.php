<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='cars';
    protected $primaryKey='id';
    protected $hidden=['updated_at','created_at'];
    protected $fillable=['id','name','price','model','desc_course','image','id_category'];
}
