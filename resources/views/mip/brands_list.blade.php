@extends('mip.mip')
@section('title') {{$thistypeinfo->title}}@stop
@section('keywords') {{$thistypeinfo->keywords}} @stop
@section('description')  {{$thistypeinfo->description}}  @stop
@section('main_content')
    <div class="common_tit">
        <nav class="tit">@include('mip.position')</nav>
    </div>
    <div class="brand_list">
        <ul>
            @foreach($pagelists as $brand)
            <li>
                <div class="img_show"><a href="/{{$brand->arctype->real_path}}/{{$brand->id}}.shtml"><mip-img src="{{$brand->litpic}}" alt="{{$brand->article->brandname}}"/></a></div>
                <div class="cont">
                    <p class="tit"><a href="/{{$brand->arctype->real_path}}/{{$brand->id}}.shtml">{{$brand->article->brandname}}</a></p>
                    <p class="price">基本投资：<em>{{$brand->article->brandpay}}</em></p>
                    <p class="info">所在地区：{{$brand->article->brandorigin}}</p>
					<p class="desc">{{$brand->description}}</p>
                    <p class="btn"><a href="#" class="btn_ask">加盟咨询</a><a href="/{{$brand->arctype->real_path}}/{{$brand->id}}.shtml" class="btn_intro">品牌介绍</a></p>
                </div>
            </li>
           @endforeach
        </ul>

    </div>
	<div class="page">
        {!! $pagelists->links() !!}
	</div>
@stop