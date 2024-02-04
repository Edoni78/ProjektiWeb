function validateForm(){
    var name = document.getElementById('name').value;
    var surname = document.getElementById('surname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassowrd = document.getElementById('confirmPassowrd').value;

    var regexName = /^[A-Z][a-z]{1,8}$/;
    if(!regexName.test(name)){
        alert("Please enter a valid name");
        return false;
    }

    var regexSurname =  /^[A-Z][a-z]{0,28}$/;
    if(!regexSurname.test(surname)){
        alert("Please enter a valid surname");
        return false;
    }

    var regexEmail = /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
    if (!regexEmail.test(email)) {
        alert("Please enter a valid e-mail address");
        return false;
    }

    var regexpassword = /^[A-Z][\w\S]*\d{3}$/;
    if (!regexpassword.test(password)) {
        alert("Please enter a password that has 8 characters and contains at least 3 numbers");
        return false;
    }

    var regexConfirmPassword = /^[A-Z][\w\S]*\d{3}$/;
    if (!regexConfirmPassword.test(confirmPassowrd)) {
        alert("Please enter a password that has 8 characters and contains at least 3 numbers");
        return false;
    }

    if (password !== confirmPassowrd) {
        alert("Passwords do not match");
        return false;
    }

    return true;
}