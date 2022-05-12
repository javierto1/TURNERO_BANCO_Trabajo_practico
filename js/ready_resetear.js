	$(document).ready(function(){
	$("input[name='button']").click(function(){

		  var id_num_turno=$(this).attr('id');

		  $.ajax({
			  type:"GET",
			  url:"resetear_turnero.php",
			  data:{'id_num_turno': id_num_turno},
			  success:function(data){
				 $("#respuesta").html(data); 
			  }
		  });

	});
});

				






				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				