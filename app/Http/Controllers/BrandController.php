<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id','asc')
            ->where('bname','like', '%'.request()->keywords.'%')
            ->get();
        //解析模板显示用户数据
        return view('admin.brand.index', ['brands'=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brands = new Brand;

        $brands -> bname = $request->bname;

        if($brands -> save()){
            return redirect('/brand')->with('success', '添加成功');
        }else{
            return back()->with('error','添加失败');
        }
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
        $brands = Brand::findOrFail($id);

        return view('admin.brand.edit', ['brands'=>$brands]);
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
        $brands = Brand::findOrFail($id);
        
        $brands -> bname = $request ->bname;

        if($brands -> save()){
            return redirect('/brand')->with('success', '更新成功');
        }else{
            return back()->with('error','更新失败');
        }    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brand::findOrFail($id);

        if($brands -> delete()){
            return redirect('/brand')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }
}
