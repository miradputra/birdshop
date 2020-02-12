<?php

namespace App\Http\View;

use Illuminate\View\view;
use App\Category;

class CategoryComposer
{
    public function compose(View $view)
    {
        //jadi query tadi kita pindahkan ke sini
        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        //kemudian passing data tsb dengan nama variable category
        $view->with('catagories','$categories');
    }
}