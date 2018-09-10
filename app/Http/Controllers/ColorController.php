<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $colors = Color::orderBy('id','desc')
            ->where('cname','like', '%'.request()->keywords.'%')
            ->get();
        //解析模板显示用户数据
        return view('admin.color.index', ['colors'=>$colors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.color.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $colors = new Color;

        $colors -> cname = $request->cname;

        if($colors -> save()){
            return redirect('/color')->with('success', '添加成功');
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
        $colors = Color::findOrFail($id);

        return view('admin.color.edit', ['colors'=>$colors]);
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
        $colors = Color::findOrFail($id);
        
        $colors -> cname = $request ->cname;

        if($colors -> save()){
            return redirect('/color')->with('success', '更新成功');
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
        $colors = Color::findOrFail($id);

        if($colors -> delete()){
            return redirect('/color')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }
}
