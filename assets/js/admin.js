$(function(){
  // 侧边导航下拉列表
    $('.tpl-left-nav-link-list').on('click', function() {
            $(this).siblings('.tpl-left-nav-sub-menu').slideToggle(80)
                .end()
                .find('.tpl-left-nav-more-ico').toggleClass('tpl-left-nav-more-ico-rotate');
        })
        // 头部导航隐藏菜单
    $('.tpl-header-nav-hover-ico').on('click', function() {
        $('.tpl-left-nav').toggle();
        $('.tpl-content-wrapper').toggleClass('tpl-content-wrapper-hover');
    })
});

//表单填写时提示信息
(function($) {
  if ($.AMUI && $.AMUI.validator) {
    // 增加单个正则
    $.AMUI.validator.patterns.strong = /^[A-Za-z0-9]+$/;
  }
})(window.jQuery);
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