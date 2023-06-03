<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Detail;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Contact;

use Illuminate\Http\Request;

class DetailsController extends Controller
{

    public function index_data()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
        
        $alldetails = Detail::all();
        $allproducts = Product::all();
        $allpayments = Payment::all();
        return view('datatable', [
            'alldetails' => $alldetails,
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
        ]);
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
    public function index_all()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
        
        $alldetails = Detail::all();
        $allproducts = Product::all();
        $allpayments = Payment::all();
        return view('admin.details_all', [
            'alldetails' => $alldetails,
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
        ]);
    }
    public function showe(Request $request)
    {  
        $product = Contact::where('id','=',$request->idp)->first();
        return $product;
    }

    // don da giao
    public function index_hoanhthanh()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
       
        $alldetails =  Detail::where('status','=',1)->get();
        $allproducts = Product::all();
        $allpayments = Payment::all();
        return view('admin.details_hoanthanh', [
            'alldetails' => $alldetails,
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
        ]);
    }
    public function index()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
        $alldetails = Detail::all();
        $allproducts = Product::all();
        $allpayments = Payment::all();
        return view('admin.details', [
            'alldetails' => $alldetails,
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
        $allproducts = Product::all();
        $allpayments = Payment::all();
        return view('admin.adddetail', [
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
        ]);
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
            abort('404', __('NOT FOUND'));
        }
        $detail = new Detail;
        $detail->product_id = $request->product_id;
        $detail->payment_id = $request->payment_id;
        $detail->quantity = $request->quantity;
        $detail->status = 0;
        $detail->address = 'Thu Duc,Ho Chi Minh';
        $detail->telephone = '0826333666';
        $detail->gmail = 'admin@gmail.com';
        $detail->full_name = 'admin';





        $detail->save();
        return redirect()->action([DetailsController::class, 'index']);
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
        $allproducts = Product::all();
        $allpayments = Payment::all();
        $detail = Detail::where('detail_id', $id)->first();
        return view('admin.editdetail', [
            'detail' => $detail,
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
        ]);
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
            abort('404', __('NOT FOUND'));
        }
        $detail = Detail::find($id);
        $detail->product_id = $request->product_id;
        $detail->payment_id = $request->payment_id;
        $detail->quantity = $request->quantity;
        $detail->save();
        // return redirect()->back();
        return redirect()->action([DetailsController::class, 'index']);
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
            abort('404', __('NOT FOUND'));
        }
        $detail = Detail::find($id);
        $detail->delete();
        return redirect()->back();
        // return redirect()->action([DetailsController::class, 'index']);
    }

    public function update_hoanthanh(Request $request, $id)
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
        $detail = Detail::where('detail_id','=',$id)->first();
       
        $detail->status = 1;
        $detail->save();
        return redirect()->back();
        // return redirect()->action([DetailsController::class, 'index']);
    }
    public function update_chuaxuly(Request $request, $id)
    {
       
        $detail = Detail::find($id);
       
        $detail->status = 0;
        $detail->save();
        return redirect()->back();
        
    }
}