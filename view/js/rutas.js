$(document).ready(function(){
  var iframe =  document.getElementById("iframe");
  var rutaProductos = "../views/view_productos.php",
      rutaAdministrar = "../views/view_administrar.php";
  $("#ruta_produtos").on("click", function(){
    iframe.setAttribute("src",rutaProductos);
  })
})
