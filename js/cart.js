/*scroll to top*/

$(document).ready(function(){
	$('.add-to-cart').click(function(event){
		 event.preventDefault(); 
		 console.log(this.id);
		 $.ajax({
			 type: "POST",
			 url: 'addToCart',
			 data: {id:this.id},
			 success: function(){
				 	alert("Product added successfully.");
			 }
			 });
	});
	
});
