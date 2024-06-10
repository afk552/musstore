<?php
// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index() {
        $products = DB::table('products')->get();
        $users = DB::table('users')->get();
        $products_type = DB::table('product_types')->get();
        return view('admin.index', compact('products', 'users', 'products_type'));
    }

    public function storeProduct(Request $request) {
        $data = $request->validate([
            'product_img' => 'required',
            'product_title' => 'required',
            'product_text' => 'required',
            'product_price' => 'required|numeric',
            'id_product_type' => 'required',
            'product_description' => 'required',
        ]);

        DB::table('products')->insert($data);

        return redirect()->route('admin.index')->with('success', 'Product added successfully.');
    }

    public function updateProduct(Request $request, $id) {
        $data = $request->validate([
            'product_img' => 'required',
            'product_title' => 'required',
            'product_text' => 'required',
            'product_price' => 'required|numeric',
            'id_product_type' => 'required',
            'product_description' => 'required',
        ]);

        DB::table('products')->where('id', $id)->update($data);

        return redirect()->route('admin.index')->with('success', 'Product updated successfully.');
    }

    public function deleteProduct($id) {
        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('admin.index')->with('success', 'Product deleted successfully.');
    }

    public function deleteUser($id) {
        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('admin.index')->with('success', 'User deleted successfully.');
    }


}
