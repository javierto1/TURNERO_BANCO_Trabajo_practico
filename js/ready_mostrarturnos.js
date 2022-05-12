$(document).ready(function() {
 	 $("#resultado").load("./consulta.php");
   var refreshId = setInterval(function() {
      $("#resultado").load('./consulta.php?');
   }, 3000);
   $.ajaxSetup({ cache: false });
});