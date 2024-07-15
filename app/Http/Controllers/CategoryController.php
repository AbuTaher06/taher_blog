<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();
        $validated['slug'] = str($validated['name'])->slug();

        $category = Category::create($validated);
        if($category){
            flash()->success('Category has been created.');
            return redirect()->route('admin.categories.index');

        }
        return back();

    }

    /**
     * Display the specified resource.
     */
    // public function show(Category $category)
    // {

    //     return view('admin.categories.show', compact('category'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validated = $request->validated();

        if ($validated['name'] !== $category->name) {
            $validated['slug'] = str($validated['name'])->slug();
        }

        $category->updateOrFail($validated);

        flash()->success('Category has been updated.');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        $category->deleteOrFail();
        flash()->warning('Category has been deleted.');
        return redirect()->route('admin.categories.index');
    }
}
