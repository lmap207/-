@extends('layouts.admin') 
@section('title') 型号修改 @endsection 
@section('title','型号修改') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 型号修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/xinghao/{{$xinghaos['id']}}">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">型号名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$xinghaos['xname']}}" name="xname" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    {{csrf_field()}}
					{{method_field('PUT')}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection