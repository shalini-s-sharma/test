<?php

namespace App\Http\Controllers;
//require 'vendor/autoload.php';
require_once base_path().'/vendor/fpdm/fpdm.php';
//use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;
use Response;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['company'] = DB::table('company')->get();
        return view('invoice.index',$data);
    }

    public function invoices(Request $request,$company_id){
        if(!empty($company_id)){
            $data['company_id'] = $company_id;
            $data['invoices'] = DB::table('invoices')->where('company_id',$company_id)->get();
            $data['html'] = view('invoice.invoices')->with('data', $data)->render();
            return Response::json($data);
        }
    }

    public function new_invoice(Request $request,$company_id){
        if(!empty($company_id)){
            // dd(base_path().'/vendor/fpdm/fpdm.php');
            $pdf = new FPDM('template.pdf');
            
            $pdf->useCheckboxParser = true; // Checkbox parsing is ignored (default FPDM behaviour) unless enabled with this setting
            $pdf->Load($fields, true);
            $pdf->Merge();
            $pdf->Output();
            //save file
           // Storage::put($pdf->Output('S'));

            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
