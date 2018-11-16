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
</head>

<body data-type="generalComponents">
<?php include "header.php";?>
<!-- content -->
<div class="tpl-page-container tpl-page-header-fixed">
  <!-- sidebar -->
  <?php include "sidebar.php";?>
  <!-- right -->
  <div class="tpl-content-wrapper translator">
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
        <div class="am-g tpl-amazeui-form">
          <form  class="am-form am-form-horizontal" id="form-tooltip" action="" >
            <div class="am-u-md-12 am-u-lg-2 am-fr translatorR">
              <div class="avatar"  id="up-img-touch" >
                  <img  alt="点击图片上传" src="assets/img/user03.png" width="150">
                  <span class="am-btn am-btn-default am-btn-sm btn">
                  <i class="am-icon-cloud-upload"></i> 头像上传</span>
              </div>
              <!--头像上传框-->
              <?php include "avatar.php";?>
              <div class="up-img-qrcode">
                  <div id="doc-qrcode" data-img="assets/img/user03.png"></div>
                  <a id="download" download="assets/img/user03.png"></a>
                  <a id="saveQrCode" class="am-btn am-btn-default am-btn-sm btn"><i class="am-icon-arrow-down"></i> 下载</a>
              </div>
            </div>
            <div class="am-u-md-12 am-u-lg-10">
              <div class="am-form-group">
                <label for="user-id" class="am-u-md-2 am-u-sm-12 am-form-label" >统一资源编号</label>
                <div class="am-u-md-10 am-u-sm-12">
                    <input type="text" id="user-id" name='userId' placeholder="统一资源编号" minlength="3" maxlength="6" class="js-pattern-strong"  value="" data-validation-message="请输入3-6位数字或字母" required>
                    <span class="prefix">szx</span><span class="suffix">110</span>
                </div>
              </div>
              <div class="am-form-group">
                <label for="userName" class="am-u-md-2 am-u-sm-12 am-form-label">姓名</label>
                <div class="am-u-md-10 am-u-sm-12">
                    <input type="text" id="userName" name='userName' placeholder="姓名" minlength="3" required>
                </div>
              </div>
              <div class="am-form-group">
                <label for="user-unit" class="am-u-md-2 am-u-sm-12 am-form-label">单位</label>
                <div class="am-u-md-10 am-u-sm-12">
                    <select class="my-select " name="userUnit">
                     <option value=" Adnan Sagar" data-img-src="assets/img/a5.png">Adnan Sagar</option>
                     <option value="Rena Cugelman" selected="selected" data-img-src="assets/img/a5.png">Rena Cugelman</option>
                     <option value="Tavis Lochhead" data-img-src="assets/img/a5.png">Tavis Lochhead</option>
                     <option value="Brain Cugelman" data-img-src="assets/img/a5.png">Brain Cugelman</option>
                    </select>
                </div>
              </div>
              <div class="am-form-group">
                <label for="user-phone" class="am-u-md-2 am-u-sm-12 am-form-label">简介</label>
                <div class="am-u-md-10 am-u-sm-12">
                    <textarea name="description" placeholder="简介"></textarea>
                </div>
              </div>
              <div class="am-form-group">
                <label for="user-phone" class="am-u-md-2 am-u-sm-12 am-form-label">相关图书</label>
                <div id="relative_book" class="am-u-md-10 am-u-sm-12 ">
                  <select  multiple="multiple" class="my-select">
                    <option value="高博" data-img-src="assets/img/user01.png">高博</option>
                    <option value="沈逸超" data-img-src="assets/img/user02.png">沈逸超</option>
                    <option value="董飞" data-img-src="assets/img/user03.png" selected="selected">董飞</option>
                    <option value="郑晔" data-img-src="assets/img/user01.png">郑晔</option>
                    <option value="王珏" data-img-src="assets/img/user02.png">王珏</option>
                    <option value="Lochhead" data-img-src="assets/img/user03.png" selected="selected">Tavis Lochhead</option>
                  </select>
                </div>
              </div>
              <div class="am-form-group">
                <label for="user-phone" class="am-u-md-2 am-u-sm-12 am-form-label" >相关专栏</label>
                <div id="relative_column" class="am-u-md-10 am-u-sm-12">
                  <select  multiple="multiple" class="my-select">
                    <option value="goole" data-img-src="assets/img/a1.png">goole</option>
                    <option value="baidu" data-img-src="assets/img/a1.png">baidu</option>
                    <option value="Alibaba" data-img-src="assets/img/a2.png" selected="selected">Alibaba</option>
                    <option value="goole1" data-img-src="assets/img/a3.png">goole1</option>
                    <option value="Alibaba2" data-img-src="assets/img/a2.png">Alibaba2</option>
                  </select>
                </div>
              </div>
              <div class="am-form-group">
                <label for="user-phone" class="am-u-md-2 am-u-sm-12 am-form-label">相关内容</label>
                <div id="relative_con" class="am-u-md-10 am-u-sm-12">
                  <select  multiple="multiple" class="my-select">
                    <option value="goole" data-img-src="assets/img/a1.png">goole</option>
                    <option value="baidu" data-img-src="assets/img/a1.png">baidu</option>
                    <option value="Alibaba" data-img-src="assets/img/a2.png" selected="selected">Alibaba</option>
                    <option value="goole1" data-img-src="assets/img/a3.png">goole1</option>
                    <option value="Alibaba2" data-img-src="assets/img/a1.png">Alibaba2</option>
                  </select>
                </div>
              </div>
              <div class="am-form-group">
                <label for="user-intro" class="am-u-md-2 am-u-sm-12 am-form-label">描述</label>
                <div class="am-u-md-10 am-u-sm-12">
                    <textarea name="editor1"></textarea>
                </div>
              </div>
              <div class="am-form-group">
                <div class="am-u-md-10 am-u-sm-12 am-u-md-push-2">
                  <button type="submit" class="am-btn am-btn-primary" id="qr" >确定</button>
                  <button type="reset" class="am-btn am-btn-danger">取消</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<?php include "footer.php";?>
<!-- 二维码加图片 -->
<script src="assets/js/utf.js"></script>
<script src="assets/js/jquery.qrcode.js"></script>
<script src="assets/js/canvasSpac.js"></script>
<script src="assets/js/qrcode.js"></script>
<!-- 下拉加图片 -->
<script src="assets/js/chosen.js"></script>
<script src="assets/js/ImageSelect.jquery.js" type="text/javascript"></script>
<!-- 拖拽 -->
<script src="assets/js/Sortable.js"></script>
<!-- editor -->
<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace( 'editor1' );$(".my-select").chosen();
   //下拉拖拽
   var book = document.getElementById('relative_book');
   var a=book.getElementsByTagName('ul')[0];
   var sortable = Sortable.create(a);

   var column = document.getElementById('relative_column');
   var b=column.getElementsByTagName('ul')[0];
   var sortable = Sortable.create(b);

   var con = document.getElementById('relative_con');
   var c=con.getElementsByTagName('ul')[0];
   var sortable = Sortable.create(c);
</script>
</body>
</html>
