<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    // Obtener todos los productos
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Crear un nuevo producto
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:191',
            'price' => 'required|integer',
            'description' => 'nullable|string',
            'sizes' => 'nullable|string|max:191',
            'colors' => 'nullable|string|max:191',
            'qty' => 'nullable|integer',
            'sku' => 'required|string|max:191|unique:products,sku',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validación de la imagen
            'status' => 'required|string|max:191',
            'brand' => 'required|string|max:191',
            'categorie_id' => 'required|integer',
            'subcategorie_id' => 'required|integer',
        ]);

        // Subir imagen si está presente
        $imageUrl = null;
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageUrl = $image->store('img', 'public');  // Guarda la imagen en public/img
        }

        // Crear el producto
        $productData = $validated;
        $productData['image_url'] = $imageUrl;  // Asigna la URL de la imagen

        $product = Product::create($productData);
        return response()->json($product, 201);
    }

    // Mostrar un producto específico
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return response()->json($product);
    }

    // Actualizar un producto existente
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $validated = $request->validate([
            'name' => 'nullable|string|max:191',
            'price' => 'nullable|integer',
            'description' => 'nullable|string',
            'sizes' => 'nullable|string|max:191',
            'colors' => 'nullable|string|max:191',
            'qty' => 'nullable|integer',
            'sku' => 'nullable|string|max:191|unique:products,sku,' . $id,
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'nullable|string|max:191',
            'brand' => 'nullable|string|max:191',
            'categorie_id' => 'nullable|integer',
            'subcategorie_id' => 'nullable|integer',
        ]);

        // Subir nueva imagen si está presente
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageUrl = $image->store('img', 'public');  // Guarda la nueva imagen
            $product->image_url = $imageUrl;  // Asigna la nueva URL de la imagen
        }

        // Actualizar el producto
        $product->update($validated);
        return response()->json($product);
    }

    // Eliminar un producto
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        // Eliminar la imagen asociada si existe
        if ($product->image_url) {
            Storage::delete('public/' . $product->image_url);
        }

        $product->delete();
        return response()->json(['message' => 'Producto eliminado correctamente']);
    }
}
