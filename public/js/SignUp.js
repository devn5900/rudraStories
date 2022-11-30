function singup(){
    let Uname = document.getElementById("Uname").Value;
    let email = document.getElementById("email").Value;
    let phone = document.getElementById("phone").Value;
    let pass = document.getElementById("pass").Value;
    let cpass = document.getElementById("cpass").Value;
    const xhr=new XMLHttpRequest();


    xhr.open("POST","/loginSingup/signUp.php",true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload=function(){
        console.log(this.responseText);
    }

    xhr.send(Uname,email,phone,pass,cpass);
}