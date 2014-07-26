<?php

class ExploreController extends BaseController {

    public function category() {

        $categories = Category::
            join('category_micro', 'category.id', '=', 'category_micro.category_id')
            ->orderBy('category.name')->groupBy('category_micro.category_id')->get();
        $products = Product::all();
        $count['category'] = count($categories);
        $count['product'] = count($products);

        return View::make('explore.sidebar', compact('count', $count))
            ->nest('content', 'explore.category', compact('categories', $categories));
    }

    public function allProducts() {

        $categories = Category::
            join('category_micro', 'category.id', '=', 'category_micro.category_id')
            ->orderBy('category.name')->groupBy('category_micro.category_id')->get();
        $products = Product::with('company')->orderBy('product.name')->get();
        $count['category'] = count($categories);
        $count['product'] = count($products);

        return View::make('explore.sidebar', compact('count', $count))
            ->nest('content', 'explore.allProducts', compact('products', $products));
    }

    public function micro($microId) {

        $categories = Category::
            join('category_micro', 'category.id', '=', 'category_micro.category_id')
            ->orderBy('category.name')->groupBy('category_micro.category_id')->get();
        $products = Product::all();
        $micros = Micro::join('category_micro', 'micro.id', '=', 'category_micro.micro_id')
            ->join('category', 'category_micro.category_id', '=', 'category.id')
            ->where('category.id', '=', $microId)
            ->select('category.id as category_id',
                'category.name as category_name',
                'micro.id',
                'micro.name'
            )
            ->orderBy('micro.name')
            ->get();
        $count['category'] = count($categories);
        $count['product'] = count($products);

        if (!count($micros)) {
            return Redirect::to('404');
        }

        return View::make('explore.sidebar', compact('count', $count))
            ->nest('content', 'explore.micro', compact('micros', $micros));

    }


    public function microProducts($categoryId, $microId) {

        $categories = Category::
            join('category_micro', 'category.id', '=', 'category_micro.category_id')
            ->orderBy('category.name')->groupBy('category_micro.category_id')->get();
        $allProducts = Product::all();
        $products = Product::
            join('company', 'product.company_id', '=', 'company.id')
            ->join('micro_product', 'product.id', '=', 'micro_product.product_id')
            ->join('category_micro', 'micro_product.micro_id', '=', 'category_micro.micro_id')
            ->join('category', 'category_micro.category_id', '=', 'category.id')
            ->join('micro', 'micro_product.micro_id', '=', 'micro.id')
            ->where('micro_product.micro_id', '=', $microId)
            ->select('product.id as product_id',
                'product.logo',
                'product.id',
                'product.name as product_name',
                'company.id as company_id',
                'company.name as company_name',
                'category.name as category_name',
                'category.id as category_id',
                'micro.name as micro_name',
                'category.id as category_id'
            )
            ->orderBy('product.name')
            ->groupBy('product.id')
            ->get();
        $count['category'] = count($categories);
        $count['product'] = count($allProducts);

        if (!count($products)) {
            return Redirect::to('404');
        }

        return View::make('explore.sidebar', compact('count', $count))
            ->nest('content', 'explore.microProducts', compact('products', $products));
    }

    public function product($productId) {
        $product = Product::with('company')->find($productId);

        if (!count($product)) {
            return Redirect::to('404');
        }

        return View::make('explore.product', compact('product', $product));
    }

}
