<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Protype;
use App\Models\Phone;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Type;
use App\Models\Slider;
use App\Models\Book;
use App\Models\Product;
use App\Models\Manufacture;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $post = Post::orderBy('created_at','desc')->get();
       
        return view('admin/post')->with('post', $post);

        // return view('admin/post')->with('post', $post);
    }
    function userCan($action, $option = NULL)
    {
        $user = Auth::user();
        return Gate::forUser($user)->allows($action, $option);
    }
    public function addpost()
    {
        
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }

        return view('admin/post_add');
    }
    public function ind()
    {
      
       

        return view('admin/editors');
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
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $item = new Post;      
        $item->tieude = $request->tieude;
        $item->loaibaiviet =  $request->loaibaiviet;
        $item->noidung =  $request->noidung;
        $item->title =  $request->title;
        $item->slug = $item->convert_name($request->tieude);
        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
        }
        $item->hinhanh =   $_FILES['image']['name'];
        $item->save();
       
        $post = Post::orderBy('created_at','desc')->get();
        return view('admin/post')->with('post',$post);
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
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::orderBy('stt','asc')->get();
        $post = Post::where('loaibaiviet','=',1)->orderBy('created_at','desc')->get();
        $post_tintuc = Post::where('loaibaiviet','=','tin-tuc')->orderBy('created_at','desc')->take(4)->get();

        $pro_new = Product::orderBy('created_at','desc')->take(10)->get();

        $types = Type::orderBy('stt','asc')->get();
        $phones = Phone::all();
        $types2 = Type::orderBy('stt','asc')->get();
        $post = Post::where('slug','=',$id)->first();
        $product_new = Product::orderBy('created_at','desc')->take(5)->get();
        $manu = Manufacture::orderBy('created_at','desc')->get();
        return view('post_chitiet')->with('post',$post)->with('types', $types)
        ->with('protypes',$protypes)->with('phones',$phones)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('post',$post)
        ->with('types2',$types2)
        ->with('pro_new',$pro_new)
        ->with('footer',$footer)
        ->with('post_tintuc',$post_tintuc)
        ->with('phones',$phones)
        ->with('sdt',$sdt)
        ->with('logo',$logo)
        ->with('product_new',$product_new)
        ->with('manu',$manu)
        ->with('items',$items)
       

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
        $item = Post::find($id);


       
        return view('admin/post_edit')->with('item', $item);
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
        $item = Post::find($id);
        $item->title =  $request->title;
        $item->tieude = $request->tieude;
        $item->loaibaiviet =  $request->loaibaiviet;
        $item->noidung =  $request->noidung;
        $item->slug = $item->convert_name($request->tieude);
        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
            $item->hinhanh =   $_FILES['image']['name'];
        }
      
        elseif ($request->file('image') == null) {
           
        }


        // if ($request->file('image') != null) {
        //     $request->file('image')->move('public/img', $request->file('image')->getClientOriginalName(), 'local');
        // }
     
        $item->save();
       
        $post = Post::orderBy('created_at','desc')->get();
        return view('admin/post')->with('post',$post);
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
        $item = Post::find($id);
        $item->delete();
        $post = Post::orderBy('created_at','desc')->get();
       

        return view('admin/post')->with('post', $post);
    }
}