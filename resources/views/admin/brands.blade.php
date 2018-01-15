@extends('admin.layouts.admin_app')
@section('title')品牌分类列表@stop
@section('head')
    <style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">品牌分类列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width: 10px">#ID</th>
                            <th>品牌</th>
                            <th>类型</th>
                            <th>热度</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->id}}.</td>
                                <td>{{$data->brand}}</td>
                                <td>{{$data->type}}</td>
                                <td>{{$data->num}}</td>
                                <td style="text-align: center">
                                    @if($data->status)
                                        <span class="badge bg-green" style=" font-weight: normal;">已使用</span>
                                    @else
                                        <span class="badge bg-red" style="cursor: pointer; font-weight: normal;" id="status{{$data->id}}" onclick="statuschick('status{{$data->id}}',{{$data->id}})">未使用</span>
                                    @endif
                                </td>
                                <td><a href="/admin/branddatas/del/{{$data->id}}">删除</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {!! $datas->links() !!}
                </div>
            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->
    <!-- /.content -->
@stop

@section('libs')
    <script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });
        $(function () {
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
        });
        function statuschick(element,id) {
            $.ajax({
                //提交数据的类型 POST GET
                type:"POST",
                //提交的网址
                url:"/admin/brandstatus/"+id,
                //提交的数据
                data:{"id":id},
                //返回数据的格式
                datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                success:function (response, stutas, xhr) {
                    //$(".modal-s-m"+id+" .modal-body").html(response);
                    $('#'+element).text(response);
                    $('#'+element).removeClass( "bg-red" );
                    $('#'+element).addClass( "bg-green" );

                }
            });
        }
    </script>
@stop