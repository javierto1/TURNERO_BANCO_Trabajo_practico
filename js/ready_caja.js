	function abrir (){

		
		$(".divs").slideToggle();
		$(".divs1").slideToggle();
						};
	$(document).ready(function(){
	$("input[name='button']").click(function(){

		  var caja=$(this).attr('id');

		  $.ajax({
			  type:"GET",
			  url:"pagina_ajax_caja.php",
			  data:{'caja': caja},
			  success:function(data){
				 $("#respuesta").html(data); 
			  }
		  });

	});
});
