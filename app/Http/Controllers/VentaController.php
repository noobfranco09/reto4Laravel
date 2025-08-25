<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VentaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Producto;
use App\Models\VentasHasProducto;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ventas = Venta::paginate();

        return view('venta.index', compact('ventas'))
            ->with('i', ($request->input('page', 1) - 1) * $ventas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $productos = Producto::where('state', 1)->get();
        $venta = new Venta();

        return view('venta.create', compact('venta', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(VentaRequest $request): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $productos = $request->productos; // IDs seleccionados

            // Validar stock
            foreach ($productos as $productoId) {
                $producto = Producto::find($productoId);

                if (!$producto) {
                    throw new \Exception("El producto con ID {$productoId} no existe");
                }

                if ($producto->stock < 1) {
                    throw new \Exception("No hay stock disponible para {$producto->nombre}");
                }
            }

            // Preparar datos de la venta
            $data = collect($request->validated())
                ->except('productos')
                ->toArray();

            $data['user_id'] = auth()->id();
            // empleado logueado
            $data['total'] = Producto::whereIn('id', $productos)->sum('price');

            // Crear venta
            $venta = Venta::create($data);

            $notasStock = [];

            // Asociar productos + descontar stock
            foreach ($productos as $productoId) {
                $producto = Producto::find($productoId);

                $venta->productos()->attach($productoId, [
                    'subtotal' => $producto->price, // 👈 subtotal obligatorio
                ]);

                $producto->decrement('stock', 1);

                if ($producto->stock < 5) {
                    $notasStock[] = "El producto {$producto->nombre} tiene stock bajo ({$producto->stock}).";
                }
            }

            DB::commit();

            return Redirect::route('ventas.index')
                ->with('success', 'Venta creada exitosamente.')
                ->with('warnings', $notasStock);

        } catch (\Exception $e) {
            // DB::rollBack();

            // return back()->with('error', $e->getMessage());
            DB::rollBack();
            dd($e->getMessage()); // 👈 muestra el error real
            return back()->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $venta = Venta::find($id);

        return view('venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id): View
    // {
    //     $venta = Venta::find($id);

    //     return view('venta.edit', compact('venta'));
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(VentaRequest $request, Venta $venta): RedirectResponse
    // {
    //     $venta->update($request->validated());

    //     return Redirect::route('ventas.index')
    //         ->with('success', 'Venta updated successfully');
    // }

    // public function destroy($id): RedirectResponse
    // {
    //     Venta::find($id)->delete();

    //     return Redirect::route('ventas.index')
    //         ->with('success', 'Venta deleted successfully');
    // }
}
