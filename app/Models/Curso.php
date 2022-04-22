<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

//   protected $fillable = ['name', 'descripcion', 'categoria']; los campos permitidos para que se guarden
protected $guarded = []; //los demas campos que no permite que se guarden, por omision

public function getRouteKeyName()
{
    return 'slug';
}
}
?>