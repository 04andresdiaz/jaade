$(document).ready(function(){
  $("#btologin").on("click", function(){
  var  user = $("#user").val(),
       pass = $("#pass").val(),
       rol = document.getElementById("rol").value;
    if (user == "" || pass == "" || rol == "") {
      $("#mensaje").slideDown(400).html("Recuerda No dejar ningun Campo vacio");
    }else {
    $.ajax({
      type: "POST",
      url: "controller/login_controller.php",
      data: "usuario="+user+"&contrasena="+pass+"&rol="+rol,
      success: function(res){
        if (res == "1") {
          location.href = 'view/views/Inicio_view.php';
        }else if(res == "2"){
          $("#mensaje").slideDown(400).html("Error: Usuario No Registrado, O el rol no coincide ");
        }
      }
    })
    }
  });
  $("#user, #pass").bind('blur keyup', function(){
    if ($(this).val() != "") {
      $("#mensaje").slideUp(400);
    }
  })
});
