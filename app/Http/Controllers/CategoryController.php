<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rally;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $categoryImages = [
            'S-CER' => 's-cer.jpg',
            'CERA Recalvi' => 'cera_recalvi.jpg',
            'CERT Rallycar' => 'cert_rallycar.jpg',
            'CERTT GT2i' => 'certt_gt2i.jpg',
        ];

        return view('categories.index', compact('categories', 'categoryImages'));
    }


    public function show(Category $category)
    {
        $rallies = Rally::where('category_id', $category->id)->get();
        return view('categories.show', compact('category', 'rallies'));
    }
}
