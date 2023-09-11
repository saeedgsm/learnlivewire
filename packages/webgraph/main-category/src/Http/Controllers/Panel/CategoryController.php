<?php

namespace Webgraph\MainCategory\Http\Controllers\Panel;

use Illuminate\Routing\Controller;
use Webgraph\MainCategory\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('maincategories::panel.pages.categories.index', compact('categories'));
    }
}
