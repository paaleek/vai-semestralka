<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{

    public function index(Request $request)
    {
        $reviews = Reviews::orderBy('created_at', 'DESC')->paginate(5);
        //$reviews = DB::table('reviews')->get();

        return view('reviews')->with(compact('reviews'));

//        $reviews = Reviews::when($request->has('header'), function ($q)use($request){
//            return $q->where('header', 'like', '%'.$request->get('header').'%');
//        })->paginate(5);
//        if($request->ajax()) {
//            return view('reviews-pagination')->with(compact('reviews'));
//        }
//        return view('reviews')->with(compact('reviews'));
    }

    public function search(Request $request) {
        //->orWhere('main_content', 'Like', '%'.$request->get('search').'%')

        $reviews = Reviews::where('header', 'Like', '%'.$request->get('search').'%')
        ->orderBy('created_at', 'DESC')->get();

        $html = view('reviews-pagination', compact('reviews'))->render();

        return response($html);
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


    public function show($id)
    {
        $review = Reviews::findOrFail($id);

        return view('review')->with(compact('review'));
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
