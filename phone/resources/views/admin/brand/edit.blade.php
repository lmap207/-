@extends('layouts.admin')
@section('title')
	品牌修改 
@endsection
@section('title', '品牌修改')

@section('content')
<div class="tpl-portlet-components">
<div class="portlet-title">
    <div class="caption font-green bold">
        <span class="am-icon-code"></span> 品牌
    </div>
</div>

<div class="tpl-block">
    
    <div class="am-g">
        <div class="tpl-form-body tpl-form-line">
            <form class="am-form tpl-form-line-form" method="post" action="/brand/{{$brands['id']}}">
                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">品牌名 <span class="tpl-form-line-small-title"></span></label>
                    <div class="am-u-sm-9">
                        <input type="text" name="bname" class="tpl-form-input" id="user-name" value="{{$brands['bname']}}">
                    </div>
                </div>
				{{csrf_field()}}
                {{method_field('PUT')}}
              	           
                <div class="am-form-group">
                    <div class="am-u-sm-9 am-u-sm-push-3">
                        <button class="am-btn am-btn-primartpl-btn-bg-color-success ">修改</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection