<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Product;
use App\Models\Type;
use App\Models\Protype;
use App\Models\Phone;
use App\Models\Slider;
use App\Models\Post;
use App\Models\Book;

class DocumentController extends Controller
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
        $banner = Slider::where('type','banner')->take(1)->get();
        $slider_slider = Slider::where('type','slider')->get();
        $footer = Book::take(2)->get();
        $slider = Slider::where('type','doitac')->get();
        $product = Product::take(5)->where('created_at','desc')->get();
        $postgioithieu = Post::where('loaibaiviet','=',0)->orderBy('created_at','desc')->take(1)->get();
        $types = Type::orderBy('created_at','desc')->paginate(9);
        $protypes = Protype::take(3)->orderby('stt','asc')->get();
        $documents = Document::all();
        $phone = Phone::all();
        $phones = Phone::all();
       
        return view('document')->with('documents', $documents)
        ->with('protypes', $protypes) ->with('phones', $phones)
        ->with('postgioithieu', $postgioithieu)
        ->with('slider',$slider)
        ->with('footer',$footer)
        ->with('phone',$phone)
        
        ->with('banner',$banner)

        ->with('slider_slider',$slider_slider)
         ->with('product',$product)
        ->with('types', $types);
    }

    public function index_tailieu()
    
    {   
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $protypes = Protype::all();
        $documents = Document::orderBy('created_at','desc')->paginate(10);
       

       
        return view('admin/document')->with('documents', $documents)
        ->with('protypes', $protypes);
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
        $document = Document::all();
        $protypes = Protype::all();
        return view('admin/document_add')->with('protypes', $protypes)->with('document',$document);
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
        $item = new Document;     
        $item->tieude = $request->tieude;
        if ($request->file('filetailieu') != null) {
            $request->file('filetailieu')->move('fe/img', $request->file('filetailieu')->getClientOriginalName(), 'local');
        }
        $item->filetailieu =   $_FILES['filetailieu']['name'];
        // $item->filetailieu =  $request->filetailieu;
        $item->noidung =  $request->noidung;

        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
        }
        $item->image =   $_FILES['image']['name'];
        $item->save();
        $protypes = Protype::all();
        $documents = Document::orderBy('created_at','desc')->paginate(10);
        return view('admin/document')->with('documents',$documents)->with('protypes',$protypes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Slider::where('type','banner')->take(1)->get();
        $product = Product::take(5)->where('created_at','desc')->get();
        $slider_slider = Slider::where('type','slider')->get();
        $slider = Slider::where('type','doitac')->get();
        $footer = Book::take(2)->get();
        $postgioithieu = Post::where('loaibaiviet','=',0)->orderBy('created_at','desc')->take(1)->get();
        $types = Type::orderBy('created_at','desc')->paginate(9);
        $protypes = Protype::take(3)->orderby('stt','asc')->get();
        $document = Document::find($id);
        $phones = Phone::all();
        $phone = Phone::all();
        return view('document_chitiet')->with('document',$document)->with('protypes',$protypes)
        ->with('phones',$phones)
        ->with('phone',$phone)

        ->with('types',$types)
        ->with('postgioithieu',$postgioithieu)
        ->with('slider',$slider)
        ->with('footer',$footer)
        ->with('slider_slider',$slider_slider)
        ->with('product',$product)
        ->with('banner',$banner)




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
        $item = Document::find($id);


       
        return view('admin/document_edit')->with('item', $item);
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
        $item = Document::where('document_id','=',$id)->first();
        $item->tieude = $request->tieude;

        

        if ($request->file('filetailieu') != null) {
            $request->file('filetailieu')->move('fe/img', $request->file('filetailieu')->getClientOriginalName(), 'local');
            $item->filetailieu =   $_FILES['filetailieu']['name'];
        }
        elseif ($request->file('filetailieu') == null) {
           
        }
        // $item->filetailieu =   $_FILES['filetailieu']['name'];
        $item->noidung =  $request->noidung;

        // if ($request->file('image') != null) {
        //     $request->file('image')->move('public/img', $request->file('image')->getClientOriginalName(), 'local');
        // }
        // $item->image =   $_FILES['image']['name'];

        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
            $item->image =   $_FILES['image']['name'];
        }
      
        elseif ($request->file('image') == null) {
           
        }







        
        $item->save();
        $protypes = Protype::all();
        $documents = Document::orderBy('created_at','desc')->paginate(10);
        return view('admin/document')->with('documents',$documents)->with('protypes',$protypes);
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
        $item = Document::find($id);
        $item->delete();
        return redirect()->back();
    }
}
