<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
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
        $type = Slider::orderBy('created_at','desc')->paginate(10);
     

        return view('admin/slider')->with('type', $type);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function addslider()
    {
        if (!$this->userCan('view-page-admin')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
      
        }
        $type = Slider::orderBy('created_at','desc')->paginate(10);

        return view('admin/slider_add')->with('type', $type);
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
        $item = new Slider;      
        $item->photo =   $_FILES['image']['name'];
      
    
        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
        }
        $item->link = $request->linkne;
        $item->type = $request->type;
        $item->save();
       
       
        $type = Slider::orderBy('created_at','desc')->paginate(10);
        return view('admin/slider')->with('type', $type);
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
        $type = Slider::find($id);
        $types = Slider::all();

        
                return view('admin/slider_edit')->with('type', $type)
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
           $item = Slider::find($id);
       
       
     
       
      
    
        if ($request->file('image') != null) {
            $request->file('image')->move('fe/img', $request->file('image')->getClientOriginalName(), 'local');
            $item->photo =   $_FILES['image']['name'];
        }
      
        elseif ($request->file('image') == null) {
           
        }
        $item->link = $request->linkne;
        $item->type = $request->type;
        $item->save();
        $type = Slider::orderBy('created_at','desc')->paginate(10);
     
     
        return view('admin/slider')->with('type', $type);
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
        $item = Slider::find($id);

        $item->delete();
        return redirect()->back();
    }
}
