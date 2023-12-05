function validateForm(){
    var name = document.getElementById('name').value;
    var surname = document.getElementById('surname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassowrd = document.getElementById('confirmPassowrd').value;

    var regexName = /^[a-2A-2\s] + $/;
    if(!regexName.test(name)){
        alert("Please enter a valid name");
        return false;
    }

    var regexSurname =  /^[a-2A-2\s] + $/;
    if(!regexSurname.test(surname)){
        alert("Please enter a valid surname");
        return false;
    }

    var regexEmail = /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
    if (!regexEmail.test(email)) {
        alert("Please enter a valid e-mail address");
    }


    return true;
}