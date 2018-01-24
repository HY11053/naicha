@extends('frontend.frontend')
@section('title'){{ config('app.webname', '世纪饮品网') }}@stop
@section('keywords'){{ config('app.keywords', '世纪饮品网') }}@stop
@section('description'){{ config('app.description', '世纪饮品网') }}@stop
@section('headlibs')
    <meta name="Copyright" content="世纪饮品网-{{env('APP_URL')}}"/>
    <meta name="author" content="世纪饮品网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}" >
    <link rel="canonical" href="{{config('app.url')}}"/>
    <meta property="og:image" content="{{config('app.url')}}/reception/images/logo.jpg"/>
@stop
@section('subnav')
    <div class="sub_nav">
        <dl>
            <dt class="icon1"><a href="/{{\App\AdminModel\Arctype::where('id','1')->value('real_path')}}" target="_blank">奶茶加盟品牌大全</a></dt>
            @foreach($lingshibrands as $lingshibrand)
            <dd><a href="/{{$lingshibrand->arctype->real_path}}/{{$lingshibrand->id}}.shtml" target="_blank" title="{{$lingshibrand->article->brandname}}">{{$lingshibrand->article->brandname}}</a></dd>
            @endforeach
        </dl>
        <dl class="dl_wid1">
            <dt class="icon2"><a href="/{{\App\AdminModel\Arctype::where('id','3')->value('real_path')}}" target="_blank" >台湾奶茶加盟品牌</a></dt>
            @foreach($chaohuobrands as $chaohuobrand)
                <dd><a href="/{{ $chaohuobrand->arctype->real_path}}/{{ $chaohuobrand->id}}.shtml" target="_blank" title="{{ $chaohuobrand->article->brandname}}">{{ $chaohuobrand->article->brandname}}</a></dd>
            @endforeach

        </dl>
        <dl class="dl_wid1">
            <dt class="icon3"><a href="/{{\App\AdminModel\Arctype::where('id','4')->value('real_path')}}" target="_blank">港式、网红奶茶品牌加盟</a></dt>
            @foreach($jinkoubrands as $jinkoubrand)
            <dd><a href="/{{ $jinkoubrand->arctype->real_path}}/{{$jinkoubrand->id}}.shtml" target="_blank" title="{{$jinkoubrand->article->brandname}}">{{$jinkoubrand->article->brandname}}</a></dd>
            @endforeach
        </dl>

    </div>

@stop
@section('main_content')
    <div class="main">
       <section>
        <div class="index_box1 clearfix">
            <div class="index_box1_l">
                <div class="search_db">
                    <div class="hd">项目查找</div>
                    <div class="bd">
                        <link href="/reception/css/jquery.selectlist.css" rel="stylesheet" type="text/css" />
                        <script type="text/javascript" src="/reception/js/jquery.selectlist.js"></script>
                        <script type="text/javascript">
                            $(function(){
                                $(".select_bk").selectlist({
                                    zIndex:10,
                                    width:139,
                                    height:32,
                                    triangleSize:6,
                                    triangleColor:'#D6D6D6'
                                });
                            })
                        </script>
                        <form onsubmit="return false">
                            {{ csrf_field() }}
                            <div class="select_mod">
                                <div class="clearfix">
                                    <p>
								<span class="cont">
								  <select name="select1" id="select1" class="select_bk">
									<option selected="selected" value="0">行业分类</option>
									<option value="1">奶茶店品牌</option>
									<option value="3">港式奶茶</option>
									<option value="4">台湾奶茶</option>
									<option value="5">网红奶茶</option>
								  </select>
								</span>
                                    </p>
                                    <p>
								<span class="cont">
								  <select name="select2" id="select2" class="select_bk">
									<option selected="selected" value="0">投资金额</option>
									<option>1~5万</option>
									<option>5~10万</option>
									<option>10~20万</option>
									<option>20万~50万</option>
									<option>50~100万</option>
								  </select>
								</span>
                                    </p>
                                    <p>
								<span class="cont">
								  <select name="select3" id="select3" class="select_bk">
									<option selected="selected" value="0">店铺面积</option>
									<option>1~10平米</option>
									<option>10~30平米</option>
									<option>30~50平米</option>
									<option>50~80平米</option>
									<option>100平米以上</option>
								  </select>
								</span>
                                    </p>
                                    <p>
                                        <span class="cont"><input name="keywordValue" id="ppmc" class="input_bk" value="请输入文本" onfocus="if (value =='请输入文本'){value =''}" onblur="if (value ==''){value='请输入文本'}"></span>
                                    </p>
                                </div>
                                <p><input type="submit" width="126" height="35" id="sub_btn" class="btn" value="项目搜索"></p>

                            </div>
                        </form>
                        <div class="tit">投资金额：</div>
                        <div class="price">
                            <a title="1-5万元项目" href="/project/0-1-5-0-0.shtml">1-5万元</a>
                            <a title="5－10万元项目" href="/project/0-5-10-0-0.shtml">5-10万元</a>
                            <a title="10－20万元项目" href="/project/0-10-20-0-0.shtml">10-20万元</a>
                            <a title="20－50万元项目" href="/project/0-20-50-0-0.shtml">20-50万元</a>
                            <a title="50-100万元项目" href="/project/0-50-100-0-0.shtml">50-100万元</a>
                            <a title="100万元以上项目" href="/project/0-100-0-0.shtml">100万以上</a>
                        </div>
                        <div class="tit">面积：</div>
                        <div class="area">
                            <a title="10平以下" href="/project/0-0-1~10-0.shtml">10平以下</a>
                            <a title="10-30平米" href="/project/0-0-10~30-0.shtml">10-30平米</a>
                            <a title="30-80平米" href="/project/0-0-30~50-0.shtml">30-50平米</a>
                            <a title="80-150平米" href="/project/0-0-50~80-0.shtml">50-80平米</a>
                            <a title="150平以上" href="/project/0-0-100-0.shtml">100平以上</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="index_box1_c">
                <div class="slideBox">
                    <div class="hd">
                        <ul><li>1</li><li>2</li><li>3</li><li>4</li></ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',29)->value('typeid'))->value('real_path')}}/29.shtml" target="_blank"><img src="/reception/images/temp/banner1.jpg" /></a></li>
                            <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',39)->value('typeid'))->value('real_path')}}/39.shtml" target="_blank"><img src="/reception/images/temp/banner2.jpg" /></a></li>
                            <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',79)->value('typeid'))->value('real_path')}}/79.shtml" target="_blank"><img src="/reception/images/temp/banner3.jpg" /></a></li>
                            <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',72)->value('typeid'))->value('real_path')}}/72.shtml" target="_blank"><img src="/reception/images/temp/banner4.jpg" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="index_step">
                    <ul>
                        <li>
                            <i class="icon1"></i>
                            <p>找项目</p>
                        </li>
                        <li>
                            <i class="icon2"></i>
                            <p>留言咨询</p>
                        </li>
                        <li>
                            <i class="icon3"></i>
                            <p>等待回访</p>
                        </li>
                        <li>
                            <i class="icon4"></i>
                            <p>成功合作</p>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="index_box1_r">
                <div class="count">
                    <p>世纪饮品网入驻品牌数<br>
                        <span>61{{\App\AdminModel\Archive::where('mid',1)->count()}}</span>
                    </p>
                    <ul>
                        <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',29)->value('typeid'))->value('real_path')}}/29.shtml" title="【CoCo奶茶】CoCo 为您严选优质茶叶以及在地化采购季节鲜果并且不断创新研发严格食安控管所制成的健康茶饮!" target="_blank">【CoCo奶茶】CoCo 为您严选优质茶叶以及在地化采购季节鲜果并且不断创新研发严格食安控管所制成的健康茶饮!</a></li>
                        <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',39)->value('typeid'))->value('real_path')}}/39.shtml" title="【一点点奶茶】源自台湾 一杯奶茶 一句问候" target="_blank">【一点点奶茶】源自台湾 一杯奶茶 一句问候</a></li>
                        <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',79)->value('typeid'))->value('real_path')}}/79.shtml" title="【阿姨奶茶】采用传统手工熬煮的工艺，倡导“选料上乘、加工精细、口味纯正“" target="_blank">【阿姨奶茶】采用传统手工熬煮的工艺，倡导“选料上乘、加工精细、口味纯正“</a></li>
                        <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',72)->value('typeid'))->value('real_path')}}/72.shtml" title="【LELECHA乐乐茶】LELECHA楽楽茶 坚持匠心直营" target="_blank">【LELECHA乐乐茶】LELECHA楽楽茶 坚持匠心直营</a></li>
                    </ul>
                    <div class="btn"><a href="javascript:;" class="ico-quoted">马上找好项目</a></div>
                </div>
                <div class="tools">
                    <div class="hd">创业必备工具</div>
                    <div class="bd">
                        <ul>
                            <li><a href="javascript:;" rel="nofollow" target="_self" title="成本计算" class="ico-quoted"><img src="/reception/images/icon_1.png">成本计算</a></li>
                            <li><a href="javascript:;" rel="nofollow" target="_self"  title="贷款计算"><img src="/reception/images/icon_2.png">贷款计算</a></li>
                            <li><a href="javascript:;" rel="nofollow" target="_self"  title="投资预测"><img src="/reception/images/icon_3.png">投资预测</a></li>
                            <li><a href="javascript:;" rel="nofollow" target="_self"  title="创业红包"><img src="/reception/images/icon_4.png">创业红包</a></li>
                            <li><a href="javascript:;" rel="nofollow" target="_self"  title="先行赔付"><img src="/reception/images/icon_5.png">先行赔付</a></li>
                            <li><a href="javascript:;" rel="nofollow" target="_self"  title="金融支持"><img src="/reception/images/icon_6.png">金融支持</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
       </section>


        <section>
        <div class="index_box2">
            <div class="hd">
                <span class="tit">创业好店</span>
                @foreach($cybrands as $cybrand)
                <span class="txt"><a href="/{{$cybrand->arctype->real_path}}/{{$cybrand->id}}.shtml" target="_blank">{{$cybrand->article->brandname}}</a> |  </span>
                @endforeach
            </div>
            <div class="bd">
                <ul>
                    @foreach($cysbrands as $cysbrand)
                    <li><a href="/{{$cysbrand->arctype->real_path}}/{{$cysbrand->id}}.shtml" target="_blank"><img src="{{$cysbrand->litpic}}" title="{{$cysbrand->article->brandname}}" alt="{{$cysbrand->article->brandname}}"><span>{{$cysbrand->article->brandname}}</span></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="index_item_pic">
                <ul>
                    @foreach($cybsbrands as $cybsbrand)
                    <li>
                        <a href="/{{$cybsbrand->arctype->real_path}}/{{$cybsbrand->id}}.shtml" target="_blank" data="{{$cybsbrand->litpic}}"><img src="{{$cybsbrand->litpic}}" width="140" height="81" alt="{{$cybsbrand->title}}" title="{{$cybsbrand->article->brandname}}"/></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        </section>


        <section>
        <div class="index_box3 clearfix">
            <div class="index_box3_l">
                <div class="img_show"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}" target="_blank"><img src="/reception/images/index_pic1.jpg" title="{{\App\AdminModel\Arctype::where('id',1)->value('typename')}}" alt="奶茶店加盟"/></a></div>
                <p class="tit"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}" target="_blank">奶茶店加盟</a></p>
                <p class="desc">热门品牌 抢占商机</p>
                <p class="more"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}" target="_blank" title="{{\App\AdminModel\Arctype::where('id',1)->value('typename')}}">查看详情&gt;</a></p>
            </div>
            <div class="index_box3_r">
                <div class="hd">
                    <span class="tit">奶茶品牌</span>
                    <span class="desc">精选全球好奶茶品牌、看得见的商机前景</span>
                    <span class="more"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <div class="bd">
                    <div class="bd_l">
                        @foreach($latestlingshibrands as $index=>$latestlingshibrand)

                        @if($index==0 || $index %9 ==0) <dl> @endif

                            <dd><a href="/{{$latestlingshibrand->arctype->real_path}}/{{$latestlingshibrand->id}}.shtml" title="{{$latestlingshibrand->article->brandname}}" target="_blank">{{$latestlingshibrand->article->brandname}}</a></dd>

                        @if(($index+1) %9 ==0 || $index==count($latestlingshibrands)) </dl> @endif
                            @endforeach

                    </div>
                    <div class="bd_r">
                        <div class="index_txt_list_wrap">
                            <div class="index_txt_list">
                                @foreach($latestrlingshibrands as $indes=>$latestrlingshibrand)

                                    @if($indes==0 || $indes%2 ==0) <dl> @endif
                                    <dd><a href="/{{$latestrlingshibrand->arctype->real_path}}/{{$latestrlingshibrand->id}}.shtml" title="{{$latestrlingshibrand->article->brandname}}" target="_blank">{{$latestrlingshibrand->article->brandname}}</a></dd>

                                    @if($indes%2 !=0 || $indes+1==count($latestrlingshibrands)) </dl>  @endif

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>


        <section>
        <div class="index_box3 clearfix">
            <div class="index_box3_l h420">
                <div class="img_show"><a href="/{{\App\AdminModel\Arctype::where('id',3)->value('real_path')}}" target="_blank"><img src="/reception/images/index_pic2.jpg" alt="炒货品牌"/></a></div>
                <p class="tit"><a href="/{{\App\AdminModel\Arctype::where('id',3)->value('real_path')}}" target="_blank">港式奶茶</a></p>
                <p class="desc">丝袜奶茶/港式拉茶</p>
                <p class="more"><a href="/{{\App\AdminModel\Arctype::where('id',3)->value('real_path')}}" target="_blank" title="{{\App\AdminModel\Arctype::where('id',3)->value('typename')}}">查看详情&gt;</a></p>
            </div>
            <div class="index_box3_r">
                <div class="hd">
                    <span class="tit">港式奶茶加盟</span>
                    <span class="desc">选址-设计-装修-开店-经营一条龙</span>
                    <span class="more"><a href="/{{\App\AdminModel\Arctype::where('id',3)->value('real_path')}}" target="_blank" title="{{\App\AdminModel\Arctype::where('id',3)->value('typename')}}">更多&gt;&gt;</a></span>
                </div>
                <div class="bd">
                    <div class="bd_l">

                        @foreach($latestchaohuobrands as $index=>$latestchaohuobrand)

                            @if($index==0 || $index %9 ==0) <dl> @endif

                                <dd><a href="/{{$latestchaohuobrand->arctype->real_path}}/{{$latestchaohuobrand->id}}.shtml" title="{{$latestchaohuobrand->article->brandname}}" target="_blank">{{$latestchaohuobrand->article->brandname}}</a></dd>

                                @if(($index+1) %9 ==0 || $index==count($latestchaohuobrands)) </dl> @endif
                        @endforeach

                    </div>
                    <div class="bd_r">
                        <div class="index_brand_list">
                            <ul>
                                @foreach($latestrchaohuobrands as $latestrchaohuobrand)
                                <li><a href="/{{$latestrchaohuobrand->arctype->real_path}}/{{$latestrchaohuobrand->id}}.shtml" target="_blank"><img src="{{$latestrchaohuobrand->litpic}}" title="{{$latestrchaohuobrand->article->brandname}}" alt="{{$latestrchaohuobrand->article->brandname}}"><span>{{$latestrchaohuobrand->article->brandname}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <section>
        <div class="index_box3 clearfix">
            <div class="index_box3_l h420">
                <div class="img_show"><a href="/{{\App\AdminModel\Arctype::where('id',2)->value('real_path')}}" target="_blank"><img src="/reception/images/index_pic3.jpg" alt="台湾奶茶"/></a></div>
                <p class="tit"><a href="/{{\App\AdminModel\Arctype::where('id',2)->value('real_path')}}" target="_blank">台湾奶茶</a></p>
                <p class="desc">22个系列 百种产品</p>
                <p class="more"><a href="/{{\App\AdminModel\Arctype::where('id',2)->value('real_path')}}" target="_blank">查看详情&gt;</a></p>
            </div>
            <div class="index_box3_r">
                <div class="hd">
                    <span class="tit">台湾奶茶品牌</span>
                    <span class="desc">加盟台湾正宗奶茶 热销大陆 2人操作，24小时热卖不断</span>
                    <span class="more"><a href="/{{\App\AdminModel\Arctype::where('id',2)->value('real_path')}}" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <div class="bd">
                    <div class="bd_l">
                        @foreach($latestjinkoubrands as $index=>$latestjinkoubrand)

                            @if($index==0 || $index %9 ==0) <dl> @endif

                                <dd><a href="/{{$latestjinkoubrand->arctype->real_path}}/{{$latestjinkoubrand->id}}.shtml" title="{{$latestchaohuobrand->article->brandname}}" target="_blank">{{str_limit($latestjinkoubrand->article->brandname, $limit = 8, $end = '')}}</a></dd>

                                @if(($index+1) %9 ==0 || $index==count($latestjinkoubrands)) </dl> @endif
                        @endforeach
                    </div>
                    <div class="bd_r">
                        <div class="index_brand_list">
                            <ul>
                                @foreach($latestrjinkoubrands as $latestrjinkoubrand)
                                    <li><a href="/{{$latestrjinkoubrand->arctype->real_path}}/{{$latestrjinkoubrand->id}}.shtml" target="_blank"><img src="{{$latestrjinkoubrand->litpic}}" title="{{$latestrjinkoubrand->article->brandname}}" alt="{{$latestrjinkoubrand->article->brandname}}"><span>{{$latestrjinkoubrand->article->brandname}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <div class="bn">
            <ul>
                <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',336)->value('typeid'))->value('real_path')}}/336.shtml" target="_blank"><img src="/reception/images/temp/bn1.jpg" /></a></li>
                <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',172)->value('typeid'))->value('real_path')}}/172.shtml" target="_blank"><img src="/reception/images/temp/bn2.jpg" /></a></li>
            </ul>
        </div>

        <section>
        <div class="index_box4 clearfix">
            <div class="cont4_con fl">
                <h2>网红奶茶</h2>
                <div class="con_fir">
                    <div class="fir_left">
                        @foreach($seesrbrands as $seesrbrand)

                        <div class="li_div"><a href="/{{$seesrbrand->arctype->real_path}}/{{$seesrbrand->id}}.shtml" title="{{$seesrbrand->article->brandname}}" target="_blank"><img src="{{$seesrbrand->litpic}}"></a><span><a href="/{{$seesrbrand->arctype->real_path}}/{{$seesrbrand->id}}.shtml" target="_blank">{{$seesrbrand->article->brandname}}</a><br><font color="#9c9c9c">{{$seesrbrand->article->brandattch}}人</font><em><a href="#" target="_blank">咨询</a></em></span></div>
                        @endforeach
                    </div>
                    <div class="fir_right">
                        <ul>
                            @foreach($seesrbrands as $seesrbrand)
                            <li>
                                <div class="jg">￥{{$seesrbrand->article->brandpay}}</div>
                                <div class="wz"><a href="/{{$seesrbrand->arctype->real_path}}/{{$seesrbrand->id}}.shtml" title="{{$seesrbrand->article->brandname}}" target="_blank">{{$seesrbrand->article->brandname}}</a><br><span class="fl">行业：<font color="#666">{{str_replace('加盟','',$seesrbrand->arctype->typename)}}</font></span><span class="fr">{{$seesrbrand->article->brandattch}}人咨询</span></div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cont4_con fr">
                <h2>奶茶百科</h2>
                <div class="con_sec">
                    <ul>
                        @foreach($askrows as $index=>$askrow)
                            <li class="@if($index==0) one @elseif ($index==1) two @else three @endif bor">
                                <span><a href="{{$askrow->arctype->real_path}}/{{$askrow->id}}.shtml" title="{{$askrow->title}}" target="_blank">{{$askrow->title}}</a></span>
                                <p> {{str_limit(trim(strip_tags($askrow->article->body)),$limit =64,$end = '...')}}</p>
                            </li>
                        @endforeach
                    </ul>
                    <textarea class="question" onclick="this.value = '';" name="question">#说出您创业疑问，10分钟将得到答案#</textarea>
                    <input type="button" class="wd_submit" value="提问">
                </div>
            </div>
        </div>
        </section>


        <section>
        <div class="index_box5">
            <div class="cont5_left">
                <h2>奶茶大讲堂</h2>
                <div class="left_one">
                    <div class="one_top">
                        @foreach($recommendnews as $recommendnew)
                        <div class="li_d"> <a href="/{{$recommendnew->arctype->real_path}}/{{$recommendnew->id}}.shtml" title="{{$recommendnew->title}}" target="_blank"><img src="{{$recommendnew->litpic}}" alt="{{$recommendnew->title}}"></a>
                            <div class="d_wz">
                                <h3><a href="/{{$recommendnew->arctype->real_path}}/{{$recommendnew->id}}.shtml" target="_blank" title="{{$recommendnew->title}}">{{$recommendnew->title}}</a></h3>
                                <p>{{str_limit($recommendnew->description, $limit = 90, $end = '...')}}</p>
                            </div>
                        </div>
                            @endforeach
                    </div>
                    <div class="one_cen">
                        <ul>
                            @foreach($latesnews as $latesnew)
                            <li><a href="{{$latesnew->arctype->real_path}}/{{$latesnew->id}}.shtml" title="{{$latesnew->title}}" target="_blank">{{$latesnew->title}} </a></li>
                            @endforeach
                              </ul>
                    </div>
                    <div class="one_bot">
                        <dl>
                            <dt>人群解读</dt>
                            @foreach($crowdnews as $crowdnew)
                            <dd><a href="/{{$crowdnew->arctype->real_path}}/{{$crowdnew->id}}.shtml" target="_blank" title="{{$crowdnew->title}}"><font color="#D71318">{{str_limit($crowdnew->tags,8,'')}}</font>{{$crowdnew->title}}</a></dd>
                           @endforeach
                        </dl>
                    </div>
                </div>
                <div class="left_two">
                    <h4>奶茶采购信息</h4>
                    <dl>
                        @foreach($caiguonews as $index=>$caiguonew)
                        <dd><span>{{date('Y-m-d',strtotime($caiguonew->created_at))}}</span><i class=" ye ">{{$index+1}}.</i><a href="/{{$caiguonew->arctype->real_path}}/{{$caiguonew->id}}.shtml" target="_blank" title="{{$caiguonew->title}}">{{$caiguonew->title}}</a></dd>
                        @endforeach
                    </dl>
                </div>
                <div class="left_two">
                    <h4>创业指导</h4>
                    <dl>
                        @foreach($chuangyenews as $index=>$chuangyenew)
                            @if($index==0)
                        <dt><a href="/{{$chuangyenew->arctype->real_path}}/{{$chuangyenew->id}}.shtml" title="{{$chuangyenew->title}}" target="_blank"><img src="{{$chuangyenew->litpic}}"></a><span>{{str_limit($chuangyenew->description,46,'')}}【<a href="/{{$chuangyenew->arctype->real_path}}/{{$chuangyenew->id}}.shtml" style="color:#D71318;" target="_blank">阅读</a>】</span></dt>
                        @else
                        <dd><span>{{date('Y-m-d',strtotime($chuangyenew->created_at))}}</span><a href="/{{$chuangyenew->arctype->real_path}}/{{$chuangyenew->id}}.shtml" target="_blank" title="{{$chuangyenew->title}}">{{$chuangyenew->title}}</a></dd>
                        @endif
                    @endforeach
                    </dl>
                </div>
            </div>
            <div class="cont5_right">
                <h2>奶茶配方大全</h2>
                <div class="right_con">
                    <dl>
                        @foreach($zhbrands as $nums=>$zhbrand)
                            @if($nums ==0)
                                <dt><a href="{{ $zhbrand->arctype->real_path}}/{{$zhbrand->id}}.shtml" title="{{$zhbrand->title}}" target="_blank"><img src="{{$zhbrand->litpic}}" alt="{{$zhbrand->title}}" style="height: 85px; overflow: hidden"></a></dt>
                            @endif
                                <dd><a href="{{ $zhbrand->arctype->real_path}}/{{$zhbrand->id}}.shtml" title="{{$zhbrand->title}}" target="_blank">{{$zhbrand->title}}</a></dd>
                    @endforeach
                    </dl>
                </div>
            </div>
        </div>
        </section>

        <div class="bn">
            <ul>
                <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',53)->value('typeid'))->value('real_path')}}/53.shtml" target="_blank"><img src="/reception/images/temp/bn3.jpg" /></a></li>
                <li><a href="/{{\App\AdminModel\Arctype::where('id',\App\AdminModel\Archive::where('id',35)->value('typeid'))->value('real_path')}}/35.shtml" target="_blank"><img src="/reception/images/temp/bn4.jpg" /></a></li>
            </ul>
        </div>

        <div class="friend_links">
            <span>友情链接：</span>
            @foreach($flinks as $flink)
            <a href="{{$flink->weburl}}" target="_blank">{{$flink->webname}}</a>
            @endforeach
        </div>

    </div>
@stop