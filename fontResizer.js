$(document).ready(function(){

   $("#default").click(function(event){
     	event.preventDefault();
	$("body").css("font-size","10px");
	$.cookie("reload","10px");
   });

   $("#larger").click(function(event){
     	event.preventDefault();
	$("body").css("font-size","12px");
	$.cookie("reload","12px");
   });

   $("#largest").click(function(event){
     	event.preventDefault();
	$("body").css("font-size","14px");
	$.cookie("reload","14px");
   });

// Cookie
var reload = $.cookie("reload");

// Calling cookie
if(reload == "10px") {
	$("body").css("font-size","10px");
};

if(reload == "12px") {
	$("body").css("font-size","12px");
};

if(reload == "14px") {
	$("body").css("font-size","14px");
};
});
