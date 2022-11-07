<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class AdminReviewsController extends Controller
{

    public function index()
    {
        $reviews = Reviews::all();
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

    public function store(Request $request)
    {
        $data = $request->validate([
            'header' => 'required|string',
            'main_content' => 'required|string',
            'score' => 'required|numeric',
            'shop' => 'nullable|url',
            'trailer' => 'nullable|url',
            'small_img' => 'nullable|mimes:jpeg,bmp,png',
            'big_img' => 'nullable|mimes:jpeg,bmp,png',
        ]);

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

        Reviews::create($data);
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


    public function update(Request $request, $id)
    {
        $review = Reviews::findOrFail($id);
        $data = $request->validate([
            'header' => 'required|string',
            'main_content' => 'required|string',
            'score' => 'required|numeric',
            'shop' => 'nullable',
            'trailer' => 'nullable',
            'small_img' => 'nullable|mimes:jpeg,bmp,png',
            'big_img' => 'nullable|mimes:jpeg,bmp,png',
        ]);

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

        return redirect()->route('admin.reviews.index')->with('message', 'Review deleted successfully');
    }
}
