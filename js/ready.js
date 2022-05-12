	$(document).ready(function(){
	$("input[name='button']").click(function(){

		  var letra=$(this).attr('id');

		  $.ajax({
			  type:"GET",
			  url:"pagina_ajax.php",
			  data:{'letra': letra},
			  success:function(data){
				 $("#respuesta").html(data); 
			  }
		  });

	});
});
