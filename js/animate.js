var groups = 1;
$('#groups_but').click(function() {
  if(groups%2 == 0){
    $('#groups').css({"display":"block"});
  }else{
    $('#groups').css({"display":"none"});
  }
  groups++;
});

$("#lregister").click(function() {
  $('#register').css({"display":"block"});
  $("#register").animate({opacity: 1}, 1000);
  var a = $("#login").offset().top;
  $("html ,body").animate({ scrollTop: a},800);
  $('#login').css({"display":"none"});
  $("#login").animate({opacity: 0}, 1000);
});

$("#lforgot").click(function() {
  $('#forgot').css({"display":"block"});
  $("#forgot").animate({opacity: 1}, 1000);
  var b = $("#login").offset().top;
  $("html ,body").animate({ scrollTop: b},800);
  $('#login').css({"display":"none"});
  $("#login").animate({opacity: 0}, 1000);
});

$("#rlogin").click(function() {
  $('#login').css({"display":"block"});
  $("#login").animate({opacity: 1}, 1000);
  var c = $("#register").offset().top;
  $("html ,body").animate({ scrollTop: c},800);
  $('#register').css({"display":"none"});
  $("#register").animate({opacity: 0}, 1000);
});

$("#flogin").click(function() {
  $('#login').css({"display":"block"});
  $("#login").animate({opacity: 1}, 1000);
  var c = $("#forgot").offset().top;
  $("html ,body").animate({ scrollTop: c},800);
  $('#forgot').css({"display":"none"});
  $("#forgot").animate({opacity: 0}, 1000);
});
