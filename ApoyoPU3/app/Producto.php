<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $imagen
 * @property $concesionado
 * @property $motivo
 * @property $existencia
 * @property $pendientes
 * @property $porcentajeManejo
 *
 * @property CategoriasProducto[] $categoriasProductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'concesionado' => 'required',
		'motivo' => 'required',
		'existencia' => 'required',
		'pendientes' => 'required',
		'porcentajeManejo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','precio','imagen','concesionado','motivo','existencia','pendientes','porcentajeManejo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categoriasProductos()
    {
        return $this->hasMany('App\CategoriasProducto', 'producto_id', 'id');
    }
    

}
