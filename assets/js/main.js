$("#registerToggle").click(function(){
    $("#togglePoint").animate({left: '100px'}, 350);
    $("#form-login").hide();
    $("#form-register").show();
});
$("#loginToggle").click(function(){
    $("#togglePoint").animate({left: '0px'}, 350);
    $("#form-register").hide();
    $("#form-login").show();
});