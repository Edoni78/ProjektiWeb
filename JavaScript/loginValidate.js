function validateForm(){
    var name = document.getElementById('name').value;
    var surname = document.getElementById('surname').value;
    var password = document.getElementById('password').value;

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

    var regexpassword = /^[A-Z][\w\S]*\d{3}$/;
    if (!regexpassword.test(password)) {
        alert("Please enter a password that has 8 characters and contains at least 3 numbers");
        return false;
    }

    return true;
}