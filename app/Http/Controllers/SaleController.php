<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleRequest;
use App\Models\Employee;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $locale = $request->session()->get('lang', 'en');
//        App::setLocale($locale);


        $sales=Sale::all();
        return view('sales.sales', ['sales'=>$sales, 'order'=>'ASC']);
    }





    public function indexOrder($field,$order, Request $request)
    {
        if ($order=='ASC') {
            $sales=Sale::orderBy  ($field)->get();
        }else {
            $sales=Sale::orderByDesc  ($field)->get();
        }

        if ($order=='ASC') $order='DESC' ;
        else $order='ASC';
        return view ('sales.sales', ['sales'=>$sales,'field'=>$field,'order'=>$order]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees=Employee::all();
        return view('sales.create', ['employees'=>$employees]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleRequest $request)
    {
        $sales=new Sale();
        $sales->fill($request->all());
        $sales->save();
        return redirect()->route("sales.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        $employees=Employee::all();
        return view('sales.edit', ['sale'=>$sale, 'employees'=>$employees]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(SaleRequest $request, Sale $sale)
    {
        $sale->fill($request->all());
        $sale->save();
        return redirect()->route("sales.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sale::destroy($id);
        return redirect()->route("sales.index");
    }
}
