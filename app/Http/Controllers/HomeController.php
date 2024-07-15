<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::when($request->query('search'), function (Builder $query) use ($request) {
            return $query->where('title', 'like', '%' . $request->query('search') . '%')
                ->orWhere('body', 'like', '%' . $request->query('search') . '%');
        })
        ->when($request->query('category'), function (Builder $query) use ($request) {
            return $query->whereHas('category', function (Builder $query) use ($request) {
                return $query->where('slug', $request->query('category'));
            });
        })
        ->latest()
        ->paginate(10);

        // Fetch categories
        $categories = Category::all();

        return view('blog.index', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
