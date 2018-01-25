@extends('mip.mip')
@section('title'){{$thistypeinfo->title}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('main_content')
    <div class="common_tit">
        <nav class="tit">@include('mip.position')</nav>
    </div>
    <div class="list_middle">
        <div class="text_centre">
            <ul>
                @foreach($pagelists as $pagelist)
                <li>
                    <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">
                        <div class="img_show"><mip-img src="{{$pagelist->litpic}}" class="img_list"></div>
                        <div class="cont">
                            <p class="tit_1">{{$pagelist->title}}</p>
                            <p class="info">{{$pagelist->description}}</p>
                        </div>
                    </a>
                </li>
               @endforeach
            </ul>
        </div>
        <div class="page">
            {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
        </div>
    </div>
@stop

