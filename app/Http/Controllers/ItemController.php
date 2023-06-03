<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Manufacture;
use App\Models\Product;


use App\Models\Protype;
use App\Models\Type;

class ItemController extends Controller
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
        $protype = Manufacture::orderBy('created_at','desc')->get();
        $type = Product::all();
        return view('admin/item')->with('protype', $protype)->with('type',$type);
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
        $type = Type::orderBy('created_at','desc')->get();
        $protype = Manufacture::all();
      

        return view('admin/item_add')->with('type', $type)->with('protype',$protype);
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
        $item = new Manufacture;
        $item->name = $request->protype_name;
      
        $item->type_id = $request->type_id;
      
      
       
      
       
        $item->save();
        $protype = Manufacture::orderBy('created_at','desc')->get();
        $type = Product::all();

        
        return view('admin/item')->with('protype',$protype)->with('type',$type);
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
        $type = Type::orderBy('created_at','desc')->get();
        $protype = Manufacture::where('item_id', $id)->first();
                return view('admin/item_edit')->with('protype',$protype)
                ->with('type',$type);
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
        $item = Manufacture::where('item_id',$id)->first();
        $item->name = $request->protype_name;
        $item->type_id = $request->type_id;

        
        $item->save();
        $type = Product::all();
        $protype = Manufacture::orderBy('created_at','desc')->get();
     
        return view('admin/item')->with('protype', $protype)->with('type',$type);
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
        $item = Manufacture::where('item_id','=',$id);
        $item->delete();
        $type = Product::all();
        $protype = Manufacture::orderBy('created_at','desc')->get();
     
        return view('admin/item')->with('protype', $protype)->with('type',$type);
    }
}