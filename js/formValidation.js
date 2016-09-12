
var errorMessage;

function is_valid_form(){

    var firstNameField = document.getElementById('firstName');
    var lastNameField = document.getElementById('lastName');
    var email = document.getElementById('email').value;
    var pass = document.getElementById('pass').value;


    if(!is_valid_value_of(firstNameField)){
        show_error_message();
        errorMessage = "";
        return false
    }else if(!is_valid_value_of(lastNameField)){
        show_error_message();
        errorMessage = "";
        return false;
    }else if(!is_valid_email(email)){
        show_error_message();
        errorMessage = "";
        return false;
    }else if(!is_valid_pass(pass)){
        show_error_message();
        errorMessage = "";
        return false;
    }
    return true;
}

/**
 * checks if the input value is longer then 1 char
 */
function is_valid_value_of(inputField) {
    var value = inputField.value;
    var placeHolder = inputField.getAttribute('placeholder');
    if (value == null || value.length < 2 ) {
        errorMessage = "Please enter valid " + placeHolder + ".";
        return false;
    }
    return true;
}
/*
Checks if the Email is valid
 */
function is_valid_email(email){
    var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (!re.test(email)){
        errorMessage = "Please enter valid email.";
        return false;
    }
    return true
}
/*
Check is pass longer than 6 chars
 */
function is_valid_pass(pass){
    if (pass == null || pass.length < 7 ) {
        errorMessage = "Please enter longer password.";
        return false;
    }
    return true;
}

function show_error_message(){
    var form = document.getElementById('signUp');
    /*
    Check if  errorContainer already exists
     */
    if (document.getElementById('errorContainer')){
        var errDiv = document.getElementById('errorContainer');
        errDiv.innerHTML = errorMessage;
    } else{
    /*
     If not create new div #errorConteiner
     */
        var newDiv = document.createElement('div');
        var fNameInput = document.getElementById('firstName');
        newDiv.id = 'errorContainer';
        newDiv.style = 'color : #ff0000; font-size : 15px';
        newDiv.innerHTML = errorMessage;
        form.insertBefore(newDiv, fNameInput);
    }
}