# Documentacion breve: funciones de producto (API)

## Actualizar producto
- **Endpoint:** `PUT/PATCH /api/products/{product}`
- **Funcion:** `update(Request $request, Product $product)` en `ctrlProductoAPI`.
- **Como funciona:**
  1. Valida los datos recibidos (`name`, `description`, `description_long`, `price`, `idcategory`).
  2. Actualiza el producto usando el modelo ya resuelto por Laravel (`$product->update($data)`).
  3. Devuelve el producto actualizado como recurso JSON, incluyendo su categoria (`$product->load('category')`).

## Eliminar producto
- **Endpoint:** `DELETE /api/products/{product}`
- **Funcion:** `destroy(Product $product)` en `ctrlProductoAPI`.
- **Como funciona:**
  1. Laravel resuelve el producto por ID desde la URL.
  2. Se ejecuta `$product->delete()`.
  3. Se responde con JSON y codigo **200**: `{"message": "Producto eliminado logicamente."}`.

## Nota
- El endpoint esta definido con `Route::apiResource('products', ctrlProductoAPI::class)`, por lo que sigue convenciones REST.
- Como el modelo `Product` usa borrado logico, `delete()` marca el registro como eliminado en lugar de borrarlo fisicamenteeeeee
