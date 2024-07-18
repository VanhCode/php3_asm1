<?php

namespace App\Http\DataComposers;

use App\Models\Categories;
use Illuminate\View\View;

class DataAll
{
    public function compose(View $view)
    {
        $dataDanhMuc = Categories::with('childrenRecursive')->whereNull('parent_id')->get();

        $view->with('dataDanhMuc', $dataDanhMuc);
    }
}
