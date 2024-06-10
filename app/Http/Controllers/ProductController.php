<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        Log::info('Search Query:', ['query' => $query]);

        $products = DB::table('products')
            ->where('product_title', 'LIKE', '%' . $query . '%')
            ->get();

        $products = collect($products);

        return view('pages.search', [
            'products' => $products,
            'query' => $query,
        ]);
    }
}
