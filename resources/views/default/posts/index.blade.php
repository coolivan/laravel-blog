
@extends("default.layout.home")

@section('title', 'Posts')

@section("content")
    <div class="post-list-box archive-body">
        <ul class="list-post">
            {{--<li class="item-year item item-title item-title-2">--}}
                {{--<a href="http://scarletsky.github.io/archives/2017" class="text-year">--}}
                    {{--2017--}}
                    {{--<i class="icon-ji"></i>--}}
                {{--</a>--}}
            {{--</li>--}}

            @foreach($posts as $post)

            <li class="item-post item">
                <span class="post-date">{{$post->created_at->format('m-d')}}</span>
{{--                {{$post->comments_count}}--}}
                <a class="post-title" href="/posts/{{$post->id}}">{{$post->title}}</a>
{{--                <p>{{str_limit($post->content,100,'...')}}</p>--}}

            </li>

            @endforeach

            {{--分页--}}
            {{--{{$post->links}}--}}

        </ul>
    </div>
@endsection




