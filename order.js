$(document).ready(function(){
//click event

$('#order-button').click(function(event){

event.preventDefault();
//fetch data from form controls
var food=$('#food-name').val();
var units=$('#units').val();

//construct and send a post request,url,body,header

$.ajax({
 url:"api.food.com/order",
 type: "post",
 header:{
 	"api-key":"lkajhgfdserty"


 },
 data:{
 	"food-name":food-name,
 	"units":units
 }
success:function(data)
{
//process the data

},
error:function(error){
	alert(error);
}
});
});






});