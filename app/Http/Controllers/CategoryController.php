<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data  = [
            'categories' => Category::get(),
        ];
        return view('category.category', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $name = $request->input('name');

        $category = new Category();
        $category->name = $name;
        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Data kategori berhasil disimpan.'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category, Request $request): JsonResponse
    {
        $id = $category->id;
        $name = $category->name;

        return response()->json([
            'status' => 'success',
            'data' => [
                'id' => $id,
                'name' => $name,
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, Request $request): JsonResponse
    {
        $category->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data kategori berhasil dihapus.'
        ]);
    }
}
