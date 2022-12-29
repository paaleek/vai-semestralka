<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminReviewsController extends Controller
{

    public function index()
    {
        $reviews = Reviews::orderBy('updated_at', 'desc')->get();
        return view('admin.reviews.index')->with(compact('reviews'));
    }


    public function create()
    {
        $review = new Reviews();
        return view('admin.reviews.create')->with(compact('review'));
    }

    public function new() {
        $eke = "dfsasdf";
        dd($eke);
        $review = new Reviews();
        return view('admin.reviews.create')->with(compact('review'));
    }

    public function store(ReviewRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('small_img')) {
            $file = $request->file('small_img');
            $filename = date('Y-m-d-H_i_s').'_'.$request->small_img->getClientOriginalName();

            $file->move(public_path('img/reviews/'), $filename);
            $validatedData['small_img'] = $filename;
        }

        if ($request->hasFile('big_img')) {
            $file = $request->file('big_img');
            $filename = date('Y-m-d-H_i_s').'_'.$request->big_img->getClientOriginalName();

            $file->move(public_path('img/reviews/'), $filename);
            $validatedData['big_img'] = $filename;
        }

        Reviews::create($validatedData);
        return redirect()->route('admin.reviews.index')->with('message', 'Review created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }


    public function edit($id)
    {
        $review = Reviews::findorFail($id);
        return view('admin.reviews.edit')->with(compact('review'));
    }


    public function update(ReviewRequest $request, $id)
    {
        $review = Reviews::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('small_img')) {
            $file = $request->file('small_img');
            $filename = $request->small_img->getClientOriginalName();

            $file->move(public_path('img/reviews/'), $filename);
            $data['small_img'] = $filename;
        }

        if ($request->hasFile('big_img')) {
            $file = $request->file('big_img');
            $filename = $request->big_img->getClientOriginalName();

            $file->move(public_path('img/reviews/'), $filename);
            $data['big_img'] = $filename;
        }


        $review->update($data);
        return redirect()->route('admin.reviews.index')->with('message', 'Review updated successfully');
    }


    public function destroy($id)
    {
        $review = Reviews::findOrFail($id);
        $review->delete();

        if (File::exists(public_path('img/reviews/').$review->small_img)) {
            File::delete(public_path('img/reviews/').$review->small_img);
        }
        if (File::exists(public_path('img/reviews/').$review->big_img)) {
            File::delete(public_path('img/reviews/').$review->big_img);
        }

        return redirect()->route('admin.reviews.index')->with('message', 'Review deleted successfully');
    }
}
