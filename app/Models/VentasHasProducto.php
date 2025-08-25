<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VentasHasProducto
 *
 * @property $id
 * @property $subtotal
 * @property $producto_id
 * @property $venta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class VentasHasProducto extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['subtotal', 'producto_id', 'venta_id'];
    public function producto()
    {
        return $this->belongsTo(\App\Models\Producto::class,'producto_id','id');
    }

    public function venta()
    {
        return $this->belongsTo(\App\Models\Venta::class,'venta_id','id');
    }


}
