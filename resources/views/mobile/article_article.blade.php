@extends('mobile.mobile')
@section('title') {{$thisarticleinfos->title}} @stop
@section('keywords') {{$thisarticleinfos->keywords}} @stop
@section('description')  {{$thisarticleinfos->description}} @stop
@section('main_content')
    <div class="list_middle">
        <div class="content_brand">
            <div class="content">
                <h1>{{$thisarticleinfos->title}}</h1>
                <small>时间：{{$thisarticleinfos->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;浏览量:{{$thisarticleinfos->click}}</small>
              {!! $thisarticleinfos->article->body !!}
            </div>
        </div>
    </div>
    @include('mobile.comments')
    <div class="index_news rela_news">
        <div class="common_tit">
            <a class="tit">相关文章</a>
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
            <a class="tit">最新零食新闻</a>
        </div>
        <div class="bd">
            <ul>
                @foreach($latesnews as $latesnew)
                    <li><span class="date">{{$latesnew->published_at}}</span><a class="txt" href="/{{$latesnew->arctype->real_path}}/{{$latesnew->id}}.shtml" title="{{$latesnew->title}}">{{$latesnew->title}} </a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <script type="application/ld+json">
    {
        "@context": "https://zhanzhang.baidu.com/contexts/cambrian.jsonld",
        "@id": "{{str_replace('www.','m.',env('APP_URL'))}}{{Request::getrequesturi()}}",
        "title": "{{$thisarticleinfos->title}} -21奶茶加盟网",
        "images": [

            "{{str_replace('www.','m.',$thisarticleinfos->litpic)}}"
            ],
        "description": "{{$thisarticleinfos->description}}",
        "pubDate": "{{str_replace(' ','T',$thisarticleinfos->created_at)}}"
    }
</script>
    <script src="//msite.baidu.com/sdk/c.js?appid=1554954769730759"></script>

@stop