<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeLanguage($language)
{
    \Session::put('website_language', $language);

    return redirect()->back();
}


    public function showPageGuest()

{

  if (!$this->userCan('view-page-guest')) {

      abort('403', __('Bạn không có quyền thực hiện thao tác này'));

  }

  return view("layouts.page_guest");

}
function userCan($action, $option = NULL)
{
    $user = Auth::user();
    return Gate::forUser($user)->allows($action, $option);
}

public function showPageAdmin()

{

  if (!$this->userCan('view-page-admin')) {

      abort('403', __('Bạn không có quyền thực hiện thao tác này'));

  }

  return view("layouts.page_admin");

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
}