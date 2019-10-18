<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PurchaseRequest;

//use App\Session;

class PurchaseRequestResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
       
        // if ($prs = PurchaseRequest::with('term')->findOrFail(request()->user()->id)) {
       
        // return view('user_web.search_pr_result', compact('prs'));
        // }

        // return view('No records found!','404');
        
        
        $prs = PurchaseRequest::where(function($query) use ($request) {
            
                 
            if ($term = $request->get('term')) {

              
            $query->orWhere('dep_id','like','%' . $term . '%');
            $query->orWhere('bacprno','like','%' . $term . '%');
            $query->orWhere('pboobrno','like','%' . $term . '%');
            $query->orWhere('pboacctcode','like','%' . $term . '%');
        
        }


        })
      
        ->orderBy('id', 'desc')
        ->paginate(5);   

        return view('user_web.search_pr_result', compact('prs'));
        
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
