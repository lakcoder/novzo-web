var groups = 1;
$('#groups_but').click(function() {
  if(groups%2 == 0){
    $('#groups').css({"display":"block"});
  }else{
    $('#groups').css({"display":"none"});
  }
  groups++;
});
