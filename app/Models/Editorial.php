<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    //
    protected $table="editoriales";
    protected $primaryKey="codigo_editorial";

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['codigo_editorial', 'nombre_editorial', 'contacto', 'telefono'];
}
