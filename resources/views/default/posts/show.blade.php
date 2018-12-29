@extends("default.layout.main")

@section('title', $post->title)


@section("content")


<div id="toc" class="toc-article">
    <strong class="toc-title">文章目录</strong>
    <ol class="toc">

    </ol>
</div>

<div class="content content-post CENTER">
    <article id="post-chasing-the-shiny-and-new-in-software" class="article article-type-post" itemprop="blogPost">
        <header class="article-header">
            <h1 class="post-title">{{$post->title }}</h1>

            <div class="article-meta">
                <span>   <i class="icon-calendar"></i>{{$post->created_at->format('Y-m-d') }}</span>

                <span class="article-author"><i class="icon-user"></i>Coolivan</span>

                {{--<span class="article-category"><i class="icon-list"></i><a class="article-category-link" href="/category/">post</a></span>--}}

                <span id="busuanzi_container_page_pv"> &nbsp<i class="fa fa-eye"></i> {{$post->click}}℃</span>


            </div>
        </header>

        <div class="article-content">

            {!! $post->content !!}

        </div>


    </article>


    <div class="box-prev-next clearfix">
        <a class="show pull-left" href="/posts/{{$prev_id}}">
            <i class="icon icon-angle-left"></i>
        </a>
        <a class="show pull-right" href="/posts/{{ $next_id }}">
            <i class="icon icon-angle-right"></i>
        </a>
    </div>


</div>


@endsection

