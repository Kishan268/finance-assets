<?php

namespace App\Http\Controllers\Assets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\FinanceAsset;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // die('dfxg')''
        $data = FinanceAsset::where('deleted_at_status',0)->get();
        // dd($financeAsset);
        return view('Assets.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Assets.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name'=>'required',
            'quantity'=>'required',
            'serial_no'=>'required',
            'type'=>'required'
            ]);
        FinanceAsset::create($data);
      return back()->with("success","Asset Add Successfully");
        // $data = FinanceAsset::get();
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
        $data = FinanceAsset::where('id',$id)->first();
        return view('Assets.edit',compact('data'));
        dd($data);

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
        $data = $request->validate([
            'name'=>'required',
            'quantity'=>'required',
            'serial_no'=>'required',
            'type'=>'required'
            ]);
        FinanceAsset::find($id)->update($data);
        return back()->with("success","Asset Update Successfully");
        dd($request);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FinanceAsset::where('id', $id)->update(['deleted_at_status' => 1]);
      return back()->with("success","Asset Deleted Successfully");
    }
}
