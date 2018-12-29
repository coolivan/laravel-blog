@include("default.layout.header")

<div class="post-header CENTER">

    <div class="toolbox">
        <a class="toolbox-entry" href="/posts">
            <span class="toolbox-entry-text">主页</span>
            <i class="icon-angle-down"></i>
            <i class="icon-home"></i>
        </a>

        @include("default.layout.menu")

    </div>

</div>

@yield("content")

@include("default.layout.footer")
