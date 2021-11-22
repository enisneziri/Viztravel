function SubmitMeth(){
        var email = document.getElementById("email").value.length;
        var password = document.getElementById("password").value.length;
        var Form1 = document.getElementById("form1");
        var FailedLogin = document.getElementById("FailedLogin");

        if(email == 0 && password == 0){
                Form1.style = "display: block";
               FailedLogin.style = "display: block";
        }else if(email && password !=0){
                var allSet = document.getElementById("AllSet");
                allSet.innerHTML = "Thank you for your submit.";
                allSet.style = "margin-top: 200px";
                Form1.style = "display: none";
        }
        
}

function ModalClose(){
        var FailedLogin = document.getElementById("FailedLogin");
        FailedLogin.style = "display: none";
}
 