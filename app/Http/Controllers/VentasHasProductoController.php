<?php

namespace App\Http\Controllers;

use App\Models\VentasHasProducto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VentasHasProductoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class VentasHasProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ventasHasProductos = VentasHasProducto::paginate();

        return view('ventas-has-producto.index', compact('ventasHasProductos'))
            ->with('i', ($request->input('page', 1) - 1) * $ventasHasProductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $ventasHasProducto = new VentasHasProducto();

        return view('ventas-has-producto.create', compact('ventasHasProducto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VentasHasProductoRequest $request): RedirectResponse
    {
        VentasHasProducto::create($request->validated());

        return Redirect::route('ventas-has-productos.index')
            ->with('success', 'VentasHasProducto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $ventasHasProducto = VentasHasProducto::find($id);

        return view('ventas-has-producto.show', compact('ventasHasProducto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $ventasHasProducto = VentasHasProducto::find($id);

        return view('ventas-has-producto.edit', compact('ventasHasProducto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VentasHasProductoRequest $request, VentasHasProducto $ventasHasProducto): RedirectResponse
    {
        $ventasHasProducto->update($request->validated());

        return Redirect::route('ventas-has-productos.index')
            ->with('success', 'VentasHasProducto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        VentasHasProducto::find($id)->delete();

        return Redirect::route('ventas-has-productos.index')
            ->with('success', 'VentasHasProducto deleted successfully');
    }
}
