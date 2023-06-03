<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Type;
use App\Models\Protype;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Book;
use App\Models\Product;
use App\Models\Menu;

use App\Models\Manufacture;


class ContactController extends Controller
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
        $contact = Contact::orderBy('created_at','desc')->get();
        $type = Type::all();
        $protypes = Protype::all();
        return view('admin/contact')->with('type', $type)->with('contact',$contact)->with('protypes',$protypes);
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
    public function addcontact()
    {
        
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }

        return view('admin/contact_add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function story(Request $request)
    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }

        $item = new Contact;
       
        $item->address = $request->diachi_lienhe;
        $item->subject = $request->tieude_lienhe;
        $item->content = $request->noidung_lienhe;
        $item->email = $request->email_lienhe;
        $item->mobile =  $request->dienthoai_lienhe;
        $item->fullname =  $request->ten_lienhe;
        $item->save();
        // $product = Product::all();
        $contact = Contact::orderBy('created_at','desc')->paginate(10);
        $type = Type::all();
        $protypes = Protype::all();
        return view('admin/contact')->with('type', $type)->with('contact',$contact)->with('protypes',$protypes);
    }

    public function store(Request $request)
    {
        $item = new Contact;
       
        $item->address = $request->address;
        $item->subject = $request->title;
        $item->content = $request->content;
        $item->email = $request->email;
        $item->mobile =  $request->cell;
        $item->fullname =  $request->fullname;
        $item->save();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::take(5)->get();
      
        $footer = Book::take(1)->get();

        $types = Type::orderBy('created_at','desc')->get();

        $types2 = Type::orderBy('created_at','desc')->get();
       
        $post = Post::where('loaibaiviet','=','lien-he')->orderBy('created_at','desc')->get();
        $menu_title = Menu::where('url','=','lien-he.html')->first();
        $logo = Slider::where('type','logo')->get();
         $sdt = Phone::all();
         $items = Manufacture::all();
        return view('lienhe')
        ->with('post',$post)
        ->with('types', $types)
        ->with('protypes',$protypes)
        ->with('protype12',$protype12)
        ->with('product',$product)
        ->with('types2',$types2)
        ->with('footer',$footer)
        ->with('menu_title',$menu_title)
        ->with('sdt',$sdt)
        ->with('logo',$logo)
        ->with('items',$items)
      


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
        $item = Contact::find($id);


       
        return view('admin/contact_edit')->with('item', $item);
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
        $item = Contact::find($id);
        $item->address = $request->diachi_lienhe;
        $item->subject = $request->tieude_lienhe;
        $item->content = $request->noidung_lienhe;
        $item->email = $request->email_lienhe;
        $item->mobile =  $request->dienthoai_lienhe;
        $item->fullname =  $request->ten_lienhe;
        $item->save();
        // $product = Product::all();
        $contact = Contact::orderBy('created_at','desc')->paginate(10);
        $type = Type::all();
        $protypes = Protype::all();
        return view('admin/contact')->with('type', $type)->with('contact',$contact)->with('protypes',$protypes);
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
        $item = Contact::find($id);
        $item->delete();
        return redirect()->back();
    }





    public function lienhe_sdt(Request $request)
    {
        $item = new Contact;
       
        $item->address = 'Hãy liên hệ qua số điện thoại này để tư vấn cho tôi';
        $item->subject = 'Hãy liên hệ qua số điện thoại này để tư vấn cho tôi';
        $item->content = "Hãy liên hệ qua số điện thoại này để tư vấn cho tôi";
        $item->email = 'Hãy liên hệ với tôi qua số điện thoại này';
        $item->mobile =  $request->sdt;
        $item->fullname =  'Hãy liên hệ với tôi qua số điện thoại này';
        $item->save();
        $protypes = Protype::all();
        $protype12 = Protype::take(3)->where('created_at','desc')->get();
        $product = Product::take(5)->get();
      
        $footer = Book::take(1)->get();

        $types = Type::orderBy('created_at','desc')->get();

        $types2 = Type::orderBy('created_at','desc')->get();
       
        $post = Post::where('loaibaiviet','=','lien-he')->orderBy('created_at','desc')->get();
        $menu_title = Menu::where('url','=','lien-he.html')->first();
        $logo = Slider::where('type','logo')->get();
         $sdt = Phone::all();
         return redirect()->back();




        ;
    }

}
