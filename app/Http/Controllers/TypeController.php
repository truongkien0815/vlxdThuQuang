<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Book;
use App\Models\Manufacture;


class TypeController extends Controller
{

    public function index_data()
    {
       
        $type = Type::orderBy('created_at','desc')->get();
        $product = Product::all();
        $protype = Protype::all();


        return view('admin/type')->with('type', $type)->with('product',$product)->with('protype',$protype);
    }
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
        $type = Type::orderBy('created_at','desc')->get();
        $product = Product::all();

        return view('admin/type')->with('type', $type)->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $protype = Protype::all();
        $type = Type::all();

        return view('admin/type_add')->with('type', $type)->with('protype',$protype);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $item = new Type;      
        $item->title = $request->title;
        $item->type_name = $request->type_name;
        $item->protype_id =  $request->pid;
        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
        }
        $item->type_image =   $_FILES['image']['name'];
     
        if ($request->file('img_congty') != null) {
            $request->file('img_congty')->move('fe/img', $request->file('img_congty')->getClientOriginalName(), 'local');
            $item->img_congty =   $_FILES['img_congty']['name'];
        }
      
        if ($request->file('img_congty') == null) {
           
        }
        $item->slug = $item->convert_name($request->type_name);
        $item->keywords = $request->keywords;
        $item->description = $request->description;
        $item->options = $request->options;
        $item->stt = $request->stt;
        $item->dacta = $request->dacta;

        // $item->vn_title_site = $request->vn_title_site;
        // $item->status = $request->status;
        if($request->home == null)
        {
            $item->home = "null";
        }
        else
     {   $item->home = 'on';}

        
        $item->save();
        $product = Product::all();
        $type = Type::orderBy('created_at','desc')->get();
        $protype = Protype::all();
        return view('admin/type')->with('protype', $protype)->with('type',$type)->with('product',$product);
      
     }

    public function story(Request $request)
    {
        // ajax
        if($request->type == 0)
        {
            $product = Type::all();
        }
        else
      {  $product = Type::where('protype_id','=',$request->type)->get();}
        return $product;
    }

    public function show_type($id)
    {
        
        $logo = Slider::where('type','logo')->get();
   $sdt = Phone::all();
        $footer = Book::all();
        $banner = Slider::where('type','banner')->take(1)->get();
        $phone = Phone::all();
        $product = Product::take(5)->where('created_at','desc')->get();
        $slider_slider = Slider::where('type','slider')->get();

        $footer = Book::take(2)->get();
        $slider = Slider::where('type','doitac')->get();

        $postgioithieu = Post::where('loaibaiviet','=',0)->orderBy('created_at','desc')->take(1)->get();
        $types = Type::orderBy('created_at','desc')->get();
        // cac san pham
        $protypes = Protype::take(3)->orderby('stt','asc')->get();

        $proty = Protype::where('tenkhongdau','=',$id)->first();
        $type = Type::where('protype_id','=',$proty->protype_id)->paginate(10);
        $phones = Phone::all();
        return view('productmax')->with('protypes',$protypes)->with('proty',$proty)->with('type',$type)
        ->with('phones', $phones)
        ->with('phone', $phone)

        ->with('postgioithieu', $postgioithieu)
        ->with('slider', $slider)
        ->with('footer', $footer)
        ->with('slider_slider', $slider_slider)
        ->with('product',$product)
        ->with('footer',$footer)
        ->with('types', $types)
        ->with('banner',$banner)
        ->with('sdt',$sdt)
        ->with('logo',$logo)

        ;

    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Manufacture::all();
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $footer = Book::all();
        $pro_new = Product::orderBy('created_at','desc')->take(10)->get();
        $types = Type::orderBy('stt','asc')->get();
        $product = Product::where('slug','=',$id)->first();
        $types2 = Type::orderBy('stt','asc')->get();
        $manu = Manufacture::orderBy('created_at','desc')->get();
       
        $type = Type::where('slug','=',$id)->first();
        $product = Product::where('type_id','=',$type->type_id)->get();
        $product_new = Product::orderBy('created_at','desc')->take(5)->get();
        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(4)->get();
        return view('dichvu')
        ->with('product',$product)
        ->with('types2',$types2)
        ->with('type',$type)
        ->with('pro_new',$pro_new)
        ->with('footer',$footer)
        ->with('sdt',$sdt)
        ->with('logo',$logo)
        ->with('product_new',$product_new)
        ->with('post_tintuc',$post_tintuc)
        ->with('manu',$manu)
        ->with('items',$items)
      
        ->with('types', $types);
        ;
    }



    public function show_item($id)
    {
        $items = Manufacture::all();
        $manu = Manufacture::orderBy('created_at','desc')->get();
        $logo = Slider::where('type','logo')->get();
        $sdt = Phone::all();
        $footer = Book::all();
        $pro_new = Product::orderBy('created_at','desc')->take(10)->get();
        $types = Type::orderBy('created_at','desc')->get();
        // $product = Product::where('slug','=',$id)->first();
        $types2 = Type::orderBy('created_at','desc')->get();

       
        $type = Manufacture::where('item_id','=',$id)->first();
        $product = Product::where('item_id','=',$id)->get();
        $product_new = Product::orderBy('created_at','desc')->take(5)->get();
        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(4)->get();
        return view('dichvu_item')
        ->with('product',$product)
        ->with('types2',$types2)
        ->with('type',$type)
        ->with('pro_new',$pro_new)
        ->with('footer',$footer)
        ->with('sdt',$sdt)

        ->with('logo',$logo)
        ->with('product_new',$product_new)
        ->with('post_tintuc',$post_tintuc)
        ->with('manu',$manu)
          ->with('items',$items)
        ->with('types', $types);
        ;
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
        $type = Type::where('type_id', $id)->first();
        $protype = Protype::all();
        $types = Type::all();

                return view('admin/type_edit')->with('type', $type)->with('protype',$protype)
                ->with('types', $types)
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
        $item = Type::where('type_id',$id)->first();
        $product = Product::all();
        $item->type = $request->type;
        $item->type_name = $request->type_name;
        $item->slug = $item->convert_name($request->type_name);
        $item->stt = $request->stt;
        $item->keywords = $request->keywords;
        $item->description = $request->description;
        $item->dacta = $request->dacta;
        $item->title = $request->title;

        

        
        // $item->vn_detail = $request->vn_detail;
        // $item->vn_title_site = $request->vn_title_site;
        if($request->home == null)
        {
            $item->home = "null";
        }
   if($request->home != null)
     {   
        $item->home = 'on';
    }
      
       
      
      
    
        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
            $item->type_image =   $_FILES['image']['name'];
        }
      
        if ($request->file('image') == null) {
           
        }
        if ($request->file('img_congty') != null) {
            $request->file('img_congty')->move('fe/img', $request->file('img_congty')->getClientOriginalName(), 'local');
            $item->img_congty =   $_FILES['img_congty']['name'];
        }
      
        if ($request->file('img_congty') == null) {
           
        }
        
       
        $item->save();
        $type = Type::orderBy('created_at','desc')->get();
        $protype = Protype::all();
     
        return view('admin/type')->with('protype', $protype)->with('type',$type)->with('product',$product);
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
        $item = Type::where('type_id','=',$id);
        $item->delete();
        return redirect()->back();
    }
}