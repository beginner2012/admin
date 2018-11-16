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
    <div class="tpl-content-wrapper translator" style="background:#fff;padding:20px;margin-left:260px;">
      <ul class="qrcode">
          <li id="doc-qrcode" dataImg="assets/img/user01.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/zdx001</a><span class="prefix">zdx</span><span class="suffix">001</span><div dataUrl="" class="zzz1"></div></li>
          <li dataImg="assets/img/user02.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/zdxs02</a><span class="prefix">zdxs</span><span class="suffix">02</span><div dataUrl="" class="zzz"></div></li>
          <li dataImg="assets/img/user03.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/dx0003</a><span class="prefix">dx</span><span class="suffix">0003</span><div dataUrl="" class="zzz"></div></li>
          <li dataImg="assets/img/user04.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/zx0004</a><span class="prefix">zx</span><span class="suffix">0004</span><div dataUrl="" class="zzz"></div></li>
          <li dataImg="assets/img/user05.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/zdxx05</a><span class="prefix">zdxx</span><span class="suffix">05</span><div dataUrl="" class="zzz"></div></li>
          <li dataImg="assets/img/user06.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/zx0006</a><span class="prefix">zx</span><span class="suffix">0006</span><div dataUrl="" class="zzz"></div></li>
      </ul>

      <button class="batch">批量生成</button>
      <button class="batchDown"  onclick="packageImages()">批量下载</button>
     <!--  <button class="single" >单个生成</button> -->
      <button class="oneDown" >单个下载</button><a id="oneDown" download="assets/img/user03.png"></a>
    </div>
</div>

<!--   <button onclick="packageImages()">packageImages</button><span id="status"></span>
<a id="download" download="assets/img/user03.png"></a>
<a id="saveQrCode" class="am-btn am-btn-default am-btn-sm btn"><i class="am-icon-arrow-down"></i> 单个下载</a>
footer -->
<?php include "footer.php";?>
<!-- 二维码加图片与文字 -->
<script src="assets/js/utf.js"></script>
<script src="assets/js/jquery.qrcode.js"></script>
<script src="assets/js/canvasSpac.js"></script>

<!-- 二维码批量下载 -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>


<script type="text/javascript">
$(function() {
  //点击批量生成
  $('.batch').on('click', function() {
    $('.qrcode li').each(function(){
      makeCode($(this).find('a').text());
    });
  });
  //单个生成
  $('.single').on('click', function() {
    makeCode($(this).find('a').text());
  });
})
//批量生成默认参数
function makeCode(text) {
  $('.qrcode li').each(function(){
    $(this).find('div').empty().qrcode({text,width:130,height:130, background: "#fff", foreground: "#000",src:$(this).attr('dataImg')});
  //增加文字
    var suffixW=parseFloat($(this).find('.suffix').width());
    var canvas = $(this).find('canvas').get(0);
    var context = canvas.getContext("2d");   
    canvas.style.letterSpacing =4 + "px";
    context.font = '12pt source';  //文字样式
    context.fillStyle = '#000';  //文字颜色
    context.letterSpacingText($(this).find('.prefix').html(), 5, 155,4);//左边文字
    context.letterSpacingText($(this).find('.suffix').html(),136-suffixW, 155,4);//右边文字
  })
};
//二维码批量打包下载
function packageImages(){
  var imgs = $('.qrcode li');
  var imgBase64=[];//cavnas转为base64数
  $('.qrcode li').each(function(){
    canvas = $(this).find('canvas').get(0);
    imgBase64.push(canvas.toDataURL('image/jpeg', [0.0, 1.0]).split(',')[1]);//cavnas转为base64 并去掉URL的前导部分
    //console.log(imgBase64)
  })
  var zip = new JSZip();
    zip.file("readme.txt", "二维码\n");//介绍.txt文本
    var img = zip.folder("images");
    for(var i=0;i<imgs.length;i++){
      img.file(i+'.jpg', imgBase64[i], {base64: true});
    }
    zip.generateAsync({type:"blob"}).then(function(content) {
        // see FileSaver.js
        saveAs(content, "qrcode.zip");
    });
}
//单个图片下载
$('.oneDown').click(function(){
    var canvas = $('#doc-qrcode').find("canvas").get(0);
        try {
        var blob = canvas.msToBlob();
        navigator.msSaveBlob(blob, qrcode.jpg);
    } catch (e) {
        var url = canvas.toDataURL('image/jpeg');
        $("#oneDown").attr('href', url).get(0).click();
    }
    return false;
})
</script>
</body>
</html>
