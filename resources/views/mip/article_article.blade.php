@extends('mip.mip')
@section('title'){{$thisarticleinfos->title}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('main_content')
    <div class="common_tit">
        <nav class="tit">@include('mip.position')</nav>
    </div>
    <div class="list_middle">
        <div class="content_brand">
            <div class="content">
                <h1>{{$thisarticleinfos->title}}</h1>
                <small>时间：{{$thisarticleinfos->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;浏览量:{{$thisarticleinfos->click}}</small>
              {!! str_replace('<img','<mip-img',preg_replace("/style=.+?['|\"]/i",'',$thisarticleinfos->article->body)); !!}
            </div>
        </div>
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
