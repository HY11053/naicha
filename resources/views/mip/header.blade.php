@inject('headers',App\Header')
<div class="header">
    <p class="title"><mip-img src="/mobiles/images/logo.png" width="143" class="img" alt="零食加盟网"/></p>
    <div class="mip-nav-wrapper">
        <mip-nav-slidedown
                data-id="bs-navbar"
                class="mip-element-sidebar container"
                >
            <nav id="bs-navbar" class="navbar-collapse collapse navbar navbar-static-top">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">首页</a>
                    </li>
                    @foreach($headers->HeaderLists() as $real_path=>$header)
                        <li><a href="/{{$real_path}}" >{{$header}}</a></li>
                    @endforeach
                    <li class="navbar-wise-close">
                        <span id="navbar-wise-close-btn"></span>
                    </li>
                </ul>
            </nav>
        </mip-nav-slidedown>
    </div>
</div>
<div class="search">
    <mip-form url="http://mip.21yinpin.com/">
    <mip-input type="text" name="keyword" class="search_txt" maxlength="18" id="keyword" value="输入您要找的项目"></mip-form>
    <button type="submit" class="search_btn"></button>
</div>
<div id="focus" class="focus">
    <mip-carousel autoplay defer="5000"  layout="responsive"  width="620" height="290">
        <mip-img src="/mobiles/images/temp/bn1.jpg"></mip-img>
        <mip-img  src="/mobiles/images/temp/bn2.jpg"></mip-img>
        <mip-img src="/mobiles/images/temp/bn3.jpg"></mip-img>
        <mip-img src="/mobiles/images/temp/bn4.jpg"></mip-img>
    </mip-carousel>
    <div class="mip-carousel-indicator-wrapper">
        <div class="mip-carousel-indicatorDot" id="mip-carousel-example">
            <div class="mip-carousel-activeitem mip-carousel-indecator-item"></div>
            <div class="mip-carousel-indecator-item"></div>
            <div class="mip-carousel-indecator-item"></div>
        </div>
    </div>
</div>
