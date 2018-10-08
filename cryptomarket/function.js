$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
/* Captcha Generation */
function generateCaptcha(){
    var chr1 = Math.ceil (Math.random() * 10) + '';
    var chr2 = Math.ceil (Math.random() * 10) + '';
    var chr3 = Math.ceil (Math.random() * 10) + '';

    captcha = chr1.toString() + chr2.toString() + chr3.toString();
    document.getElementById("captcha").value = captcha;
}

/* validating my modal form */
var only_name = "Adah123";
var only_email = "adanaza89@gmail.com";
var only_number = 08160188912;
function validateForm(){
    var valid_name = document.forms["formModal"]["usrname"].value;
    var valid_email = document.forms["formModal"]["email"].value;
    var valid_input = document.getElementById("inputCaptcha").value
    if (valid_name == only_name && valid_email == only_email && valid_input == captcha){
        window.location.replace ("https://coinmarketcap.com/");
    }else if (valid_name == "" || valid_email == "" || valid_number == ""){
        alert (" All fields must be filled out");
    }else if (valid_name == only_name && valid_email == only_email && valid_input !== captcha){
        alert ("Refresh Captcha")
    }
    else {
        alert ("Incorrect Name or Password")
    }
}
