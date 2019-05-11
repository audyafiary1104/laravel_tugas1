<?php

namespace App\Http\Controllers;
use App\barang1s;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class testcontroller1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new barang1s();
        $barang->name_barang = $request->get('barang');
        $barang->stock = $request->get('stock');
        $barang->harga = $request->get('harga');
        $barang->save();
    
        return redirect('table')->with('success','Barang berhasil di buat');    
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
     
        $barang1s = barang1s::find($id);
      
        return view('edit',compact('barang1s','id'));
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
      
        $barang1s= barang1s::find($id);
        $barang1s->name_barang=$request->name_barang;
        $barang1s->save();
         return redirect('barang1s');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang1s = barang1s::find($id);
        $barang1s->delete();
        return redirect('barang1s')->with('success','Employee Has Been Deleted');    
    }}

