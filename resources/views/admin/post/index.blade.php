@extends("admin.layout")



@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">文章管理</h3>

                            <div class="box-tools">
                                <a href="/admin/posts/create"><i class="fa fa-user-plus"></i> 新增</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>title</th>
                                    <th>click</th>
                                    <th>date</th>
                                    <th>status</th>
                                    <th>manage</th>
                                </tr>

                                @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td><a href="/posts/{{$post->id}}" target="_blank">{{$post->title}}</a></td>
                                    <td>{{$post->click}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td><input class="post-status" type="checkbox" data-id="{{$post->id}}" @if($post->status) checked @endif></td>
                                    <td>
                                        <a href="/admin/posts/{{$post->id}}/edit">编辑</a> /
                                        <a href="/admin/posts/{{$post->id}}/delete">删除</a>
                                    </td>

                                </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <div class="pagination pagination-sm no-margin pull-right">
                                {{--分页--}}
                                {{$posts->links()}}
                            </div>

                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
