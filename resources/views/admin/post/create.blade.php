@extends("admin.layout")



@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">

            <div class="row">

                <div class="col-xs-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">新增文章</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="/admin/posts/store" method="post">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label for="inputEmail3" class="control-label">标题</label>
                                    </div>

                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Full name" name="title">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label for="inputEmail3" class="control-label">内容</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <div id="editor"></div>
                                        <textarea class="form-control hide" id="content" name="content" rows="10"></textarea>
                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right">Publish</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
