<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Detail;
use App\Models\User;

class PaymentsController extends Controller
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
            abort('404', __('NOT FOUND'));
        }
        $allpayments = Payment::all();
        $alldetails = Detail::all();
        // $allusers = User::all();
        return view('admin.payments', [
            'allpayments' => $allpayments,
            'alldetails' => $alldetails,
            // 'allusers' => $allusers,
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
        $allusers = User::all();
        return view('admin.addpayment', [
            'allusers' => $allusers,
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
        $allpayments = Payment::all();
        $alldetails = Detail::all();
        $payment = new Payment;
        $payment->user_id = '1';
        $payment->discount = $request->discount;
        $payment->status = 0;
        
        $payment->created_at = $request->created_at;

        $payment->save();
     
        return view('admin.payments', [
            'allpayments' => $allpayments,
            'alldetails' => $alldetails,
            // 'allusers' => $allusers,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
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
            abort('404', __('NOT FOUND'));
        }
        $allpayments = Payment::all();
        $alldetails = Detail::all();
        $allusers = User::all();
        
        $payment = Payment::where('payment_id', $id)->first();
        return view('admin.editpayment', [
            'allusers' => $allusers,
            
           
        ])->with('payment', $payment);
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
        $allpayments = Payment::all();
        $alldetails = Detail::all();
        $payment = Payment::find($id);
        $payment->user_id = 1;
        $payment->discount = $request->discount;
        $payment->created_at = $request->created_at;
        $payment->save();
        return view('admin.payments', [
            'allpayments' => $allpayments,
            'alldetails' => $alldetails,
            // 'allusers' => $allusers,
        ]);
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
        $payment = Payment::find($id);
        $payment->delete();
        $chitiet = Detail::where('payment_id',$id);
        $chitiet->delete();
        return redirect()->back();
    }
    public function delete($id)
    {
       
        $payment = Payment::find($id);
        $payment->delete();
        $chitiet = Detail::where('payment_id',$id);
        $chitiet->delete();
        return redirect()->back();
    }

    
}
