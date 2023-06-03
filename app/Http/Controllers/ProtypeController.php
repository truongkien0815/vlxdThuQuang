<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Phone;

use App\Models\Protype;
use App\Models\Type;

class ProtypeController extends Controller
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
        $protype = Protype::orderBy('created_at','desc')->get();
        $type = Type::all();
        return view('admin/protype')->with('protype', $protype)->with('type',$type);
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

        return view('admin/protype_add')->with('type', $type)->with('protype',$protype);
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
        $item = new Protype;
        $item->name = $request->protype_name;
        $item->type =  $request->type;
        $item->options =  $request->content;

        // $item->stt =  $request->stt;

        $item->tenkhongdau = $item->convert_name($request->protype_name);
        $item->keywords = $request->keywords;
        $item->description = $request->description;

      
      
        $item->image =   $_FILES['image']['name'];
        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
           
        }
      
       
        $item->save();
        $protype = Protype::orderBy('created_at','desc')->get();
        $type = Type::all();

        
        return view('admin/protype')->with('protype',$protype)->with('type',$type);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $protype = Protype::where('protype_id', $id)->first();
                return view('admin/protype_edit')->with('protype',$protype);
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
        $item = Protype::where('protype_id',$id)->first();
        $item->name = $request->protype_name;
        $item->type =  $request->type;
        $item->options =  $request->content;

        // $item->stt =  $request->stt;
        
        $item->tenkhongdau = $item->convert_name($request->protype_name);
        $item->keywords = $request->keywords;
        $item->description = $request->description;

      
      
    
        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
            $item->image =   $_FILES['image']['name'];
        }
      
        if ($request->file('image') == null) {
           
        }
        $item->save();
        $type = Type::all();
        $protype = Protype::orderBy('created_at','desc')->get();
     
        return view('admin/protype')->with('protype', $protype)->with('type',$type);
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
        $item = Protype::where('protype_id','=',$id);
        $item->delete();
        $type = Type::all();
        $protype = Protype::orderBy('created_at','desc')->get();
     
        return view('admin/protype')->with('protype', $protype)->with('type',$type);
    }
}