<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $customer = Customer::all();
        $customer = Customer::paginate(6);
        $posts = Customer::orderBy('no_rek','desc')->paginate(6);
        
        return view('customer.index',compact('customer'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.create');
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
        $request->validate([
            'no_rek'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'jenis_tabungan'=>'required',
            'saldo'=>'required',
        ]);

        Customer::create($request->all());

        return redirect()->route('customer.index')
        ->with('success','Customer Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
        $detail = Customer::find($customer);
        return view('customer.detail', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
        $detail = Customer::find($customer);
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $customer)
    {
        //
        $request->validate([
            'no_rek'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'jenis_tabungan'=>'required',
            'saldo'=>'required',
        ]);
        // Customer::find($customer)->update($request->all());

        Customer::find($customer)->update($request->all());

        return redirect()->route('customer.index')
        ->with('success','Customer Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($customer)
    {
        //
        Customer::find($customer)->delete();
        return redirect()->route('customer.index')
        ->with('success','Customer Berhasil Dihapus');
    }
}