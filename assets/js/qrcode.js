//二维码生成
$(function() {
  var prefix=$('.prefix').html();//名称前缀
  var suffix=$('.suffix').html();//名称后面补足
  var suffixW=parseFloat($('.suffix').width());//取后缀长度
  var inputVal = $('#user-id').val(prefix+suffix);  //调用文字容器
  var img = $('#doc-qrcode').attr('data-img');//调用图片
  qr = $('#doc-qrcode'); //生成容器

  function makeCode(text) {
    //默认参数
    qr.empty().qrcode({text,width:130,height:130, background: "#fff", foreground: "#000",src: img});
    condeTxt();
  };
  //文字生成
  function condeTxt(){
    var canvas = qr.find('canvas').get(0);
    var context = canvas.getContext("2d");
    canvas.style.letterSpacing =4 + "px";
    context.font = '12pt source';  //文字样式
    context.fillStyle = '#000';  //文字颜色
    context.letterSpacingText(prefix, 5, 155,5);
    context.beginPath();
    context.font = '12pt source';  //文字样式
    context.fillStyle = '#000';  //文字颜色
    context.letterSpacingText(suffix,136-suffixW, 155,4);
  };

  //初始生成
  //inputVal;
  makeCode(location.href+'/'+inputVal);
  condeTxt();

  //点击生成
  $('#qr').on('click', function() {
    makeCode(location.href+'/'+inputVal);
    condeTxt();
  });
  //聚焦生成
  $('#user-id').on('focusout', function() {
    makeCode(location.href+'/'+inputVal);
    condeTxt();
  });

  //单个下载
  $('#saveQrCode').click(function(){
      var canvas = $('#doc-qrcode').find("canvas").get(0);
          try {
          var blob = canvas.msToBlob();
          navigator.msSaveBlob(blob, qrcode.jpg);
      } catch (e) {
          var url = canvas.toDataURL('image/jpeg');
          $("#download").attr('href', url).get(0).click();
           
      }
      return false;
  })
})









