<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminNewsController extends Controller
{

    public function index()
    {
        $news = News::orderBy('updated_at', 'desc')->get();
        return view('admin.news.index')->with(compact('news'));
    }


    public function create()
    {
        $new = new News();
        return view('admin.news.create')->with(compact('new'));
    }


    public function store(NewsRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = date('Y-m-d-H_i_s').'_'.$request->img->getClientOriginalName();

            $file->move(public_path('img/news/'), $filename);
            $validatedData['img'] = $filename;
        }

        if ($request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = date('Y-m-d-H_i_s').'_'.$request->main_img->getClientOriginalName();

            $file->move(public_path('img/news/'), $filename);
            $validatedData['main_img'] = $filename;
        }

        News::create($validatedData);
        return redirect()->route('admin.news.index')->with('message', 'New created successfully');
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
        $new = News::findorFail($id);
        return view('admin.news.edit')->with(compact('new'));
    }

    public function update(NewsRequest $request, $id)
    {
        $new = News::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $request->img->getClientOriginalName();

            $file->move(public_path('img/news/'), $filename);
            $data['img'] = $filename;
        }

        if ($request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = $request->main_img->getClientOriginalName();

            $file->move(public_path('img/news/'), $filename);
            $data['main_img'] = $filename;
        }


        $new->update($data);
        return redirect()->route('admin.news.index')->with('message', 'New updated successfully');
    }


    public function destroy($id)
    {
        $new = News::findOrFail($id);
        $new->delete();
        if (File::exists(public_path('img/news/').$new->img)) {
            File::delete(public_path('img/news/').$new->img);
        }
        if (File::exists(public_path('img/news/').$new->main_img)) {
            File::delete(public_path('img/news/').$new->main_img);
        }

        return redirect()->route('admin.news.index')->with('message', 'New deleted successfully');
    }
}
