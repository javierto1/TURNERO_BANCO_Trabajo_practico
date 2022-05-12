	function cerrar (){


		$(".divs").slideToggle();
		$(".divs1").slideToggle();
						};
	$(document).ready(function(){
	$("input[name='hola']").click(function(){

		  var caja=$(this).attr('id');

		  $.ajax({
			  type:"GET",
			  url:"pagina_ajax_cerrar_caja.php",
			  data:{'caja': caja},
			  success:function(data){
				 $("#respuesta1").html(data);
			
			  }
		  });

	});
});
