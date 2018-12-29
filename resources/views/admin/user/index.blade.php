@extends("admin.layout")



@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">用户管理</h3>

                            <div class="box-tools">
                                <a href="/admin/users/create"><i class="fa fa-user-plus"></i> 新增</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>email</th>
                                    <th>manage</th>

                                </tr>

                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user['id']}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a href="/admin/users/{{$user->id}}/edit">修改</a> /
                                        <a href="/admin/users/{{$user->id}}/delete">删除</a>
                                    </td>

                                </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        {{--<div class="box-footer clearfix">--}}
                            {{--<div class="pagination pagination-sm no-margin pull-right">--}}
                                {{--分页--}}
                                {{--{{$users->links()}}--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
