<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    // public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'conseccionado',
        'motivo',
        'existencia',
        'pendientes',
        'porcentajeManejo', 
    ];
    
    public function categoria(){
        return $this->belongsToMany(Categoria::class, 'categoria_producto');
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class,'usuario_id','id');
    }
}
