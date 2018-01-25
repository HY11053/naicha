@extends('mip.mip')
@section('title'){{$thisarticleinfos->title}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('main_content')
    <div class="common_tit">
        <nav class="tit">@include('mip.position')</nav>
    </div>
    <div class="brand_detail">
        <div class="hd">
            <div class="img_show"><mip-img src="{{$thisarticleinfos->litpic}}" alt="{{$thisarticleinfos->title}}"/></div>
            <div class="cont">
                <h1 class="tit">{{$thisarticleinfos->article->brandname}}</h1>
                <p class="price">基本投资：<em>{{$thisarticleinfos->article->brandpay}}</em></p>
                <p>意向加盟 {{$thisarticleinfos->article->brandattch}}</p>
                <p>申请加盟：{{$thisarticleinfos->article->brandapply}}</p>
                <p>品牌好评率{{rand(85,99)}}%</p>
            </div>
        </div>

        <div class="brand_company">
            <p><strong>公司名称：</strong>{{$thisarticleinfos->article->brandgroup}}</p>
            <p><strong>联系电话：</strong>400-881-3178</p>
            <p><strong>公司地址：</strong>{{$thisarticleinfos->article->brandaddr}}</p>
        </div>
        <div class="brand_tit" id="js_join_1" >@if(!empty($thisarticleinfos->ppjstitle))  <h3 class="tit">{{$thisarticleinfos->ppjstitle}}</h3> @else <span class="tit">【{{$thisarticleinfos->article['brandname']}}】<em>品牌介绍</em></span>  @endif</div>
        <table cellspacing="0" id="wectb">
            <tbody>
            <tr>
                <td class="td_color" >品牌名称</td>
                <td class="td_style">{{$thisarticleinfos['shorttitle']}}</td>
                <td class="td_color">投资金额</td>
                <td class="td_style">{{$thisarticleinfos->article['brandpay']}}</td>
            </tr>
            <tr>
                <td class="td_color" >成立日期</td>
                <td class="td_style">{{$thisarticleinfos->article['brandtime']}}</td>
                <td class="td_color">门店总数</td>
                <td class="td_style">{{$thisarticleinfos->article['brandnum']}}</td>
            </tr>
            <tr>
                <td class="td_color">经营范围</td>
                <td class="td_style">{{$thisarticleinfos->article['brandmap']}}</td>
                <td class="td_color">适合人群</td>
                <td class="td_style">{{$thisarticleinfos->article['brandperson']}}</td>
            </tr>
            <tr>
                <td class="td_color">加盟区域</td>
                <td class="td_style">{{$thisarticleinfos->article['brandarea']}}</td>
                <td class="td_color">是否有区域授权</td>
                <td class="td_style">{{$thisarticleinfos->article['brandduty']}}</td>
            </tr>
            <tr>
                <td class="td_color">品牌发源地</td>
                <td class="td_style">{{$thisarticleinfos->article['brandorigin']}}</td>
                <td class="td_color">合同期限</td>
                <td class="td_style"></td>
            </tr>
            <tr>
                <td class="td_color">培训期限</td>
                <td class="td_style">二周</td>
                <td class="td_color">特许使用费</td>
                <td class="td_style"></td>
            </tr>
            <tr>
                <td class="td_color">公司名称</td>
                <td class="td_style">{{$thisarticleinfos->article['brandgroup']}}</td>
                <td class="td_color">公司性质</td>
                <td class="td_style">{{$thisarticleinfos->article['genre']}}</td>
            </tr>
            <tr>
                <td class="td_color">所需面积</td>
                <td class="td_style">{{$thisarticleinfos->article['acreage']}}</td>
                <td class="td_color"> </td>
                <td class="td_style"> </td>
            </tr>
            </tbody>
        </table>

        <div class="brand_cont">
            {!! str_replace('<img','<mip-img',preg_replace("/style=.+?['|\"]/i",'',$thisarticleinfos->article->body)) !!}
      	</div>
        <div class="brand_tit" id="js_join_">@if(!empty($thisarticleinfos->jmxqtitle))  <h3 class="tit">{{$thisarticleinfos->jmxqtitle}}</h3> @else <span class="tit">【{{$thisarticleinfos->article['brandname']}}】<em>加盟详情</em></span>  @endif</div>
        <div class="brand_cont">
            {!! str_replace('<img','<mip-img',preg_replace("/style=.+?['|\"]/i",'',$thisarticleinfos->article->jmxq_content)) !!}
        </div>

        <div class="brand_tit" id="js_join_2">@if(!empty($thisarticleinfos->jmystitle))  <h3 class="tit">{{$thisarticleinfos->jmystitle}}</h3> @else <span class="tit">【{{$thisarticleinfos->article['brandname']}}】<em>加盟优势</em></span>  @endif </div>

        <div class="brand_cont">
            {!! str_replace('<img','<mip-img',preg_replace("/style=.+?['|\"]/i",'',$thisarticleinfos->article->jmys_content)) !!}
        </div>
        <div class="brand_tit" id="js_join_3">@if(!empty($thisarticleinfos->jmlctitle))  <h3 class="tit">{{$thisarticleinfos->jmlctitle}}</h3> @else <span class="tit">【{{$thisarticleinfos->article['brandname']}}】<em>加盟流程</em></span>  @endif </div>
        <div class="brand_cont">
            {!! str_replace('<img','<mip-img',preg_replace("/style=.+?['|\"]/i",'',$thisarticleinfos->article->jmlc_content)) !!}
        </div>
        <div class="brand_tit" id="js_join_4">@if(!empty($thisarticleinfos->jmzctitle))  <h3 class="tit">{{$thisarticleinfos->jmzctitle}}</h3> @else <span class="tit">【{{$thisarticleinfos->article['brandname']}}】<em>加盟政策</em></span>   @endif </div>
        <div class="brand_cont">
            {!! str_replace('<img','<mip-img',preg_replace("/style=.+?['|\"]/i",'',$thisarticleinfos->article->jmzc_content)) !!}
        </div>
        <div class="brand_tit" id="js_join_5">@if(!empty($thisarticleinfos->jmasktitle))  <h3 class="tit" >{{$thisarticleinfos->jmasktitle}}</h3> @else <span class="tit">【{{$thisarticleinfos->article['brandname']}}】<em>加盟问答</em></span>  @endif </div>
        <div class="brand_cont">
            {!! str_replace('<img','<mip-img',preg_replace("/style=.+?['|\"]/i",'',$thisarticleinfos->article->jmask_content)) !!}
        </div>
        <div class="index_btn" > <a href="#" class="btn_2">开店咨询</a> <a href="#" class="btn">索取资料</a> </div>
        <div class="brand_tit" > <span class="tit">【{{$thisarticleinfos['shorttitle']}}】<em>品牌展示</em></span> </div>
        <div class=" join_img">
            <ul>
                @foreach( array_filter(explode(',',$thisarticleinfos->article['imagepics'])) as $pics)
                    <li><mip-img class="mipimg" src="{{$pics}}" alt="【{{$thisarticleinfos->shorttitle}}】"/></li>
                @endforeach
            </ul>
        </div>
        <div class="clear"></div>
        <div class="brand_tit" id="tzfx"> <h2 class="tit">【{{$thisarticleinfos->article['brandname']}}】<em>投资分析</em></h2> </div>
        <table cellspacing="0" id="wsctb">
            <tbody>
            <tr>
                <td class="td_color" >品牌名称</td>
                <td class="td_style">{{$thisarticleinfos->article['brandname']}}</td>
                <td class="td_color">装修费用</td>
                <td class="td_style">{{$thisarticleinfos->article['decorationpay']}}</td>
            </tr>
            <tr>
                <td class="td_color" >前两季度房租</td>
                <td class="td_style">{{$thisarticleinfos->article['quartersrent']}}</td>
                <td class="td_color">货铺/设备费用</td>
                <td class="td_style">{{$thisarticleinfos->article['equipmentcost']}}</td>
            </tr>
            <tr>
                <td class="td_color">流动资金</td>
                <td class="td_style">{{$thisarticleinfos->article['workingcapital']}}</td>
                <td class="td_color">人工开支</td>
                <td class="td_style">{{$thisarticleinfos->article['laborquarter']}}</td>
            </tr>
            <tr>
                <td class="td_color">工商税务杂项</td>
                <td class="td_style">{{$thisarticleinfos->article['miscellaneous']}}</td>
                <td class="td_color">水电煤(元/月)</td>
                <td class="td_style">{{$thisarticleinfos->article['watercoal']}}</td>

            </tr>
            <tr>
                <td class="td_color">日成交量</td>
                <td class="td_style">{{$thisarticleinfos->article['dailyvolume']}}</td>
                <td class="td_color">平均单价</td>
                <td class="td_style">{{$thisarticleinfos->article['unitprice']}}</td>

            </tr>
            <tr>
                <td class="td_color">日均成本</td>
                <td class="td_style">{{($thisarticleinfos->article['decorationpay']/365)+($thisarticleinfos->article['quartersrent']/180)+($thisarticleinfos->article['equipmentcost']/365)+($thisarticleinfos->article['laborquarter']/365)+($thisarticleinfos->article['miscellaneous']/365)+($thisarticleinfos->article['watercoal']/30)}}</td>
                <td class="td_color">日均收入</td>
                <td class="td_style">{{($thisarticleinfos->article['dailyvolume']*$thisarticleinfos->article['dailyvolume'])-(($thisarticleinfos->article['decorationpay']/365)+($thisarticleinfos->article['quartersrent']/180)+($thisarticleinfos->article['equipmentcost']/365)+($thisarticleinfos->article['laborquarter']/365)+($thisarticleinfos->article['miscellaneous']/365)+($thisarticleinfos->article['watercoal']/30))}}</td>
            </tr>
            <tr>
                <td class="td_color">月收入</td>
                <td class="td_style">{{$thisarticleinfos->article['brandgroup']}}</td>
                <td class="td_color">公司性质</td>
                <td class="td_style">{{$thisarticleinfos->article['genre']}}</td>
            </tr>
            <tr>
                <td class="td_color">年收入</td>
                <td class="td_style">{{$thisarticleinfos->article['acreage']}}</td>
                <td class="td_color"> 投资总额</td>
                <td class="td_style"> </td>
            </tr>
            </tbody>
        </table>
        <div class="clear"></div>

    </div>
	<div class="index_news rela_news">
		<div class="common_tit">
			<nav class="tit">相关文章</nav>
		</div>
		<div class="bd">
			<ul>
                @foreach($xgsearchs as $xgsearch)
                    <li><span class="date">{{$xgsearch->published_at}}</span><a class="txt" href="/{{$xgsearch->arctype->real_path}}/{{$xgsearch->id}}.shtml" title="{{$xgsearch->title}}">{{$xgsearch->title}} </a></li>
                @endforeach
              </ul>
		</div>
	</div>
    <div class="index_news rela_news">
        <div class="common_tit">
            <nav class="tit">最新奶茶新闻</nav>
        </div>
        <div class="bd">
            <ul>
                @foreach($latesnews as $latesnew)
                    <li><span class="date">{{$latesnew->published_at}}</span><a class="txt" href="/{{$latesnew->arctype->real_path}}/{{$latesnew->id}}.shtml" title="{{$latesnew->title}}">{{$latesnew->title}} </a></li>
                @endforeach
            </ul>
        </div>
    </div>
    @stop