
$(function() {
    $(".button-signup > button").prop("disabled", true);
    $('#password-conf').on('blur', function() {
        console.log('checking');
        var pass = $('#password-conf').val();
        var pass_conf = $('#password').val();
        var error_target = $(this).parents(".form-group").get(0);
        if(pass == pass_conf && pass.length != 0) {
            $(error_target).addClass("has-success");
            $(".button-signup > button").prop("disabled", false);
            $(".button-signup > button").css("background","#e75f88");
            $(this).before('<p class="fa fa-check"></p>');
        }else {
            $(this).after('<p class="help-block">パスワードが異なります</p>');
            $(error_target).addClass("has-error");
            $(".button-signup > button").prop("disabled", true);
            console.log('disable');
        }
    });
    $('#password-conf').on('focus', function() {
        var error_target = $(this).parents(".form-group").get(0);
        $(this).nextAll('p.help-block').remove();
        $(error_target).removeClass('has-error');
        $(error_target).removeClass('has-success');
        if($(this).prev().hasClass('fa fa-check')) {
            $(this).prev().remove();
            $(".button-signup > button").prop("disabled", false);
            $(".button-signup > button").css("background","#e75f88");
            $(".button-signup > button").css("box-shadow","inset 0px -3px 0 0 rgba(0,0,0,0.08)");
        }
    })
});
