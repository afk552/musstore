<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\CartProduct;

class MainController extends Controller
{
    public function home(){
        $products = DB::select("SELECT * FROM products");
        $list_product = DB::select("SELECT * FROM products ORDER BY RAND() LIMIT 8");
        return view('pages.home')->with('products',$products)->with('list_product',$list_product);
    }
    public function products(){
        $products = DB::select("SELECT * FROM products");

        return view('pages.products')->with('products',$products);
    }

    public function lk(){
        return view('pages.lk');
    }

    public function lk_orders(){
        return view('pages.lk_orders');
    }

    public function success(){
        return view('pages.success');
    }

    public function pay(){
        return view('pages.pay_form');
    }
    public function studio_monitors(){
        $products = DB::select("SELECT * FROM products");
        return view('pages.studio_monitors')->with('products',$products);
    }
    public function headphones(){
        $products = DB::select("SELECT * FROM products");
        return view('pages.headphones')->with('products',$products);
    }
    public function midi_keyboards(){
        $products = DB::select("SELECT * FROM products");
        return view('pages.midi_keyboard')->with('products',$products);
    }
    public function guitars(){
        $products = DB::select("SELECT * FROM products");
        return view('pages.guitars')->with('products',$products);
    }
    public function contact(){
        return view('pages.contact');
    }

    public function product_page($id){
        $products = DB::select("SELECT * FROM products ");

        $product = DB::select("SELECT * FROM products WHERE products.id =$id");
        return view('pages.product_page')->with('products',$products)->with('product', $product);
    }
    public function addCart($id) {
        $products = DB::select("SELECT * FROM products ");
        $carts = DB::select("SELECT * FROM carts");
        $cart_product = DB::select("SELECT * FROM cart_products");
        $orders_product = DB::select("SELECT * FROM orders_products");
        $status = DB::select("SELECT * FROM statuses");
        $orders = DB::select("SELECT * FROM orders");
        DB::table('cart_products')->insert([
            'id_cart' => '1',
            'id_product' => $id
        ]);
        return redirect('/cart');
    }
    public function deleteCart($id)
    {
        $cartItem = CartProduct::find($id);
        if ($cartItem) {
            $cartItem->delete();

            return redirect()->back()->with('success', 'Item removed from cart successfully.');
        }
        return redirect()->back()->with('error', 'Item not found in cart.');
    }
    public function getUser(){
        $id = session('id');
        $products = DB::select("SELECT * FROM products ");
        $user = DB::select("SELECT * FROM users WHERE users.id =$id");
        $carts_user = DB::select("SELECT * FROM carts");
        $cart_product = DB::select("SELECT * FROM cart_products");
        $orders_product = DB::select("SELECT * FROM orders_products");
        $status = DB::select("SELECT * FROM statuses");
        $orders = DB::select("SELECT * FROM orders");
        return view('pages.user')->with('products' , $products)->with('user' , $user)->with('carts_user' ,$carts_user)->with('cart_products', $cart_product)->with('orders_products', $orders_product)->with('statuses', $status)->with('orders', $orders);
    }
    function loginUser(Request $request)
    {
        $data = $request->input();

        // Attempt to find the user and verify the password
        $user = DB::table('users')->where('email', $data['email'])->first();

        if ($user && password_verify($data['password'], $user->password)) {
            // Successful login
            $request->session()->put('id', $user->id);
            $request->session()->put('email', $user->email);

            return redirect('/user');
        } else {
            // Failed login
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    function registrationUser(Request $request)
    {
        $data = $request->input();
        $users = DB::select("SELECT * FROM users ");
        $hashed_password = password_hash($data['password_reg'], PASSWORD_BCRYPT);
        $flag_user = false;

        if ($hashed_password !== null && $data['password_reg'] !== null) {
            $flag_user = true;
        }

        if ($flag_user == true) {
            $existingUser = DB::table('users')->where('email', $data['email_reg'])->first();

            if (!$existingUser) {
                DB::table('users')->insert([
                    'email' => $data['email_reg'],
                    'password' => $hashed_password
                ]);
                return redirect('/products');
            } else {
                return redirect()->back()->with('error', 'A user with this email already exists.');
            }
        } else {
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }

    function exitUser(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
