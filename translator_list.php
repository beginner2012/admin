<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>作译者新增——Translator</title>
<meta name="description" content="">
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="assets/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="assets/css/amazeui.min.css" />
<link rel="stylesheet" href="assets/css/admin.css">
<link rel="stylesheet" href="assets/css/ImageSelect.css">
<link rel="stylesheet" href="assets/css/app.css">
<link rel="stylesheet" href="assets/css/chosen.css">
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
</head>

<body data-type="generalComponents">
<?php include "header.php";?>
<!-- content -->
<div class="tpl-page-container tpl-page-header-fixed">
    <!-- sidebar -->
    <?php include "sidebar.php";?>
    <!-- right -->
    <div class="tpl-content-wrapper translatorList">
        <div class="tpl-portlet-components">
            <div class="portlet-title">
                <h4 class="caption bodyColor bold"><span class="am-icon-code"></span> 表单</h4>
                <ol class="am-breadcrumb am-fr">
                  <li><a href="#" class="am-icon-home">首页</a></li>
                  <li><a href="#">分类</a></li>
                  <li class="am-active">内容</li>
                </ol>
            </div>
            <div class="tpl-block">
                <div class="am-g">
                    <div class="am-u-sm-12 am-u-md-6">
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <a type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                                <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-save"></span>推荐</button>
                                <a type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span>下载</a>
                                <a type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</a>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-3">
                        <div class="am-input-group am-input-group-sm">
                            <input type="text" class="am-form-field">
                            <span class="am-input-group-btn">
                            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
                          </span>
                        </div>
                    </div>
                </div>
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <form class="am-form">
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                    <tr>
                                        <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                        <th width="5%"class="table-id">ID</th>
                                        <th width="30%" class="table-title">作译者</th>
                                        <th width="20%"class="table-type">作译者头像</th>
                                        <th width="10%" class="table-review am-hide-sm-only">审核</th>
                                        <th width="15%"class="table-date am-hide-sm-only">修改日期</th>
                                        <th width="10%" class="table-set">操作管理</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>1</td>
                                        <td><a href="#">作译者</a></td>
                                        <td><img src="assets/img/32.jpg" alt="" width="70"></td>
                                        <td class="am-hide-sm-only">以审核</td>
                                        <td class="am-hide-sm-only">2018-9-4</td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>1</td>
                                        <td><a href="#">作译者</a></td>
                                        <td><img src="assets/img/32.jpg" alt="" width="70"></td>
                                        <td class="am-hide-sm-only">以审核</td>
                                        <td class="am-hide-sm-only">2018-9-4</td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>1</td>
                                        <td><a href="#">作译者</a></td>
                                        <td><img src="assets/img/32.jpg" alt="" width="70"></td>
                                        <td class="am-hide-sm-only">以审核</td>
                                        <td class="am-hide-sm-only">2018-9-4</td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>1</td>
                                        <td><a href="#">作译者</a></td>
                                        <td><img src="assets/img/32.jpg" alt="" width="70"></td>
                                        <td class="am-hide-sm-only">以审核</td>
                                        <td class="am-hide-sm-only">2018-9-4</td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="am-cf">

                                <div class="am-fr">
                                    <ul class="am-pagination tpl-pagination">
                                        <li class="am-disabled"><a href="#">«</a></li>
                                        <li class="am-active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<?php include "footer.php";?>

</body>
</html>
