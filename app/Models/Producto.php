<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Producto
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $price
 * @property $stock
 * @property $state
 * @property $created_at
 * @property $updated_at
 *



 * @property VentasHasProducto[] $ventasHasProductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'description', 'price', 'stock', 'state'];

    public function ventas(){
        return $this->belongsToMany(\App\Models\Venta::class,'ventas_has_productos','producto_id','venta_id')
        ->withPivot('subtotal')
        ->withTimestamps();
    }


}
