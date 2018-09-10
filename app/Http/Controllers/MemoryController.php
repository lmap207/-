<?php

namespace App\Http\Controllers;

use App\Memory;
use Illuminate\Http\Request;

class MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $memorys = Memory::orderBy('id','desc')
            ->where('mname','like', '%'.request()->keywords.'%')
            ->get();
        //解析模板显示用户数据
        return view('admin.memory.index', ['memorys'=>$memorys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.memory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $memory = new Memory;

        $memory -> mname = $request->mname;

        if($memory -> save()){
            return redirect('/memory')->with('success', '添加成功');
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
        $memorys = Memory::findOrFail($id);

        return view('admin.memory.edit', ['memorys'=>$memorys]);
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
        $memorys = Memory::findOrFail($id);
        
        $memorys -> mname = $request -> mname;

        if($memorys -> save()){
            return redirect('/memory')->with('success', '更新成功');
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
        $memorys = Memory::findOrFail($id);

        if($memorys -> delete()){
            return redirect('/memory')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }
}
