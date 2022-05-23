<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre
 * @property $apellido_paterno
 * @property $apellido_materno
 * @property $correo
 * @property $imagen
 * @property $rol
 * @property $activo
 * @property $password
 *
 * @property CategoriasProducto[] $categoriasProductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'correo' => 'required',
		'rol' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido_paterno','apellido_materno','correo','imagen','rol','activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categoriasProductos()
    {
        return $this->hasMany('App\CategoriasProducto', 'usuarios_id', 'id');
    }
    

}
