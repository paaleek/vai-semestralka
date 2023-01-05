<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarouselRequest;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminCarouselController extends Controller
{

    public function index()
    {
        $carousels = Carousel::orderBy('updated_at', 'desc')->get();
        return view('admin.carousel.index')->with(compact('carousels'));
    }


    public function create()
    {
        $carousel = new Carousel();
        return view('admin.carousel.create')->with(compact('carousel'));
    }


    public function store(CarouselRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('img_name')) {
            $file = $request->file('img_name');
            $filename = date('Y-m-d-H_i_s').'_'.$request->img_name->getClientOriginalName();

            $file->move(public_path('img/carousel/'), $filename);
            $validatedData['img_name'] = $filename;
        }

        Carousel::create($validatedData);
        return redirect()->route('admin.carousel.index')->with('message', 'Carousel created successfully');
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


    public function edit($id)
    {
        $carousel = Carousel::findorFail($id);
        return view('admin.carousel.edit')->with(compact('carousel'));
    }


    public function update(CarouselRequest $request, $id)
    {
        $carousel= Carousel::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('img_name')) {
            $file = $request->file('img_name');
            $filename = date('Y-m-d-H_i_s').'_'.$request->img_name->getClientOriginalName();

            $file->move(public_path('img/carousel/'), $filename);
            $data['img_name'] = $filename;
        }

        $carousel->update($data);
        return redirect()->route('admin.carousel.index')->with('message', 'Carousel updated successfully');

    }


    public function destroy($id)
    {
        $carousel = Carousel::findOrFail($id);
        $carousel->delete();

        if (File::exists(public_path('img/carousel/').$carousel->img_name)) {
            File::delete(public_path('img/carousel/').$carousel->img_name);
        }

        return redirect()->route('admin.carousel.index')->with('message', 'Carousel deleted successfully');
    }
}
