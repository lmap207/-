<!DOCTYPE html>
<!-- saved from url=(0040)http://store.meizu.com/item/meilan2.html -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>魅蓝2-魅族商城</title>
    <meta name="description" content="魅蓝2，2GB大运存 双卡双待双4G，正品行货，另有魅蓝2详细介绍、图片、价格、参数、售前咨询等，购买魅蓝2上魅族商城，全场包邮，7天无理由退货，15天换货保障。">
    <meta name="keywords" content="魅蓝2，魅族，魅族商城">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="icon" type="image/x-icon">
    <!-- common css -->
    <link rel="stylesheet" href="/qiantai/css/site-base.css">
    <!--[if lt IE 9]>
    <script>
        var c = ["log","debug","info","warn","exception","assert","dir","dirxml","trace","group","groupCollapsed","groupEnd","profile","profileEnd","count","clear","time","timeEnd","timeStamp","table","error"];
        window.console = {};
        for(var i = 0; i < c.length; i++){
            window.console[c[i]] = function(){

            }
        }
    </script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://store.res.meizu.com/resources/php/store/static/common/lib/html5shiv/dist/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/qiantai/css/main.css">
    <style type="text/css">
    .site-gotop {
        position: fixed;
        width: 44px;
        bottom: 50px;
        left: 50%;
        margin-left: 640px;
        display: none
    }

    .gotop-suggest,
    .gotop-arrow {
        display: inline-block;
        width: 44px;
        height: 44px;
        background: #b4b4b4 no-repeat 50%50%;
        cursor: pointer
    }

    .gotop-suggest {
        background-image: url(http://store.res.meizu.com/resources/php/store/static/detail/assets/img/suggest.png)
    }

    .gotop-arrow {
        background-image: url(http://store.res.meizu.com/resources/php/store/static/detail/assets/img/gotop-arrow.png);
        margin-top: 5px
    }
    </style>
</head>

<body>
    <!-- common header -->
    <!-- 引入头部 -->
    @include('layouts.home._top')
    <!-- 导航标记 开始 -->
    @section('daohang') @show
    <!-- 导航标记 结束 -->
    <!--下面是模板标签，不可删除-->
    <!-- 内容标记 开始 -->
    @section('content') @show
    <!-- 内容标记 结束 -->
    <input type="hidden" name="curr_microtime" id="curr_microtime" value="1459049673948">
    <script charset="utf-8" src="/qiantai/img/v.js"></script>
    <script src="/qiantai/img/hm.js"></script>
    <script type="text/javascript" src="/qiantai/img/flow.js"></script>
    <script src="/qiantai/img/analytics-min.js"></script>
    <script id="J_packageTmpl" type="text/x-tmpl">
        <ul class="clearfix">
            <% for(var i = 0, length = items.length; i < length; i++) { %>
                <li>
                    <p class="vm-pic">
                        <img src="<%= items[i].cells[items[i].recommend].images + '@80x80.jpg' %>" width="80" height="80" alt="<%= items[i].cells[items[i].recommend].names %>">
                    </p>
                    <p class="vm-tit">
                        <%= items[i].name %>
                    </p>
                    <div class="vm-prop">
                        <% if (items[i].saleAttrs ) { %>
                            <% for (var p in items[i].saleAttrs) { %>
                                <p>
                                    <% for (var j = 0, length2 = items[i].saleAttrs[p].length; j < length2; j++) { %>
                                        <% if (!items[i].saleAttrs[p][j].imageColor || length2 === 1) { %>
                                            <a class="vm-prop-text <% if (items[i].recommend === p + ':' + items[i].saleAttrs[p][j].id) { %>selected<% } %>" href="javascript:;" data-sku="<%= items[i].cells[p + ':' + items[i].saleAttrs[p][j].id].skuId %>" data-sid="<%= items[i].id %>" data-key="<%= p + ':' + items[i].saleAttrs[p][j].id %>" title="<%= items[i].saleAttrs[p][j].name %>">
                                            <span><%= items[i].saleAttrs[p][j].name %></span>
                                        </a>
                                            <% } else { %>
                                                <a class="vm-prop-img <% if (items[i].recommend === p + ':' + items[i].saleAttrs[p][j].id) { %>selected<% } %>" href="javascript:;" data-sku="<%= items[i].cells[p + ':' + items[i].saleAttrs[p][j].id].skuId %>" data-sid="<%= items[i].id %>" data-key="<%= p + ':' + items[i].saleAttrs[p][j].id %>" title="<%= items[i].saleAttrs[p][j].name %>">
                                            <img class="vm-prop-sale" src="<%= items[i].saleAttrs[p][j].imageColor %>" width="16" height="16" >
                                       </a>
                                                <% } %>
                                                    <% } %>
                                </p>
                                <% } %>
                                    <% } %>
                    </div>
                </li>
                <% } %>
        </ul>
    </script>
    <script type="text/javascript">
    //商品源数据
    var MZ = {};
    MZ.modelData = { "recommend": "14:43;3:11;13:36", "shelveMethod": 1, "shelveTime": null, "cspuMap": { "14:43;3:11;13:36": { "cspuId": 73, "skuId": 329, "price": 599.00, "names": "魅蓝2 公开版 白色 16GB", "images": ["./img/1453884271-20264.png", "./img/1450332831-67349.png", "./img/1450332904-16654.png", "./img/1450332877-94122.png"], "stock": 0, "packageIds": [], "buyButton": "售罄", "priceCent": 59900 } }, "packageMap": {}, "packageStockMap": { "14:43;3:11;13:36+0": { "skuId": 329, "stock": 0, "buyButton": "售罄" } }, "packageItems": {}, "skuMap": { "329": "14:43;3:11;13:36+0" } }
    </script>
    <!-- common footer -->
    @include('layouts.home._xia')
    <script charset="utf-8" src="/qiantai/js/site-lib.js"></script>
    <script type="text/javascript" src="/qiantai/js/site-base.js"></script>
    <script>
    var $ = require("common:lib/jquery/jquery-1.11.3");
    require("common:lib/jquery/jquery-migrate-1.2.1"), window.$ = $, window.jQuery = $, window.jquery = $, $(function() { require("common:widgets/site-topbar/topbar"), require("common:widgets/site-header/header") });
    </script>
    <script src="/qiantai/js/pkg-detail.js"></script>
    <script>
    var __mzt = __mzt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "http://sccom.res.meizu.com/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <script type="text/javascript">
    (function() {
        var ga = document.createElement('script'),
            s;
        ga.type = 'text/javascript';
        ga.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
        s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
    </script>
    <script type="text/javascript">
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?2a0c04774115b182994cfcacf4c122e9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <div class="site-gotop" id="siteGotop" style="opacity: 0; display: block;">
        <a class="gotop-suggest" title="建议反馈" href="http://store.meizu.com/member/suggest/index" target="_blank"></a>
        <div class="gotop-arrow" title="回到顶部">
        </div>
    </div>
</body>

</html>