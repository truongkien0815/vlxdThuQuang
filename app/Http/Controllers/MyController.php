<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use App\Models\Protype;
use App\Models\Post;
use App\Models\Phone;
use App\Models\Slider;
use App\Models\Book;
use App\Models\Menu;
use App\Models\Detail;
use App\Models\Manufacture;


use App\Models\Payment;










class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function tuyendung()
     {
 
        $logo = Slider::where('type','logo')->get();
         $sdt = Phone::all();
         $protypes = Protype::all();
         $protype12 = Protype::take(3)->where('created_at','desc')->get();
         $product = Product::take(5)->get();
         $post = Post::where('loaibaiviet','=','tuyen-dung')->orderBy('created_at','desc')->get();
       
 
         $types = Type::orderBy('stt','asc')->get();
 
         $types2 = Type::orderBy('stt','asc')->get();
 
         $product_new = Product::orderBy('created_at','desc')->take(5)->get();
         $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(4)->get();
         $phones = Phone::all();
         $footer = Book::all();
         $manu = Manufacture::orderBy('created_at','desc')->get();
         return view('tuyendung')
         ->with('types', $types)
         ->with('protypes',$protypes)->with('phones',$phones)
         ->with('protype12',$protype12)
         ->with('product',$product)
         ->with('post',$post)
         ->with('manu',$manu)
         ->with('types2',$types2)
         ->with('sdt',$sdt)
         ->with('logo', $logo)
         ->with('product_new', $product_new)
         ->with('post_tintuc', $post_tintuc)
         ->with('footer', $footer)

       
 
         ;
     }
     function web($name, Request $request)
     {
        
         return view($name);
     }

     function createpayment(Request $request)
     {
         
      
         $allpayments = Payment::all();
         $allproducts = Product::all();

         $payment = new Payment;
         $user = 1;
         $payment->user_id = $user++;
         $payment->status = 0;
    
             $payment->discount = "3";
      
         $payment->save();
         foreach ($allproducts as  $value) {
             if (session()->has('carts' . $value->id)) {
                 $detail = new Detail;
                 $detail->product_id = $value->id;
                 $detail->payment_id = $payment->payment_id;
                 $detail->status = 0;
                 $detail->address = $request->address;
                 $detail->telephone = $request->telephone;
                 $detail->gmail = $request->email;

                 $detail->full_name = $request->name;

                
 
 
 
                 $detail->quantity = session()->get('carts' . $value->id);
                 $detail->save();
                 session()->forget('carts' . $value->id);
             }
         }
         Session()->flash('success', ' Mua Hàng Thành Công');
         return redirect('/');
     }






     function checkout()
     {
        
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $footer = Book::take(1)->get();
        $pro_new = Product::orderBy('created_at','desc')->take(10)->get();
        $allproducts = Product::all();
        $types = Type::orderBy('created_at','desc')->where('pid','=',0)->get();
    
       $types2 = Type::orderBy('created_at','desc')->get();
        
        return view('checkout')
        ->with('footer',$footer)
        ->with('types2',$types2)
        ->with('allproducts',$allproducts)
        ->with('pro_new',$pro_new)
        ->with('types', $types)
        ->with('logo', $logo)

        ->with('sdt',$sdt);

     }
     function carts($action = "", $product_id = "")
     {
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $footer = Book::take(1)->get();
        $pro_new = Product::orderBy('created_at','desc')->take(10)->get();
           
       
           
      
         if ($action == "add") {
             if (session()->has('carts' . $product_id)) {
                 if (request()->quantity != null) {
                     for ($i = 0; $i < (int)request()->quantity; $i++) {
                         session()->increment('carts' . $product_id);
                     }
                 } else {
                     session()->increment('carts' . $product_id);
                 }
             } else {
                 session()->put('carts' . $product_id, 1);
             }
         }
         if ($action == "+") {
             session()->increment('carts' . $product_id);
         }
         if ($action == "-") {
             if (session()->decrement('carts' . $product_id) == 0) {
                 session()->pull('carts' . $product_id);
             }
         }
         if ($action == "delete") {
             session()->pull('carts' . $product_id);
         }
       

         $allproducts = Product::all();
         $types = Type::orderBy('created_at','desc')->where('pid','=',0)->get();
     
        $types2 = Type::orderBy('created_at','desc')->get();
         
         return view('carts')
         ->with('footer',$footer)
         ->with('types2',$types2)
         ->with('allproducts',$allproducts)
         ->with('pro_new',$pro_new)
         ->with('types', $types)
         ->with('logo', $logo)
         ->with('sdt',$sdt);
     }

    public function index()
    {
        $items = Manufacture::all();
        $type_home = Type::orderBy('created_at','desc')->get();
     

        $logo = Slider::where('type','logo')->get();
        $slide = Slider::where('type','slider')->get();

  $sdt = Phone::all();
        $footer =Book::orderBy('stt','asc')->get();
        $product_khac = Product::where('noibat','=',1)->orderBy('created_at','desc')->get();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::orderBy('stt','asc')->get();
        $post = Post::where('loaibaiviet','=','gioi-thieu')->orderBy('created_at','desc')->get();
        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(8)->get();

        $pro_new = Product::orderBy('created_at','desc')->take(10)->get();
    
        $types = Type::orderBy('stt','asc')->where('home','=','on')->get();

        $types2 = Type::orderBy('stt','asc')->get();
        $menu_title = Menu::where('url','=','trangchu')->first();
       

        $phones = Phone::all();
        return view('index')
       
        ->with('items', $items)
        ->with('types', $types)
        ->with('menu_title', $menu_title)

        ->with('protypes',$protypes)->with('phones',$phones)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('post',$post)
        ->with('types2',$types2)
        ->with('pro_new',$pro_new)
        ->with('footer',$footer)
        ->with('post_tintuc',$post_tintuc)
        ->with('slide',$slide)

        
        ->with('sdt',$sdt)
        ->with('logo',$logo)
        ->with('type_home',$type_home)
        ->with('product_khac',$product_khac)

        

        
        
        





        


        ;
    }

    public function index_product()
    {
        $items = Manufacture::all();
        $logo = Slider::where('type','logo')->get();
  $sdt = Phone::all();
  $footer =Book::orderBy('stt','asc')->get();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::orderBy('created_at','desc')->paginate(36);
        $post = Post::where('loaibaiviet','=','gioi-thieu')->orderBy('created_at','desc')->get();

        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->get();
        $pro_new = Product::orderBy('created_at','desc')->take(10)->get();
        $types = Type::orderBy('stt','asc')->get();
 
         $types2 = Type::orderBy('stt','asc')->get();
        $menu_title = Menu::where('url','=','trangchu')->first();
        $manu = Manufacture::orderBy('created_at','desc')->get();

        $phones = Phone::all();

        $product_new = Product::orderBy('created_at','desc')->take(5)->get();
        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(4)->get();
        return view('index_pro')
        ->with('types', $types)
        ->with('menu_title', $menu_title)

        ->with('protypes',$protypes)->with('phones',$phones)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('post',$post)
        ->with('types2',$types2)
        ->with('pro_new',$pro_new)
        ->with('footer',$footer)
        ->with('post_tintuc',$post_tintuc)
        ->with('manu',$manu)
        
        ->with('sdt',$sdt)
        ->with('logo',$logo)
        ->with('product_new',$product_new)
        ->with('post_tintuc',$post_tintuc)
        ->with('items',$items)
       
        
        





        


        ;
    }
    public function gioithieu()
    {  $items = Manufacture::all();
        $product_gioithieu = Type::where('home','=','on')->orderBy('created_at','desc')->take(1)->get();
        $logo = Slider::where('type','logo')->get();
        $hahoatdong = Slider::where('type','hinhanhhoatdong')->get();
        $sdt = Phone::all();
        $footer =Book::orderBy('stt','asc')->get();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::orderBy('stt','asc')->get();
        // $products = Product::where('id_item','>',0)->get();

      
      
        $manu = Manufacture::orderBy('created_at','desc')->get();

        $types = Type::orderBy('stt','asc')->take(4)->get();
    
        $types2 = Type::orderBy('stt','asc')->get();
       
        $post = Post::where('loaibaiviet','=','gioi-thieu')->orderBy('created_at','desc')->get();
        $post_mst = Post::where('loaibaiviet','=','ma-so-thue')->orderBy('created_at','desc')->take(1)->get();

        
        $product_new = Product::orderBy('created_at','desc')->take(5)->get();
        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(4)->get();

       
        return view('gioithieu')
        ->with('manu',$manu)
        // ->with('products',$products)
        
        ->with('product_gioithieu',$product_gioithieu)
        ->with('post',$post)
        ->with('post_mst',$post_mst)
        
        ->with('types', $types)
        ->with('protypes',$protypes)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('types2',$types2)
        ->with('footer',$footer)
        ->with('sdt',$sdt)
        ->with('logo', $logo)
        ->with('product_new', $product_new)
        ->with('post_tintuc',$post_tintuc)
      ->with('hahoatdong', $hahoatdong)
      ->with('items', $items)
     
        ;
    }

    public function baohanh()
    {
       
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $footer = Book::take(1)->get();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::take(5)->get();
      
      

        $types = Type::orderBy('created_at','desc')->where('pid','=',0)->get();

        $types2 = Type::orderBy('created_at','desc')->get();
       
        $post = Post::where('loaibaiviet','=',3)->orderBy('created_at','desc')->get();
      

      

       
        return view('baohanh')
       
        ->with('post',$post)
        ->with('types', $types)
        ->with('protypes',$protypes)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('types2',$types2)
        ->with('footer',$footer)
        ->with('sdt',$sdt)
        ->with('logo', $logo)
       
        ;
    }

    public function giaohang()
    {
       
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $footer = Book::take(1)->get();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::take(5)->get();
      
      

        $types = Type::orderBy('created_at','desc')->where('pid','=',0)->get();

        $types2 = Type::orderBy('created_at','desc')->get();
       
        $post = Post::where('loaibaiviet','=',3)->orderBy('created_at','desc')->get();
      

      

       
        return view('giaohang')
       
        ->with('post',$post)
        ->with('types', $types)
        ->with('protypes',$protypes)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('types2',$types2)
        ->with('footer',$footer)
        ->with('sdt',$sdt)
        ->with('logo', $logo)
      
       
        ;
    }

    public function lienhe()
    
    {  
        $items = Manufacture::all();
        $menu_title = Menu::where('url','=','lien-he.html')->first();
        $logo = Slider::where('type','logo')->get();
          $sdt = Phone::all();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::orderBy('stt','asc')->get();
      
        $footer =Book::orderBy('stt','asc')->get();

        $types = Type::orderBy('stt','asc')->get();

        $types2 = Type::orderBy('stt','asc')->get();
       
        $post = Post::where('loaibaiviet','=','lien-he')->orderBy('created_at','desc')->get();
       

      

       
        return view('lienhe')
       
       
        ->with('post',$post)
        ->with('types', $types)
        ->with('protypes',$protypes)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('types2',$types2)
        ->with('footer',$footer)
        ->with('sdt',$sdt)
        ->with('logo', $logo)
        ->with('menu_title', $menu_title)
        ->with('items', $items)

       
        ;
    }
    public function dichvu()
    {
     
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $footer = Book::take(1)->get();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::take(5)->get();
        $post = Post::where('loaibaiviet','=','gioi-thieu')->orderBy('created_at','desc')->get();
      

        $types = Type::orderBy('created_at','desc')->where('pid','=',0)->get();

        $types2 = Type::orderBy('created_at','desc')->get();

       

        $phones = Phone::all();
        return view('dichvu')
        ->with('types', $types)
        ->with('protypes',$protypes)->with('phones',$phones)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('post',$post)
        ->with('footer',$footer)
        ->with('types2',$types2)
        ->with('sdt',$sdt)
        ->with('logo', $logo)
       
        ;
        
    }
    public function tintuc()
    {
        $items = Manufacture::all();
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::orderBy('stt','asc')->get();
        $post = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->paginate(36);
      
        $manu = Manufacture::orderBy('created_at','desc')->get();
        $types = Type::orderBy('stt','asc')->get();

        $types2 = Type::orderBy('stt','asc')->get();

        $product_new = Product::orderBy('created_at','desc')->take(5)->get();
        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(4)->get();
        $phones = Phone::all();
        $footer =Book::orderBy('stt','asc')->get();
        return view('tintuc')
        ->with('types', $types)
        ->with('protypes',$protypes)->with('phones',$phones)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('post',$post)
        ->with('manu',$manu)
        ->with('types2',$types2)
        ->with('sdt',$sdt)
        ->with('logo', $logo)
        ->with('product_new', $product_new)
        ->with('post_tintuc', $post_tintuc)
        ->with('footer', $footer)
        ->with('items', $items)

     
       
        ;
    }

    public function bangbaogia()
    {
        $items = Manufacture::all();
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::orderBy('stt','asc')->get();
        $post = Post::where('loaibaiviet','=','bang-bao-gia')->orderBy('created_at','desc')->paginate(36);
      
        $manu = Manufacture::orderBy('created_at','desc')->get();
        $types = Type::orderBy('stt','asc')->get();

        $types2 = Type::orderBy('stt','asc')->get();

        $product_new = Product::orderBy('created_at','desc')->take(5)->get();
        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(4)->get();
        $phones = Phone::all();
        $footer =Book::orderBy('stt','asc')->get();
        return view('bangbaogia')
        ->with('types', $types)
        ->with('protypes',$protypes)->with('phones',$phones)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('post',$post)
        ->with('manu',$manu)
        ->with('types2',$types2)
        ->with('sdt',$sdt)
        ->with('logo', $logo)
        ->with('product_new', $product_new)
        ->with('post_tintuc', $post_tintuc)
        ->with('footer', $footer)
        ->with('items', $items)
      
       
        ;
    }


    public function listsp()
    {
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $footer = Book::take(1)->get();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::take(5)->get();
        $post = Post::where('loaibaiviet','=','gioi-thieu')->orderBy('created_at','desc')->get();
      

        $types = Type::orderBy('created_at','desc')->where('pid','=',0)->get();

        $types2 = Type::orderBy('created_at','desc')->get();

       

        $phones = Phone::all();
        return view('product')
        ->with('types', $types)
        ->with('protypes',$protypes)->with('phones',$phones)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('post',$post)
        ->with('footer',$footer)
        ->with('types2',$types2)
        ->with('logo', $logo)
        ->with('sdt',$sdt);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  chi tiet sp
    public function show($id)
    {
        $items = Manufacture::all();
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $footer =Book::orderBy('stt','asc')->get();
        $types = Type::orderBy('stt','asc')->get();
        $product = Product::all();

        $product_detailt = Product::where('slug','=',$id)->first();
        $product_new = Product::orderBy('created_at','desc')->take(5)->get();
        $manu = Manufacture::orderBy('created_at','desc')->get();
        $types2 = Type::orderBy('stt','asc')->get();
        $productcungloai = Product::where('type_id','=',$product_detailt->type_id)->get();
        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(4)->get();
       
        return view('chitiet_sp')
        ->with('product',$product)
        ->with('types2',$types2)
        ->with('footer',$footer)
        ->with('productcungloai',$productcungloai)
        ->with('sdt',$sdt)
        ->with('logo', $logo)
        ->with('product_new', $product_new)
        ->with('post_tintuc', $post_tintuc)
        ->with('manu', $manu)
        ->with('product_detailt', $product_detailt)
       
        ->with('items', $items)
        ->with('types', $types);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function  sort(Request $request,$key="")
    {    
        $items = Manufacture::all();
        $logo = Slider::where('type','logo')->get();
        $footer =Book::orderBy('stt','asc')->get();
        $sdt = Phone::all();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
       
        $post = Post::where('loaibaiviet','=','gioi-thieu')->orderBy('created_at','desc')->get();

        $pro_new = Product::orderBy('created_at','desc')->take(10)->get();

        $types = Type::orderBy('created_at','desc')->get();

        $types2 = Type::orderBy('created_at','desc')->get();

       

        $phones = Phone::all();
        $request->flash();
      
      $key =  $request->old('keyword');
     
      $manu = Manufacture::orderBy('created_at','desc')->get();
        $product = Product::where('product_name','like','%'. $key .'%')->get();
        $product_new = Product::orderBy('created_at','desc')->take(5)->get();
        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(4)->get();

        return view('result')->with('product',$product)
    
        ->with('items', $items)

        ->with('types', $types)
        ->with('manu', $manu)
        ->with('protypes',$protypes)->with('phones',$phones)
        ->with('protype12',$protype12)
        ->with('footer',$footer)
        ->with('post',$post)
        ->with('types2',$types2)
        ->with('pro_new',$pro_new)
        ->with('sdt',$sdt)
        ->with('logo', $logo)
        ->with('product_new', $product_new)
        ->with('post_tintuc', $post_tintuc)
        ->with('key', $key)

        

        ;
       
        
    }

    function  sort_get()
    { 
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $footer = Book::take(1)->get();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
       
        $post = Post::where('loaibaiviet','=','gioi-thieu')->orderBy('created_at','desc')->get();

        $pro_new = Product::orderBy('created_at','desc')->take(10)->get();

        $types = Type::orderBy('created_at','desc')->where('pid','=',0)->get();

        $types2 = Type::orderBy('created_at','desc')->get();

       
       
      $key =  session()->put('key', request()->keyword);
       
      
       
       
     
        $product = Product::where('product_name','like','%'. $key .'%')->paginate(36);
       
        return view('result')
        ->with('product',$product)
        ->with('types2',$types2)
        ->with('footer',$footer)
        
        ->with('pro_new',$pro_new)

        // with('productcungloai',$productcungloai);
        // ->with('protypes',$protypes)->with('phones',$phones)
        ->with('types', $types)
        ->with('logo', $logo)
        ->with('sdt',$sdt);
       
        
    }








    function  sort_type(Request $request,$key="")
    {    
     
        $product = Product::all();

        $request->flash();
      
       
        $key =  $request->old('keyword');
     
     
        $type = Type::where('type_name','like','%'. $key .'%')->paginate(36);
        return view('admin/type_result')->with('type', $type)->with('product',$product);

    }

   
}