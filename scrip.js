var login = document.getElementById("email");
var pass = document.getElementById("password"); 
var msg_error = document.getElementById("error");

function testLogin (){
    if(login.value == "layediaw@gmail.com" && pass.value =="passer"){
        //window.location.replace("./compte/compte.html");
        window.location.assign('./liste.php')
       // alert("you are log in successfully")
    }else{
        if((login.value.trim() == "") || pass.value.trim() ==""){
            msg_error.textContent = "veillez remplir tous les champs";
            msg_error.style.background = "red";
        }else{
            msg_error.textContent = "email ou password incorect";
            msg_error.style.background = "red";
        }
    }
}
function deconnexion(){
    var conf = confirm("voulez vous quitter ?")
    if(conf == true){
      window.location.replace("./index.html")
    }else{
      event.preventDefault();
    }
}
