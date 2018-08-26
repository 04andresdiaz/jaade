$(document).ready(function(){
  $("#btologin").on("click", function(){
  var  user = $("#user").val(),
       pass = $("#pass").val();
    if (user == "" || pass == "") {
      $("#mensaje").slideDown(400).html("Recuerda No dejar ningun Campo vacio");
    };
    $.ajax({
      type: "POST",
      url: "controller/login_controller.php",
      data: "usuario="+user+"&contrasena="+pass,
      success: function(res){
        if (res == "1") {
          location.href = 'view/views/Inicio_view.php';
        }else{
          $("#mensaje").slideDown(400).html("Error: Usuario No Registrado");
        }
      }
    })
  });
  $("#user, #pass").bind('blur keyup', function(){
    if ($(this).val() != "") {
      $("#mensaje").slideUp(400);
    }
  })
});
