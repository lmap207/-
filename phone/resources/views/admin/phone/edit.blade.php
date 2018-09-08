@extends('layouts.admin') @section('title') 手机修改 @endsection @section('title','手机修改') @section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 手机修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/phone/{{$phones['id']}}" enctype="multipart/form-data">
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手机名称 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="pname" class="tpl-form-input" id="user-name" placeholder="" value="{{$phones['pname']}}">
                        </div>
                    </div>
                    
                                        
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">品牌</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="brand_id" style="display: none;">
                                @foreach ($brand as $v)
                                <option value="{{$v['id']}}"
                                @if($v['id'] == $phones['brand_id']) 
                                    selected 
                                @endif
                                >{{$v['bname']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">型号</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="xinghao_id" style="display: none;">
                                @foreach ($xinghao as $v)
                                <option value="{{$v['id']}}"
                                @if($v['id'] == $phones['xinghao_id']) 
                                    selected 
                                @endif
                                >{{$v['xname']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">颜色</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="color_id" style="display: none;">
                                @foreach ($color as $v)
                                <option value="{{$v['id']}}"
                                @if($v['id'] == $phones['color_id']) 
                                    selected 
                                @endif
                                >{{$v['cname']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                   
                   <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">内存</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="memory_id" style="display: none;">
                                @foreach ($memory as $v)
                                <option value="{{$v['id']}}"
                                @if($v['id'] == $phones['memory_id']) 
                                    selected 
                                @endif
                                >{{$v['mname']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">网络类型</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="type_id" style="display: none;">
                                @foreach ($type as $v)
                                <option value="{{$v['id']}}"
                                @if($v['id'] == $phones['type_id']) 
                                    selected 
                                @endif
                                >{{$v['tname']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手机价格 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$phones['money']}}" name="money" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">手机图片 </label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                    <img src="{{$phones['pic']}}" alt="">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加图片</button>
                                <input id="doc-form-file" type="file" name="pic">
                            </div>
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">商品详情</label>
                        <div class="am-u-sm-9">
                            <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;">{!!$phones['content']!!}</script>
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