<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Redirect;
use \App\Product;
use \App\User;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admins/admin');
    }
    public function showFormProduct(){
        return view('admins.addproduct');
    }
    public function saveFormProduct(Request $request,\App\Product $product){
        $uniqueFileName = uniqid().'_' . $request->productName . '.' . $request->file('pdfProduct')->getClientOriginalExtension();
        
        $request->file('pdfProduct')->move('pdf',$uniqueFileName);
        $product->name = $request->productName;
        $product->file_Name = $uniqueFileName;
        $product->save();
        return redirect('admins/show/product');
    }
    public function showProducts(){
        $products = Product::all();
        return view('admins.showproduct',compact('products'));
    }
    public function showFormEdit(Product $product,$id){
        $product = $product->where('id',$id)->get()[0];
        
        return view('admins.editproduct',compact('product'));
    }
    public function saveEdit(Request $request,$id){
        $product = Product::find($id);
        $fileName = '';
        //dd($request->productName);
        //dd($request->pdfinput);
       
        
        if($request->pdfinput != null){
            if($product->file_Name != ''){
                $filePath = public_path('pdf/'.$product->file_Name);
                unlink($filePath);
            }
            $fileName = rand().$request->productName . '.'.$request->file('pdfinput')->getClientOriginalExtension();
            $request->file('pdfinput')->move('pdf',$fileName);
        }else if($request->checkdelete == 'yes'){
            $filePath = public_path('pdf/'.$product->file_Name);
            unlink($filePath);
        }
        $product->name = $request->productName;
        $product->file_Name = $fileName;
        $product->save();
        return redirect('admins/show/product');
    }
    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        if($product->file_Name != ''){
            $filePath = public_path('pdf/'.$product->file_Name);
            unlink($filePath);
        }
        return Redirect::back();
    }
    public function showadminadd(){
        return view('admins.addNewAdmin');
    }
    public function showAllAdmin(){
        $user = User::all();
        return view('admins.showAllAdmin',compact('user'));
    }
}
