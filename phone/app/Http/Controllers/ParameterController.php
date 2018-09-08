<?php

namespace App\Http\Controllers;

use App\Parameter;
use App\Phone;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        
        $parameters = Parameter::orderBy('id','desc')
            ->where('size','like', '%'.request()->keywords.'%')
            ->paginate(10);
        
        // $phones = Phone::all();
        //$data = phone::first()->all();
        //dd($data);
        //解析模板显示用户数据
        return view('admin.parameter.index', ['parameters'=>$parameters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phone = Phone::all();

        return view('admin.parameter.create', ['phone' => $phone]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parameter = new Parameter;

        $parameter -> phone_id = $request ->phone_id;
        $parameter -> capacity = $request ->capacity;
        $parameter -> size = $request ->size;
        $parameter -> memory = $request ->memory;
        $parameter -> pixel = $request ->pixel;
        $parameter -> edition = $request ->edition;
        
        if($parameter->save()){
            return redirect('parameter')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
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
        $parameters = Parameter::findOrFail($id);

        $phones = Phone::all();
        //dd($phone);
        return view('admin.parameter.edit', compact('parameters','phones'));
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
        $parameters = Parameter::findOrFail($id);

        $parameters -> phone_id = $request ->phone_id;
        $parameters -> capacity = $request ->capacity;
        $parameters -> size = $request ->size;
        $parameters -> memory = $request ->memory;
        $parameters -> pixel = $request ->pixel;
        $parameters -> edition = $request ->edition;

        if($parameters->save()){
            return redirect('parameter')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
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
        $parameters = Parameter::findOrFail($id);

        if($parameters->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }
}
