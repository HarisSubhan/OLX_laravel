<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class categoryController extends Controller
{
    public function addcategory(Request $req)
    {
        $formFields = $req->validate([
            "name" => ['required', 'min:3'],
            "color" => 'required',
            "image" =>['required', 'mimes:jpg,png,webp,jpeg'],
        ]);

        $formFields['image'] = $req->file('image')->store('category_images','public');

        Categories::create($formFields);

        return back()->with('message', 'Category Add Success');
    
    }

    public function getCategories()
    {

        $categories = Categories::all();

        return view('pages.users.welcome', compact('categories'));

    }




}
