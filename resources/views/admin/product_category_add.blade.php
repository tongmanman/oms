<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
    <link href="static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="static/h-ui.admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
    <link href="lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script><![endif]-->
    <title>添加产品分类</title>
</head>

<body>
    <div class="pd-20">
        <form action="" method="post" class="form form-horizontal" id="product_category_add">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>上级分类：</label>
                <div class="formControls col-5">
                    <select class="select-box" name="PARENTID" id="PARENTID">
                        <option value="0">无</option>
                        <option value="2">vertical</option>
                    </select>
                </div>

            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类名称：</label>
                <div class="formControls col-5">
                    <input type="text" class="input-text" value="" placeholder="" id="NAME" name="NAME">
                </div>

            </div>
            <div class="row cl">
                <div class="col-9 col-offset-2">
                    <input class="btn btn-primary radius" id="submitForm" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                </div>
            </div>
        </form>
    </div>

    <div id="modal-demo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content radius">
                <div class="modal-header">
                    <h3 class="modal-title">提示</h3>
                    <a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
                </div>
                <div class="modal-body">
                    <p id="modal_content"></p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                </div>
            </div>
        </div>
    </div>
    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="static/h-ui/js/H-ui.js"></script>
    <script type="text/javascript" src="static/h-ui.admin/js/H-ui.admin.page.js"></script>
    <!--/_footer /作为公共模版分离出去-->

    <script type="text/javascript">
        $("#submitForm").click(function() {
            $.ajax({
                url: "/api/admin/ProductCategory",
                type: "post",
                data: {
                    PARENTID: $('#PARENTID').val(),
                    NAME: $('#NAME').val()
                },
                success: function(data) {
                    if (String(data.CODE).startsWith('2')) {
                        location.href = "{{url('admin/product_category')}}";
                    } else {
                        $('#modal_content').text(data.MESSAGE);
                        $("#modal-demo").modal("show")
                    }
                }
            });
        });
    </script>
</body>

</html>