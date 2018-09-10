@extends('layouts.admin') @section('title') 文章修改 @endsection @section('title','文章修改') @section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 文章修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/parameter/{{$parameters['id']}}" enctype="multipart/form-data">
                   
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">手机名称</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="phone_id" style="display: none;">
                                @foreach($phones as $v)
                                <option value="{{$v['id']}}"
                                @if($v['id'] == $parameters['phone_id']) 
                                    selected 
                                @endif
                                >{{$v['pname']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">电池容量 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$parameters['capacity']}}" name="capacity" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">屏幕尺寸 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$parameters['size']}}" name="size" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">运行内存 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$parameters['memory']}}" name="memory" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">像素 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$parameters['pixel']}}" name="pixel" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">系统版本 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$parameters['edition']}}" name="edition" class="tpl-form-input" id="user-name" placeholder="">
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

                <script>
                    var ue = UE.getEditor('editor');
                </script>
            </div>
        </div>
    </div>
</div>
@endsection