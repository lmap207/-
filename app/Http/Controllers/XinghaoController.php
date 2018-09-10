<?php

namespace App\Http\Controllers;

use App\Xinghao;
use Illuminate\Http\Request;

class XinghaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $xinghaos = Xinghao::orderBy('id','desc')
            ->where('xname','like', '%'.request()->keywords.'%')
            ->get();
        //解析模板显示用户数据
        return view('admin.xinghao.index', ['xinghaos'=>$xinghaos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.xinghao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $xinghaos = new Xinghao;

        $xinghaos -> xname = $request->xname;

        if($xinghaos -> save()){
            return redirect('/xinghao')->with('success', '添加成功');
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
        $xinghaos = Xinghao::findOrFail($id);

        return view('admin.xinghao.edit', ['xinghaos'=>$xinghaos]);
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
        $xinghaos = Xinghao::findOrFail($id);
        
        $xinghaos -> xname = $request ->xname;

        if($xinghaos -> save()){
            return redirect('/xinghao')->with('success', '更新成功');
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
        $xinghaos = Xinghao::findOrFail($id);

        if($xinghaos -> delete()){
            return back()->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        }   
    }
}
