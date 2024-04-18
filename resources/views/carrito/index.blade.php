@extends('layouts.panel')

@section('title', 'Carrito de Compras')

@section('content')
    @if (count($carrito) > 0)
        <h2>Carrito de Compras</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($carrito as $producto)
                    <tr id="producto_{{ $producto->id }}">
                        <td>{{ $producto->nombreProd }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>
                            <input type="number" name="cantidad[]" id="cantidad_{{ $producto->id }}" value="1" min="1" onchange="actualizarSubtotal({{ $producto->id }}, {{ $producto->precio }})">
                        </td>
                        <td id="subtotal_{{ $producto->id }}">{{ $producto->precio }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="eliminarProducto({{ $producto->id }})">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-danger" onclick="vaciarCarrito()">Vaciar Carrito</button>
    @else
        <p>El carrito está vacío.</p>
    @endif
@endsection

<script>
    function actualizarSubtotal(idProducto, precioProducto) {
        var cantidadInput = document.getElementById('cantidad_' + idProducto);
        var subtotalTd = document.getElementById('subtotal_' + idProducto);
        var cantidad = parseInt(cantidadInput.value);
        var subtotal = precioProducto * cantidad;
        subtotalTd.textContent = subtotal.toFixed(2);
    }

    function eliminarProducto(idProducto) {
        var productoRow = document.getElementById('producto_' + idProducto);
        if (confirm('¿Seguro que deseas eliminar este producto del carrito?')) {
            productoRow.remove();
        }
    }

    function vaciarCarrito() {
        if (confirm('¿Seguro que deseas vaciar el carrito?')) {
            var productos = document.querySelectorAll('tbody tr');
            productos.forEach(function(producto) {
                producto.remove();
            });
        }
    }
</script>
