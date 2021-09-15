$(document).ready(function(){




    $("#send").click(function(){

        var eemail = $("#email").val();
        var password = $("#password").val();
        
       
        if(eemail && pass){

            ajax({
                url : "php/login.php",
                method : "GET",
                data : {email= eemail, pass= password},
               contentType : "json"
               }).done(function(response){
                   console.log(response);
                   console.log("LOGIN existoso");
               }).fail(function (respone){ 

                 console.log("ERROR");
               });// Función que se ejecuta si algo ha ido mal

        }else{

            PNotify.notice({
                title: 'Campos Incompeltos',
                text: 'Favor de llenar los campos'
              });
        }
        
        });
 });