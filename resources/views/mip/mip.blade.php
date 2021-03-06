<!DOCTYPE html>
<html mip>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://c.mipcdn.com/static/v1/mip.css">
    <link rel="canonical" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}">
    <meta name="wap-font-scale" content="no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    @if(Request::getrequesturi()=='/')
        <title>@yield('title')</title>
    @else
        <title>@yield('title')-世纪饮品网</title>
    @endif
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <style mip-custom>
        /*全局定义*/
        body, dl, dd, ul, ol, h1, h2, h3, h4, h5, h6, pre, form, input, textarea, p, hr, thead, tbody, tfoot, th, td { margin: 0; padding: 0 }
        ul, ol{list-style: none }
        a {text-decoration: none; color: #333 }
        a:hover{color:#E73727}
        html{-ms-text-size-adjust: none; -webkit-text-size-adjust: none; text-size-adjust: none; font-size: 62.5% }
        body{font-size:12px; line-height:1.5em; color:#333; background:#C8C8C8;}
        body, button, input, select, textarea { font-family: 'helvetica neue', tahoma, 'hiragino sans gb', stheiti, 'wenquanyi micro hei', \5FAE\8F6F\96C5\9ED1, \5B8B\4F53, sans-serif }
        b, strong {font-weight: bold }
        i, em {font-style: normal }
        img {border:0 none; /*width: auto\9; max-width: 100%; vertical-align: top */}
        button, input, select, textarea { font-family: inherit; font-size: 100%; margin: 0; vertical-align: baseline }
        button, html input[type="button"], input[type="reset"], input[type="submit"] { -webkit-appearance: button; cursor: pointer }
        button[disabled], input[disabled] { cursor: default }
        input[type="checkbox"], input[type="radio"] { box-sizing: border-box; padding: 0 }
        input[type="search"] { -webkit-appearance: textfield; -moz-box-sizing: content-box; -webkit-box-sizing: content-box; box-sizing: content-box }
        input[type="search"]::-webkit-search-decoration {-webkit-appearance:none}
        .clearfix:after { display: block; font-size: 0; content: "."; clear: both; height: 0; visibility: hidden;}
        .path{font-size: 12pt; font-weight: normal;}
        .common_tit{ height:36px; line-height:36px; overflow:hidden; zoom:1; border-bottom:2px solid #F2F2F2; background: #fff; }
        .common_tit a.tit{ float:left; background:url(/mobiles/images/dot1.gif) no-repeat 10px 11px; font-size:16px; font-weight:bold;  color:#333; padding-left:20px;}
        .common_tit nav.tit{ float:left; background:url(/mobiles/images/dot1.gif) no-repeat 10px 11px; font-size:16px; font-weight:bold;  color:#333; padding-left:20px;}
        .common_tit span.tit{ float:left; background:url(/mobiles/images/dot1.gif) no-repeat 10px 11px; font-size:16px; font-weight:bold;  color:#333; padding-left:20px;}
        .common_tit  a.more{float:right; font-size:12px; padding-right:10px; color:#666;}
        .common_tit  a.more:hover{color:#E73727;}
        .viewport{width:100%; max-width:640px; margin:0 auto; background:#eee;}

        /*头部*/
        .header{ height:48px; background:#E73727; position:relative;}
        .header .logo{ width:126px; height:32px; background:url(/mobiles/images/logo.png) no-repeat; background-size:contain; overflow:hidden; text-indent:-9999px; margin:10px 0 0 12px;}
        .header{position:relative;height:44px;padding:0 55px 0 55px;z-index:20;background:#D71318;}
        .header .back{ margin-left:10px; background:url(/mobiles/images/back.png) 2px 5px no-repeat; text-indent:-9999px; background-size:14px auto;position:absolute;top:5px;left:0;width:94px;height:35px;line-height:35px;color:#fff;font-size:16px; text-align:center; white-space:nowrap}
        .mcate{position:absolute;top:4px;right:5px;width:40px;height:40px;z-index:1;}
        .mcate b{display:block;text-indent:-9999px;width:36px;height:36px;background:url(/mobiles/images/down_icon.png) 3px -50px no-repeat; background-size:32px auto}
        .header .title{  width:100%; height:44px; line-height:44px; color:#fff; text-align:center; font-size:18px;}
        .header .title a{ color:#fff;}
        .header .title img{ height:26px;}
        .header .title .img{ height:26px;}
        .tel{ text-align:center; height:30px; line-height:28px; background:#FFA800; color:#fff; font-size:14px;}
        .d_nav{display:none; width:100%; box-sizing: border-box; overflow:hidden; background:#fff; position:absolute; right:0; top:44px;box-shadow:0px 2px 2px rgba(0,0,0,0.22); z-index:1000;}
        .d_nav li{ width:33.33%; padding:3% 0; float:left;border-right:1px solid #eee; border-bottom:1px solid #eee; box-sizing:border-box;}
        .d_nav li:hover,.d_nav li:active{ background:#F6F6F6;}
        .d_nav a{display:block;text-align:center; color:#666;}

        /*搜索*/
        .search{margin:10px; height:36px; position:relative;}
        .search .search_txt{float:left; border:1px solid #D5D5D5; width:96%; padding-left:4%; height:34px; border-radius:8px ; }
        .search .search_btn{ width:40px; height:34px; cursor:pointer; display:inline-block; border-radius:0 8px 8px 0; border:1px solid #D5D5D5; border-left:none; background:url(/mobiles/images/search_btn.png) no-repeat center center #fff; background-size:25px; text-indent:-9999px; position:absolute; right:-2px; top:0px;}

        /*幻灯片*/
        .focus{ width:100%; height:150px;/*适配*/ margin:0 auto; position:relative; overflow:hidden;}
        .focus .hd{ width:100%; height:11px;  position:absolute; z-index:1; bottom:10px; text-align:center;  }
        .focus .hd ul{ display:inline-block; height:5px; padding:3px 5px; /*background-color:rgba(255,255,255,0.7);
	-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; font-size:0; */vertical-align:top;
        }
        .focus .hd ul li{ display:inline-block; width:8px; height:8px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; background:#252726; opacity:0.7; margin:0 5px;  vertical-align:top; overflow:hidden; text-indent:-9999px;}
        .focus .hd ul .on{ background:#fff;opacity:1;}
        .focus .bd{ position:relative; z-index:0;}
        .focus .bd li img{ width:100%;  /*height:288px;*/ background:url(/mobiles/images/loading.gif) center center no-repeat;  }
        .focus .bd li a{ -webkit-tap-highlight-color:rgba(0, 0, 0, 0); /* 取消链接高亮 */  }

        /*首页导航*/
        .index_nav{padding:15px 10px; overflow:hidden;}
        .index_nav li{ width:25%; padding:2% 0; float:left;}
        .index_nav a{font-size:1.1em;display:block;text-align:center; color:#666}
        .index_nav a em{display:block;width:50px;height:50px; background:url(/mobiles/images/nav_icon.png) no-repeat;margin:0 auto; margin-bottom:5px; background-size:50px auto;  border-radius:10%;}
        .index_nav a:active,.index_nav a:hover{ color:#D71318;}
        .index_nav .icon0 em{background:url(/mobiles/images/nav_icon.png) 0 0 no-repeat; background-size:50px auto;}
        .index_nav .icon1 em{background:url(/mobiles/images/nav_icon.png) 0 -50px no-repeat; background-size:50px auto;}
        .index_nav .icon2 em{background:url(/mobiles/images/nav_icon.png) 0 -100px no-repeat; background-size:50px auto;}
        .index_nav .icon3 em{background:url(/mobiles/images/nav_icon.png) 0 -150px no-repeat; background-size:50px auto;}
        .index_nav .icon4 em{background:url(/mobiles/images/nav_icon.png) 0 -200px no-repeat; background-size:50px auto;}
        .index_nav .icon5 em{background:url(/mobiles/images/nav_icon.png) 0 -250px no-repeat; background-size:50px auto;}
        .index_nav .icon6 em{background:url(/mobiles/images/nav_icon.png) 0 -300px no-repeat; background-size:50px auto;}
        .index_nav .icon7 em{background:url(/mobiles/images/nav_icon.png) 0 -350px no-repeat; background-size:50px auto;}

        /*最新品牌*/
        .index_item{background:#fff; margin:0 10px 15px 10px;}
        .index_item .bd{overflow:hidden; zoom:1; padding:10px 10px 0 10px;}
        .index_item .bd li{ border-bottom:1px solid #EEE; padding:10px 0; overflow:hidden; zoom:1;}
        .index_item .bd li:hover,.index_item .bd li:active{ background:#F6F6F6;}
        .index_item .bd li a{display:block; overflow:hidden; zoom:1;}
        .index_item .bd .img_show{float:left; margin-right:10px;}
        .index_item .bd .img_show img{ width:100px; height:70px;}
        .index_item .bd .tit{font-size:14px; font-weight:bold; padding-bottom:3px;}
        .index_item .bd .desc{color:#999;padding-bottom:3px;}
        .index_item .bd .price{color:#999;}
        .index_item .bd .price em{ color:#D71318; font-size:14px; font-weight:bold; }
        .index_item .list{ padding-bottom:5px;}
        .index_item .list li{ border-bottom:1px dotted #D5D5D5; height:36px; line-height:36px; padding:0 10px;}
        .index_item .list li:last-child{ border-bottom:none;}
        .index_item .list li:hover,.index_item .list li:active{background-color:#F6F6F6;}
        .index_item .list li a{ display:block; overflow:hidden; zoom:1;}
        .index_item .list i{ display:inline-block; width:16px; height:16px; line-height:16px; text-align:center; background:#CBCECD; color:#fff; border-radius:2px; margin-right:5px;}
        .index_item .list li:nth-child(1) i,.index_item .list li:nth-child(2) i ,.index_item .list li:nth-child(3) i{ background:#D71318;}
        .index_item .list span{ padding-right:10px;}
        .index_item .list em{ color:#999;}

        /*最新资讯*/
        .index_news{background:#fff; margin:0 10px 15px 10px;}
        .index_news .bd{overflow:hidden; zoom:1; padding:5px 10px;}
        .index_news .bd li{ height:36px; line-height:36px; background:url(/mobiles/images/dot.jpg) no-repeat 0 16px; padding-left:8px; border-bottom:1px solid #EEE;}
        .index_news .bd li:hover,.index_news .bd li:active{background-color:#F6F6F6;}
        .index_news .bd li:last-child{ border-bottom:none;}
        .index_news .bd  a{ display:block;}
        .index_news .bd .date{ float:right; width:65px; height:36px; overflow:hidden; color:#999;}


        /*分页*/
        .page{padding:10px 0 30px 0;color:#666666;text-align:center;*zoom:1; background:#fff;}
        .page:after{content:".";display:block;height:0;clear:both;visibility:hidden;line-height:0;font-size:0;}
        .page .pagination{ display:inline-block; *display:inline; *zoom:1;}
        .page li{display:inline-block;*display:inline; *zoom:1;}
        .page li a,.page li span{display:inline-block; vertical-align:middle; margin:0 2px; padding:0 12px; height:30px; font:normal 14px/30px "\5B8B\4F53"; border:1px solid #ddd;background-color:#f5f5f5; *display:inline; *zoom:1;}
        .page li a{ background:#fff;}
        .page li a:hover{text-decoration:none; background-color:#D71318; border-color:#D71318; color:#fff;}
        .page .active span{background-color:#D71318; border-color:#D71318; color:#fff;}
        .page .disabled span{ border:none; background:#fff; padding:0; font-family:"宋体"}
        .page .goto{ display:inline-block; *display:inline; *zoom:1;}


        /*普通文章列表页*/
        .text_centre { overflow: hidden; margin-bottom: 15px; }
        .text_centre li { border-bottom: 1px solid #EEE; padding: 15px 15px 15px 15px; overflow: hidden; zoom: 1; }
        .text_centre li:hover,.text_centre li:active{background:#F6F6F6;}
        .text_centre a{ display:block; overflow:hidden; zoom:1;}
        .text_centre .img_show { float: left; margin-right: 15px; width: 100px; height: 70px; border: 1px solid #EEE; }
        .text_centre .img_show img { width: 100px; height:70px; }
        .text_centre .cont { margin-bottom: 5px; }
        .text_centre .cont .tit_1 { font-size: 12px; padding-bottom: 2px; font-weight: bold; line-height: 18px; color: #666666; }
        .text_centre .cont .info { color: #999; padding-bottom: 2px; line-height: 18px; }
        .text_centre .cont .pice { color: #999; padding-bottom: 2px; }
        .text_centre .cont .pice em { color: #d71318; font-size: 12px; }
        .btn_success { background-color: #5cb85c; font-size: 12px; border-radius: .25em; display: inline; padding: 5px 7px 5px 7px; line-height: 15px; text-align: center; color: #fff; }
        .btn_success a { color: #fff; }
        .btn_danger { background-color: #ff4d4d; font-size: 12px; border-radius: .25em; display: inline; padding: 5px 7px 5px 7px; line-height: 15px; text-align: center; color: #fff; }
        .btn_danger a { color: #fff; }
        .type-ejob { width: 36px; height: 34px; text-align: right; position: absolute; top: 0; right: 0; }
        .bd_tenter{position: relative;}

        /*品牌列表*/
        .brand_list{ background:#fff; margin-top:10px;}
        .brand_list ul{ padding-bottom:20px;}
        .brand_list ul li{ border-bottom:1px solid #EEE; padding:15px; overflow:hidden; zoom:1;}
        .brand_list ul li:hover,.brand_list ul li:active{background:#F6F6F6;}
        .brand_list .img_show{float:left; margin-right:10px;}
        .brand_list .img_show img{ width:100px; height:70px; border:1px solid #EEE;}
        .brand_list .tit{font-size:14px; font-weight:bold;}
        .brand_list .info{color:#999;height:18px; line-height:18px; overflow:hidden;text-overflow:ellipsis;white-space: nowrap; }
        .brand_list .price{color:#999;}
        .brand_list .price em{ color:#D71318; font-size:14px; font-weight:bold; }
        .brand_list .desc{ height:18px; line-height:18px; overflow:hidden; color:#999;padding-bottom:3px; text-overflow:ellipsis;white-space: nowrap;}
        .brand_list .btn{}
        .brand_list .btn a{ display:inline-block; width:62px; height:22px; line-height:22px; background:#5CB85C; color:#fff; text-align:center; margin-right:5px; border-radius:3px; }
        .brand_list .btn a.btn_intro{ background:#FF4D4D; }

        /*品牌详情*/
        .brand_detail{background:#fff; padding:10px; margin-top:10px; margin-bottom:10px;}
        .brand_detail .hd{ overflow:hidden; zoom:1;}
        .brand_detail .img_show{float:left; margin-right:10px;}
        .brand_detail .img_show img{ width:100px; height:70px; border:1px solid #EEE;}
        .brand_detail .tit{font-size:14px; font-weight:bold; padding-bottom:3px;}
        .brand_detail .info{color:#999;}
        .brand_detail .price{color:#999;padding-bottom:3px;}
        .brand_detail .price em{ color:#D71318; font-size:14px; font-weight:bold; }

        .brand_company { background: #f9f9f9; border-radius: 5px; border:dashed 1px #d7d7d7; width:100%; padding:10px; margin-top:10px; line-height: 20px; box-sizing: border-box; }
        .brand_company p { color: #666666; }
        .brand_company strong { font-weight: normal; }

        .brand_tab{border-bottom:1px solid #efefef; height:40px; background:#fff; color:#666;}
        .brand_tab li{float:left; width:16.666%; height:40px; line-height:40px; text-align:center; font-size:14px; cursor:pointer;}
        .brand_tab .on span{ border-bottom:2px solid #459DF5; height:39px; display:inline-block; padding:0 4px; color:#459DF5;}

        .brand_tit { border-bottom:1px solid #EDEDED; height: 40px; line-height: 40px; position: relative; }
        .brand_tit .tit { border-bottom:1px solid #d71318; display:inline-block; font-size:14px; padding: 0 3px 0 0; position:relative; height:40px;}
        .brand_cont{ font-size:14px; color:#666; line-height:22px; padding:10px 0;}
        .brand_cont p{margin-bottom: 1.5em;}
        .brand_cont img{ max-width:100%;}
        .index_btn .btn { line-height: 30px; height: 30px; width: 40%; color: #ffffff; background-color: #ff4d4d; font-size:12px; font-weight: normal; font-family: Arial; text-align: center; display: inline-block; text-decoration: none; border-radius: 4px; }
        .index_btn .btn_2 { line-height: 30px; height: 30px; width: 40%; color: #ffffff; background-color: #5cb85c; font-size:12px; font-weight: normal; font-family: Arial; text-align: center; display: inline-block; text-decoration: none; border-radius: 4px; }
        .index_btn { text-align: center; padding:10px 0;}
        .index_message { margin-top: 10px; background-color: #F5F4F4 }

        .rela_news{ margin:0 0 10px 0;}
        .comment{ border-bottom:1px dotted #EDEDED; padding:10px 0 5px 0;}
        .comment .avatar { display: block; width: 3em;height: auto;float: left; margin: .2em 0 0;}
        .comment .avatar.avatar-large { width: 3.5em;}
        .comment .avatar img, .ui.comments .comment img.avatar {display: block;margin: 0 auto;width: 100%;height: 100%; border-radius: 50%;}
        .comment .content {margin-left: 4.5em;padding:0;font-size:14px;}
        .comment .author {font-size: 1em; color: #00adb5;font-weight: 700;}
        .comment .metadata { display: inline-block; margin-left: .5em; color: rgba(0,0,0,.4);font-size: .875em;}
        .comment .metadata>* {display: inline-block; margin: 0 .5em 0 0; box-sizing: border-box;}
        .comment .metadata>:last-child {margin-right: 0;}
        .comment .text { margin: .25em 0 .5em;word-wrap: break-word;color:#666;line-height:22px;}
        /*普通文章内容页*/
        .list_middle { overflow: hidden; background: #fff; margin-bottom: 15px; margin-top: 10px; }
        .content_brand { width: 100%; float: left; position: relative; min-height: 1px; }
        .content { padding: 15px 15px; font-size:14px; }
        .content h1 { font-size:18px; text-align: center; font-weight: bold; }
        .content small { display: block; margin-bottom: 10px; padding-bottom: 10px; line-height: 20px; text-align: center; font-size: 12px; color: #999; border-bottom: 1px solid #ddd;  margin-top: 5px;}
        .content p { color: #666666;  line-height: 28px; }

        /*问答*/
        .ask{ margin-top:10px;}
        .ask_tab{border-bottom:1px solid #efefef; height:40px; background:#fff; color:#666;}
        .ask_tab li{float:left; width:33.333%; height:40px; line-height:40px; text-align:center; font-size:14px; cursor:pointer;}
        .ask_tab li a{ display:block;}
        .ask_tab .on { border-bottom:2px solid #d71318; height:39px; display:inline-block; color:#459DF5;}

        .ask_list{ padding:5px 14px 20px; background:#fff;}
        .ask_list li{border-bottom:1px solid #EDEDED; padding:10px 0;}
        .ask_list li:active{ background:#EDEDED;}
        .ask_list .answers {background-color:#ad3a37; color:#fff; width:45px;height:40px; padding-top:4px; border-radius:3px; float:left; text-align:center;}
        .ask_list .answers small{ display:block;}
        .ask_list .summary{ padding-left:60px;}
        .ask_list .title{ font-size:16px; font-weight:100; margin-bottom:10px;}
        .ask_list .meta{ color:#999; }
        .ask_list .name{ padding-right:10px;}
        .ask_list .time{}
        .ask_list .votes,.ask_list .views{ float:right;}
        .ask_list .votes{ padding-right:10px;}

        /*--问答加盟--*/
        .interl{ padding:15px 15px; background:#fff; margin-bottom:10px;}
        .interl1{ line-height:35px; background:url(/mobiles/images/inter1.png) no-repeat 1px 8px; background-size:20px auto; font-size:18px; text-indent:1.6em;}
        .interl2{ line-height:25px; padding:2px 0 10px; font-size:14px; color:#666;}
        .interl3{height:20px;}
        .interl3 i{display:block; font-style:inherit; width:40%; float:left; height:20px; line-height:20px; color:#999;}
        .interl3 span{display:block; text-align:right; font-style:inherit; width:40%; float:right; height:20px; line-height:20px; color:#999;}
        .interlo{ padding:15px 15px; background:#fff; margin-bottom:10px;}
        .interlo_top{ height:35px; }
        .interlo_topl{width:40%; height:35px; float:left; font-size:18px; line-height:35px;}
        .interlo_topr{  height:35px; float:right;}
        .interlo_topr i{display:block; padding:0 15px; border-radius:4px; height:33px; border:1px solid #D6D6D6; margin-left:10px; float:left; font-size:14px; line-height:33px; text-align:center;}
        .ba{background:#F7F8FA;}
        .interlonr{border-top:1px solid #D5D5D5; margin-bottom:10px; padding:15px; background: #fff; border:1px solid #e7eaf1; border-radius:2px; box-shadow: 0 1px 3px rgba(0,37,55,.05);box-sizing: border-box;}
        .interlonr_top{ height:40px; padding-top:15px; }
        .interlo_nrl{ float:left;}
        .interlo_nrl img{width:40px; height:40px; border-radius:50%; overflow:hidden;}
        .interlo_nrr{ float:left; width:60%;margin-left:10px;}
        .interlo_nrr .name{ color:#666;}
        .interlo_nrr ul{margin:0 auto; padding:0; list-style:none;}
        .interlo_nrr ul li{ width:100%;  line-height:20px; font-size:14px; color:#999;}
        .interlo_nrr ul li:nth-child(1){ font-weight:bold;}
        .interlo_con{ line-height:25px; font-size:14px; padding:15px 0 5px; color:#666;}
        .interlo_con p{ line-height: 25px;}
        .internoter{background: #FFFFFF;padding:15px;}
        .internoter p{font-size: 16px; padding-bottom:10px;}
        .interlo_btm{height:25px; }
        .interlo_btm i{ display:block; font-style:inherit; line-height:25px; width:50%; height:25px; float:left; color:#999; padding-top:6px;}
        .interlo_btm i img{vertical-align:middle;}
        .interlo_btm i a{color:#999; text-decoration:none;}
        .interlo_btm i a:hover {color:#D71318; }
        .interlo_btm span{color:#999; display:block; width:27%; height:25px; float:right; text-align:right;}
        .bg-maroon{float: right; background: #19b955; color: #FFFFFF; margin-top: 10px;}

        /*在线留言*/
        .index_message {background: #fff; margin-bottom: 15px; border-top:2px solid #D6D6D6; overflow:hidden; }
        .index_message .mfdh { zoom: 1; padding: 10px 14px 15px 14px;overflow:hidden;  }
        .index_message .mfdh li { padding-top: 12px; }
        .message_tit { height: 20px; line-height: 20px; font-size: 14px; padding: 10px 15px 0 15px; }
        .message_tit span { float: left; font-size:16px; color: #333333;  font-weight: bold; padding-right:5px;}
        .message_tit em{ color: #d71318; font-weight: normal; font-size: 12px; }
        .index_message .mfdh .name { height: 36px; border: 1px solid #ccc; width: 100%; border-radius: 4px; margin: auto; padding-left: 50px; box-sizing: border-box; }
        .index_message .mfdh .txt { float: left; width: 100%; border: 1px solid #ccc; padding: 10px 10px 10px 49px; height: 60px; border-radius: 4px;  box-sizing: border-box;}
        .index_message .mfdh .anniu { width: 100%; height: 38px;  border: none; float: left; background: #d71318; font-size:14px; border-radius: 4px; margin-top: 18px; color: #fff; }
        .index_message .mfdh .anniu:hover,.index_message .mfdh .anniu:active{background:#B01F24;}
        .p-tips { position: absolute; margin-top: 9px; margin-left: 15px; }

        /*底部导航*/
        .fixed_nav{width:100%; height:54px; background-color:rgba(215,19,24,0.86);  left:0; bottom:0;}
        .fixed_nav li{float:left; width:33.33%; text-align:center; line-height:16px;}
        .fixed_nav li a{ color:#fff; display:block; padding:8px 0;}
        .fixed_nav li span{ color:#fff; display:block; padding:8px 0;}
        .fixed_nav i{width:20px; height:20px; display:inline-block; background:url(/mobiles/images/fixed_nav_icon.png) no-repeat; background-size:20px;}
        .fixed_nav .icon1{background-position:0 0;}
        .fixed_nav .icon2{background-position:0 -20px;}
        .fixed_nav .icon3{background-position:0 -40px;}
        .fixed_nav .icon4{background-position:0 -60px;}

        /*footer*/
        .footer{  height:134px; margin-top:15px;}
        .footer .footer_nav{text-align:center; padding:5px 15px 5px 15px; color:#666;}
        .footer .footer_nav a{display:inline-block; height:16px; line-height:16px; padding:0 8px; text-align:center; color:#666;}
        .footer .footer_nav a:hover{color:#D71318;}
        .footer .copyright{text-align:center; line-height:20px; color:#999;}

        /*弹窗在线留言*/
        .popup_mask{background-color:rgba(0,0,0,0.5); width:100%; height:100%; position:fixed; left:0; top:0; z-index:9999; display:none;}
        .popup{ background:#fff; width:300px; margin:0 auto; position:relative; top:50%; margin-top:135px; border-radius:5px;}
        .popup .hd{ height:38px; line-height:38px; background:#D71318; color:#fff; position:relative; border-radius:5px 5px 0 0;}
        .popup .hd .tit{ font-size:16px; padding-left:16px;}
        .popup .hd em{ font-size:12px;}
        .popup .hd .popup_close{ width:20px; height:20px; overflow:hidden; text-indent:-9999px; background:url(/mobiles/images/popup_close.png) no-repeat; background-size:contain; position:absolute; top:9px; right:10px;}
        .popup .bd{ width:270px; margin:0 auto; padding:15px 0 }
        .popup .bd li{ padding-bottom:8px; overflow:hidden; zoom:1; position:relative;}
        .popup .bd .label{ position:absolute; left:8px; top:8px;}
        .popup .bd .input_bk{ border:1px solid #D6D6D6; padding-left:47px; width:100%; height:35px; line-height:35px; border-radius:3px; box-sizing:border-box;}
        .popup .bd .textarea_bk{ border:1px solid #D6D6D6; width:100%; height:60px; line-height:24px; padding:5px 5px 5px 47px; border-radius:3px; box-sizing:border-box;}
        .popup .bd .btn{ height:35px;  text-align:center; width:100%; background:#D71318; border-radius:3px; color:#fff; border:none;}
        .popup .bd .btn:hover,.popup .bd .btn:active{ background:#B01F24;}

        table{ width:100% !important;border-collapse:collapse;}
        table th{background:#E73727; font-size:14px; color:#fff; padding:0 10px; height:30px; line-height:20px;}
        table td{ text-align:center; font-size:12px; border:1px solid #D6D6D6 !important; padding:5px !important;}
        .firstRow{ background-color:#F9F9F9;}

        @media only screen and (min-width:100px)and (max-width:320px) {
            .focus{height:150px;}
        }
        @media only screen and (min-width:321px)and (max-width:360px) {
            .focus{height:168px;}
        }
        @media only screen and (min-width: 361px) and (max-width:400px) {
            .focus{height:180px;}
        }
        @media only screen and (min-width: 401px) and (max-width: 479px) {
            .focus{height:195px;}
        }

        @media only screen and (min-width: 480px) {
            .focus{height:210px;}
        }

        @media only screen and (min-width:1024px) {
            .header{height:60px;padding:0 55px 0 55px;}
            .header .back{ margin-left:10px; background:url(/mobiles/images/back.png) 2px 0 no-repeat; background-size:23px auto; top:10px;left:0;width:94px;height:42px;line-height:42px;font-size:16px;}
            .mcate{top:4px;right:15px;width:40px;height:40px; cursor:pointer;}
            .mcate b{width:42px;height:42px;background:url(/mobiles/images/down_icon.png) 3px -65px no-repeat; background-size:42px auto}
            .header .title{height:60px; line-height:60px; font-size:36px;}
            .header .title img{ height:36px; margin-top:13px;}
            .d_nav{ top:60px;}

            .search .search_txt{width:98%; padding-left:2%;}
            .focus{height:300px;/*适配*/}

            .index_nav{padding:15px 0; }
            .index_nav a em{width:80px;height:80px; margin-bottom:5px; background-size:80px auto; }
            .index_nav .icon0 em{background:url(/mobiles/images/nav_icon.png) 0 0 no-repeat; background-size:80px auto;}
            .index_nav .icon1 em{background:url(/mobiles/images/nav_icon.png) 0 -80px no-repeat; background-size:80px auto;}
            .index_nav .icon2 em{background:url(/mobiles/images/nav_icon.png) 0 -160px no-repeat; background-size:80px auto;}
            .index_nav .icon3 em{background:url(/mobiles/images/nav_icon.png) 0 -240px no-repeat; background-size:80px auto;}
            .index_nav .icon4 em{background:url(/mobiles/images/nav_icon.png) 0 -320px no-repeat; background-size:80px auto;}
            .index_nav .icon5 em{background:url(/mobiles/images/nav_icon.png) 0 -400px no-repeat; background-size:80px auto;}
            .index_nav .icon6 em{background:url(/mobiles/images/nav_icon.png) 0 -480px no-repeat; background-size:80px auto;}
            .index_nav .icon7 em{background:url(/mobiles/images/nav_icon.png) 0 -560px no-repeat; background-size:80px auto;}

        }

        @media only screen and (min-width:1440px) {

        }
        .join_img li img {
            width: 130px;
            height: 130px;
            float: left;
        }
        .join_img li .mipimg {
            width: 33%;
            height: 130px;
            float: left;
        }
        .clear{clear: both;padding: 0px; margin: 0px;}
        .img-responsive{
            display: block;
            max-width: 100%;
            height: auto;
            vertical-align: middle;
            border: 0;
        }
        .center-block {
            display: block;
            margin-right: auto;
            margin-left: auto;
        }
        #js_join_1{margin-bottom: 8px}
        #wectb{border-top: 1px solid rgb(230, 230, 230);}
        #tzfx{margin-bottom: 10px;}
        #wsctb{border-top: 1px solid rgb(230, 230, 230);}
        .mip-nav-wrapper.show {
            opacity: 1 !important;
            position: absolute;
            top: 1px;
            right: 5px;
            width: 100%;
            height: 40px;
            z-index: 1;
        }
        @media screen and (max-width: 767px){
            .mip-nav-wrapper .navbar-toggle .icon-bar {
                background: #fff;
            }
        }

    </style>
</head>

<body>
<div class="viewport">
    @include('mip.header')
    @yield('main_content')
    <div class="index_message">
        <div class="message_tit"><span>在线留言</span><em>(客服将第一时间给您回电)</em></div>
        <div class="mfdh clearfix">
            <mip-form method="get" url="http://mip.21yinpin.com/phone/crosscomplate">
                <ul>
                    <li>
                        <label class="p-tips">姓名：</label>
                        <input name="name" type="text"  class="name" id="name_msg" validatetarget="name" validatetype="must" placeholder="如 王先生" >
                        <input name="host" type="hidden"  validatetarget="name" value="{{str_replace('http://www.','http://mip.',config('app.url'))}}{{Request::getrequesturi()}}">
                    </li>
                    <li>
                        <label class="p-tips">手机：</label>
                        <input name="phoneno" type="text" class="name" id="phone_msg" validatetarget="phoneno" validatetype="must" placeholder="如 15618897003" >
                    </li>
                    <li>
                        <label class="p-tips">留言：</label>
                        <textarea class="txt" name="note"  id="note_msg" cols="" rows="" placeholder="我对此项目很感兴趣，请联系我。">我对此项目很感兴趣，请联系我</textarea>
                    </li>
                </ul>
                <div submit-success>
                    <template type="mip-mustache">
                        Success! Thanks for trying the mip demo.
                    </template>
                </div>
                <div submit-error>
                    <template type="mip-mustache">
                        Error!.
                    </template>
                </div>
                <input  type="submit" class="anniu" value="立即提交留言">
            </mip-form>
        </div>
    </div>

    <div class="footer">
        <div class="footer_nav">
            <a href="/storage/mobilesitemap.xml">网站地图</a>|<a href="/about/" rel="nofollow">关于我们</a>|<a href="/law/" rel="nofollow">免责声明</a>|<a href="{{env('APP_URL')}}">电脑版</a>
        </div>
        <div class="copyright">
            <p>世纪饮品网  沪ICP备16055116号-17</p>
            <p>上海莫卡网络科技有限公司</p>
        </div>
    </div>
    <mip-fixed type="bottom">
        <div class="fixed_nav">
            <ul>
                <li>
                    <a href="/">
                        <i class="icon1"></i>
                        <p>首页</p>
                    </a>
                </li>
                <li>
                    <span on="tap:my-lightbox.toggle" id="btn-open" role="button" tabindex="0">
                        <i class="icon2"></i>
                        <p>在线咨询</p>
                    </span>

                </li>
                <li>
                    <span  id="js_popup" on="tap:my-lightbox.toggle" >
                        <i class="icon3"></i>
                        <p>快速留言</p>
                    </span>
                </li>
            </ul>
        </div>
    </mip-fixed>

    <mip-lightbox
            id="my-lightbox"
            layout="nodisplay"
            class="mip-hidden">
        <div class="lightbox">
            <div class="popup">
                <div class="hd">
                    <span class="tit">快速留言</span>
                    <em>(客服将第一时间给您回电)</em>
                    <span class="popup_close" on="tap:my-lightbox.toggle" class="lightbox-close">关闭</span>
                </div>
                <div class="bd">
                    <mip-form method="get" url="http://mip.21yinpin.com/phone/mipcrosscomplate" class="mip-element mip-layout-container">
                    <ul>
                        <li>
                            <label for="msg_name" class="label">姓名：</label>
                            <input id="msg_name" class="input_bk" type="text" name="msg_name" value="" placeholder="如 万先生" >
                            <input name="hosturl" type="hidden"  value="{{str_replace('http://www.','http://mip.',config('app.url'))}}{{Request::getrequesturi()}}">
                        </li>
                        <li>
                            <label for="msg_phone" class="label">手机：</label>
                            <input id="msg_phone" class="input_bk" type="text" name="msg_phone" value="" placeholder="如 13888888888" >
                        </li>
                        <li>
                            <label for="msg_cont" class="label">留言：</label>
                            <textarea id="msg_cont" class="textarea_bk" type="text" name="msg_cont" value="" placeholder="我对此项目很感兴趣，请联系我。"></textarea>
                        </li>
                        <li>
                            <input type="submit" value="立即提交留言" id="msg_sub" class="btn">
                        </li>
                    </ul>
                    </mip-form>
                </div>
            </div>
        </div>
    </mip-lightbox>
</div>

<script src="https://c.mipcdn.com/static/v1/mip.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-share/mip-share.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-form/mip-form.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-nav-slidedown/mip-nav-slidedown.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-fixed/mip-fixed.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-lightbox/mip-lightbox.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-stats-baidu/mip-stats-baidu.js"></script>
<mip-stats-baidu>
    <script type="application/json">
        {
            "token": "d28d18338087ec37b99eb01f33454974",
            "_setCustomVar": [1, "login", "1", 2],
            "_setAutoPageview": [true]
        }
    </script>
</mip-stats-baidu>
</body>
</html>
