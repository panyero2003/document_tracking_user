<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\PurchaseRequest;

use App\Department;

use App\Source;

use App\Status;

class PRsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user_web.search_pr_input');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Search(Request $request)
    {

        $departments = Department::pluck('depname','id')->all();

        $sources = Source::pluck('name','id')->all();

        $status = Status::pluck('name','id')->all();

        // $requests = PurchaseRequest::all();
        
        $prs = $request->get('search');
        
           if (count($prs) > 0) {

            $prs = DB::table('purchase_requests')->where('bacprno', 'LIKE', '%' .$prs. '%')->paginate(5);
            return view('user_web.search_result',compact('prs','departments','sources','status','requests'));
        }

        else
        {
            return view('message');
        }
       
    }

    

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
