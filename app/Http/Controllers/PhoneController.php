<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Color;
use App\Memory;
use App\Phone;
use App\Type;
use App\Xinghao;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $phones = Phone::orderBy('id','desc')
            ->where('pname','like', '%'.request()->keywords.'%')
            ->paginate(10);
        //解析模板显示用户数据
        return view('admin.phone.index', ['phones'=>$phones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        $xinghao = Xinghao::all();
        $type = Type::all();
        $color = Color::all();
        $memory = Memory::all();

        return view('admin.phone.create', compact('brand','xinghao','type','color','memory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phones = new Phone;

        $phones -> pname = $request -> pname;
        $phones -> brand_id = $request -> brand_id;
        $phones -> xinghao_id = $request -> xinghao_id;
        $phones -> color_id = $request -> color_id;
        $phones -> memory_id = $request -> memory_id;
        $phones -> type_id = $request -> type_id;
        $phones -> money = $request -> money;
        $phones -> content = $request -> content;

        if ($request->hasFile('pic')) {
            $phones->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }

        if($phones->save()){
            return redirect('/phone')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败!');
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
        return view('home.shop.xiangqi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phones = Phone::findOrFail($id);

        $brand = Brand::all();
        $xinghao = Xinghao::all();
        $type = Type::all();
        $color = Color::all();
        $memory = Memory::all();

        return view('admin.phone.edit', compact('phones','brand','xinghao','type','color','memory'));

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
        $phones = Phone::findOrFail($id);

        $phones -> pname = $request -> pname;
        $phones -> brand_id = $request -> brand_id;
        $phones -> xinghao_id = $request -> xinghao_id;
        $phones -> color_id = $request -> color_id;
        $phones -> memory_id = $request -> memory_id;
        $phones -> type_id = $request -> type_id;
        $phones -> money = $request -> money;
        $phones -> content = $request -> content;

        if ($request->hasFile('pic')) {
            $phones->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }

        if($phones->save()){
            return redirect('/phone')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败!');
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
        $phones = Phone::findOrFail($id);

        if($phones->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }
}
