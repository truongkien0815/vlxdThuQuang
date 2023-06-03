<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Product;
use App\Models\Type;
use App\Models\Manufacture;

use App\Models\Protype;
use App\Models\Document;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function userCan($action, $option = NULL)
    {
        $user = Auth::user();
        return Gate::forUser($user)->allows($action, $option);
    }

    public function index()
    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        
        $products = Product::orderBy('created_at','desc')->get();
        $types = Type::all();
     
       
        return view('admin/products')->with('products', $products)->with('types', $types)
      
        ;
    }

    // 
    public function index_admin()
    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $products = Product::orderBy('created_at','desc')->get();
        $types = Type::all();
        // $items = Manufacture::all();

     


       
        return view('admin/products')->with('products', $products)->with('types', $types)
        // ->with('items', $items)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  if (!$this->userCan('view-page-admin')) {

        abort('403', __('Bạn không có quyền thực hiện thao tác này'));
  
    }
    $documents = Document::all();

        $products = Product::all();
        $type = Type::all();
        $items = Manufacture::all();
        return view('admin/product_add')->with('type', $type)->with('products',$products)
        ->with('documents',$documents)
        ->with('items',$items)
      

        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
     {
         $product = Product::where('product_name','like','%'. $request->productname .'%')->take(15)->get();
         return $product;
     }
     public function search_type(Request $request)
     {
         $product = Type::where('type_name','like','%'. $request->protype .'%')->take(15)->get();
         return $product;
     }
    public function store(Request $request)
    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $product = new Product;
    
        $product->stt =  $request->stt;
        
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->thongso = $request->thongso;
        $product->type_id =  $request->type_id;
        $product->item_id =  $request->item_id;

        
        $product->title =  $request->title;
       
        $product->slug = $product->convert_name($request->product_name);
        $product->keyword = $request->keyword;
        // $product->vn_dacdiem = $request->vn_dacdiem;
        // $product->status = $request->status;
        // $product->is_sale = $request->is_sale;
        // $product->sale_price = $request->sale_price;
        // $product->vote = $request->vote;
        // $product->properties = $request->properties;
     


        if($request->home == null)
        {
            $product->home = 0;
        }
        else
     {   $product->home = 1;}

     if($request->noibat == null)
     {
         $product->noibat = 0;
     }
     else
  {   $product->noibat = 1;}
        
        // $product->vn_detailt = "1";

      
        $product->product_image =  $_FILES['image']['name'];

        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
        }
        $product->product_image1 =  $_FILES['image1']['name'];

        if ($request->file('image1') != null) {
            $request->file('image1')->move('fe/img', $request->file('image1')->getClientOriginalName(), 'local');
        }
        $product->product_image2 =  $_FILES['image2']['name'];

        if ($request->file('image2') != null) {
            $request->file('image2')->move('fe/img', $request->file('image2')->getClientOriginalName(), 'local');
        }
       
        $product->save();
      

       
        // $product = Product::all();
       
        $products = Product::orderBy('created_at','desc')->get();
        $type = Type::all();
        return view('admin/products')->with('type', $type)->with('products',$products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $documents = Document::all();
        $item = Product::find($id);
$type = Type::all();
$items = Manufacture::all();
       
        return view('admin/product_edit')->with('item', $item)->with('type',$type)
        ->with('documents',$documents)
        ->with('items',$items)

       

        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $item = Product::find($id);

        $item->product_name = $request->product_name;
        $item->price = $request->price;
     


       

     
        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
            $item->product_image =  $_FILES['image']['name'];
        }
      
        if ($request->file('image') == null) {
           
        }
        // 

        if ($request->file('image1') != null) {
            $request->file('image1')->move('fe/img', $request->file('image1')->getClientOriginalName(), 'local');
            $item->product_image1 =  $_FILES['image1']['name'];
        }
      
        if ($request->file('image1') == null) {
           
        }

        if ($request->file('image2') != null) {
            $request->file('image2')->move('fe/img', $request->file('image2')->getClientOriginalName(), 'local');
            $item->product_image2 =  $_FILES['image2']['name'];
        }
      
        if ($request->file('image2') == null) {
           
        }

        $item->stt =  $request->stt;
        $item->type_id = $request->type_id;
        $item->item_id = $request->item_id;

        $item->description = $request->description;
        $item->thongso = $request->thongso;
        $item->title =  $request->title;
        // $item->sale_price = $request->sale_price;
        $item->slug = $item->convert_name($request->product_name);
        $item->keyword = $request->keyword;
        if($request->home == null)
        {
            $item->home = "0";
        }
        else
     {   $item->home = 1;}

     if($request->noibat == null)
     {
         $item->noibat = "0";
     }
     else
  {   $item->noibat = 1;}

        $item->save();
        $products = Product::orderBy('created_at','desc')->get();
        $type = Type::all();
        return view('admin/products')->with('type', $type)->with('products',$products);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $item = Product::find($id);

         $item->delete();
         return redirect()->back();
    }
}