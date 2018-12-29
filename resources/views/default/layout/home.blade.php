@include("default.layout.header")

<div class="content content-archive">
    <div class="page-header">

        <div class="breadcrumb">
            <div class="location">博客</div>
            <i class="icon-location"></i>
        </div>
        <div class="toolbox">
            <a class="toolbox-entry" href="/posts">
                <span class="toolbox-entry-text">主页</span>
                <i class="icon-angle-down"></i>
                <i class="icon-home"></i>
            </a>
            @include("default.layout.menu")
        </div>
        <div class="box-blog-info">
            <a class="avatar" href="http://scarletsky.github.io/">
                <img src="/images/avatar.jpg" alt="">
            </a>
            <div class="info">
                <h3 class="name" style="font-family: calligraffittiregular">
                    Coolivan
                </h3>
                <div class="slogan">
                    Follow your heart, Live better
                </div>
            </div>
        </div>

    </div>

    @yield("content")

</div>


@include("default.layout.footer")
