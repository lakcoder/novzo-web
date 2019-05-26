// var want = $("#want");
//
// function stringvalue(i){
// 	return '<div>'
//           + '<div>'
//             +'<input type="text" name="book'+i+'" placeholder="* Enter a Book '+i+'">'
//           + '</div>'
//         +'</div>';
// }
//
// $(document).ready(function(){
// 	want.on("change", function(e){
//
// 		e.preventDefault();
// 		$(".temp").remove();
// 		// permanent.append("<div class='temp'></div>");
// 		for(var i=1; i<= want.val(); i++){
// 			permanentFinal.append(stringvalue(i));
// 		}
//
// 	});
// });

$("#want").change(function () {
    var wants = $(this).val();
    $("#wantArea").empty();
    // $("#wantArea").append('<div></div>');
    for (var i = 0; i < wants; i++){
      $("#wantArea").append('<input name="inputs[]" placeholder="Enter a Book" /><br/><br/>');
    }
});

$("#give").change(function () {
    var gives = $(this).val();
    $("#giveArea").empty();
    // $("#giveArea").append('<div class="hide"></div>');
    for (var i = 0; i < gives; i++){
      $("#giveArea").append('<input name="inputs[]" placeholder="Enter a Book" /><br/><br/>');
    }
});
