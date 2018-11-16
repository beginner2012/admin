$(function(){


});

//二维码生成
$(function() {
/*  var input = $('#user-id');
  var img = $('#doc-qrcode').attr('data-img');


  qr = $('#doc-qrcode');
  function makeCode(text) {
    qr.empty().qrcode({text,width:130,height:130, background: "#000", foreground: "#fff",src: img});
   
		var canvas = qr.find('canvas').get(0);
  	var context = canvas.getContext("2d");

		$(canvas).prop('height', 200);

  	context.font = '18pt Calibri';
    context.fillStyle = '#f00';
    context.fillText(input.val(), (canvas.width / 2) - 40, 120);
  }

  input.val();
  makeCode(location.href+'/'+input.val());

  //console.log(location.href+'/'+input.val())
  $('#doc-gen-qr').on('click', function() {
    makeCode(location.href+'/'+input.val());
  });

  input.on('focusout', function() {
    makeCode(location.href+'/'+input.val());
  });

  $('.qr-download').click(function(){
      var canvas = $('#doc-qrcode').find("canvas").get(0);
      console.log(canvas);
          try {
          var blob = canvas.msToBlob();
          navigator.msSaveBlob(blob, 'qrcode.jpg');
      } catch (e) {
          var url = canvas.toDataURL('image/jpeg');
          $("#download").attr('href', url).get(0).click();
      }
          return false;
  })*/




  function getQR() {
    $("#QRcodediv").empty().qrcode({
      width: 140,
      height: 140,
      text:'QRcode with letter inside',//data.qrcode,
      type: "中",
      content: 'QRcode with letter inside',
      imgWidth: 60,
      imgHeight: 60
    });
    $("#QRcodediv").show();
  }

  getQR();

  $('.qr-download').click(function(){
      var canvas = $('#QRcodediv').find("canvas").get(0);
      console.log(canvas);
          try {
          var blob = canvas.msToBlob();
          navigator.msSaveBlob(blob, 'qrcode.jpg');
      } catch (e) {
          var url = canvas.toDataURL('image/jpeg');
          $("#download").attr('href', url).get(0).click();
      }
          return false;
   })
});











//提示信息
(function($) {
  if ($.AMUI && $.AMUI.validator) {
    // 增加单个正则
    $.AMUI.validator.patterns.strong = /^[A-Za-z0-9]+$/;
  }
})(window.jQuery);
 $(function() {
   $('#form-tooltip').validator({
     onValid: function(validity) {
       $(validity.field).closest('.am-form-group').find('.am-alert').hide();
     },

     onInValid: function(validity) {
       var $field = $(validity.field);
       var $group = $field.closest('.am-form-group');
       var $alert = $group.find('.am-alert');
       // 使用自定义的提示信息 或 插件内置的提示信息
       var msg = $field.data('validationMessage') || this.getValidationMessage(validity);

       if (!$alert.length) {
         $alert = $('<div class="am-alert am-u-sm-10 formTip"></div>').hide().
           appendTo($group);
       }

       $alert.html(msg).show();
     }
   });
 });