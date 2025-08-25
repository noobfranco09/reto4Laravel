<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Venta
 *
 * @property $id
 * @property $description
 * @property $total
 * @property $empleado_id
 * @property $state
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property VentasHasProducto[] $ventasHasProductos

 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['description', 'total', 'user_id', 'state'];
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    // public function empleados()
    // {
    //     return $this->belongsTo(\App\Models\Empleado::class, 'empleado_id', 'id');
    // }

    public function productos()
    {
        return $this->belongsToMany(\App\Models\Producto::class, 'ventas_has_productos', 'venta_id', 'producto_id')
            ->withPivot('subtotal')
            ->withTimestamps();
    }
}
