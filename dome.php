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
          <li dataImg="assets/img/user01.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/zdx001</a><span class="prefix">zdx</span><span class="suffix">001</span><div dataUrl="" class="zzz1"></div></li>
          <li dataImg="assets/img/user02.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/zdxs02</a><span class="prefix">zdxs</span><span class="suffix">02</span><div dataUrl="" class="zzz"></div></li>
          <li dataImg="assets/img/user03.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/dx0003</a><span class="prefix">dx</span><span class="suffix">0003</span><div dataUrl="" class="zzz"></div></li>
          <li dataImg="assets/img/user04.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/zx0004</a><span class="prefix">zx</span><span class="suffix">0004</span><div dataUrl="" class="zzz"></div></li>
          <li dataImg="assets/img/user05.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/zdxx05</a><span class="prefix">zdxx</span><span class="suffix">05</span><div dataUrl="" class="zzz"></div></li>
          <li dataImg="assets/img/user06.png"><a href="javascript">http://zyt.com/backstage/translator_list.php/zx0006</a><span class="prefix">zx</span><span class="suffix">0006</span><div dataUrl="" class="zzz"></div></li>
      </ul>
      <div class="zzz"></div>
      <a class="sc" href="javascript:void(0);">批量生成</a>
      <button class="plxz">批量下载</button>
      <a class="xz" href="javascript:void(0);" ></a>
    </div>
</div>


  <div class="aa" data-img="assets/img/user04.png"></div>
  <div class="aa" data-img="assets/img/user04.png"></div>
  <div class="aa" data-img="assets/img/user04.png"></div>
  <div class="aa" data-img="assets/img/user04.png"></div>



  <button onclick="packageImages()">packageImages</button><span id="status"></span>

<!-- footer -->
<?php include "footer.php";?>
<!-- 二维码加图片与文字 -->
<script src="assets/js/utf.js"></script>
<script src="assets/js/jquery.qrcode.js"></script>
<script src="assets/js/canvasSpac.js"></script>

<!-- 二维码批量下载 -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>


<script type="text/javascript">
    function packageImages(){
      $('#status').text('处理中。。。。。');
      var imgs = $('.qrcode li');
      var imgsSrc = [];
      var imgBase64 = [];
      var imageSuffix = [];//图片后缀
      var zip = new JSZip();
        zip.file("readme.txt", "案件详情资料\n");
        var img = zip.folder("images");
        

        
      for(var i=0;i<imgs.length;i++){
        var src = imgs[i].getAttribute("dataImg");
        var suffix = src.substring(src.lastIndexOf("."));
        imageSuffix.push(suffix);
        
         getBase64(imgs[i].getAttribute("dataImg"))
                .then(function(base64){
                  imgBase64.push(base64.substring(22));
                   
                      //console.log(base64);//处理成功打印在控制台
                },function(err){
                      console.log(err);//打印异常信息
                }); 
               
      }
      function tt(){
        setTimeout(function(){
          if(imgs.length == imgBase64.length){
            for(var i=0;i<imgs.length;i++){
              img.file(i+imageSuffix[i], imgBase64[i], {base64: true});
            }
            zip.generateAsync({type:"blob"}).then(function(content) {
                  // see FileSaver.js
                  saveAs(content, "images.zip");
              });
              $('#status').text('处理完成。。。。。');
              
          }else{
            //console.log('imgs.length:'+imgs.length+',imgBase64.length:'+imgBase64.length);
            $('#status').text('已完成：'+imgBase64.length+'/'+imgs.length);
            tt();
          }
        },100);
        
      }
      tt();
    }
    //传入图片路径，返回base64
    function getBase64(img){
        function getBase64Image(img,width,height) {//width、height调用时传入具体像素值，控制大小 ,不传则默认图像大小
          var canvas = document.createElement("canvas");
          canvas.width = width ? width : img.width;
          canvas.height = height ? height : img.height;
 
          var ctx = canvas.getContext("2d");
          ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
          var dataURL = canvas.toDataURL();
          return dataURL;
        }
        var image = new Image();
        console.log()
        image.crossOrigin = 'Anonymous';
        image.src = img;
        var deferred=$.Deferred();
        if(img){
          image.onload =function (){
            deferred.resolve(getBase64Image(image));//将base64传给done上传处理
          }
          return deferred.promise();//问题要让onload完成后再return sessionStorage['imgTest']
        }
      }


      
    //二维码批量生成
    $(function() {
      $('.sc').on('click', function() {
        $('.qrcode li').each(function(){
          makeCode($(this).find('a').text());
        });
      });

    function makeCode(text) {
      //默认参数
        $('.qrcode li').each(function(){
          $(this).find('div').empty().qrcode({text,width:130,height:130, background: "#fff", foreground: "#000",src:$(this).attr('dataImg')});
          var suffixW=parseFloat($(this).find('.suffix').width());
          var canvas = $(this).find('canvas').get(0);
          var dataURL = canvas.toDataURL();
          var context = canvas.getContext("2d");
          //$(this).find('div').attr('dataUrl',dataURL)
          console.log(dataURL)
          canvas.style.letterSpacing =4 + "px";
          context.font = '12pt source';  //文字样式
          context.fillStyle = '#000';  //文字颜色
          context.letterSpacingText($(this).find('.prefix').html(), 5, 155,4);
          context.beginPath();
          context.font = '12pt source';  //文字样式
          context.fillStyle = '#000';  //文字颜色
          context.letterSpacingText($(this).find('.suffix').html(),136-suffixW, 155,4);
        })
    };
})

</script>
</body>
</html>
