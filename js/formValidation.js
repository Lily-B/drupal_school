
var errorMessage;

function is_valid_form(){

    var firstNameField = document.getElementById('firstName');
    var lastNameField = document.getElementById('lastName');
    var emailField = document.getElementById('email');
    var passField = document.getElementById('pass');


    if(!is_valid_value_of(firstNameField)){
        change_border_to_red(firstNameField);
        show_error_message();
        errorMessage = "";
        return false;
    }else if(!is_valid_value_of(lastNameField)){
        change_border_to_green(firstNameField);
        change_border_to_red(lastNameField);
        show_error_message();
        errorMessage = "";
        return false;
    }else if(!is_valid_email(emailField.value)){
        change_border_to_green(firstNameField);
        change_border_to_green(lastNameField);
        change_border_to_red(emailField);
        show_error_message();
        errorMessage = "";
        return false;
    }else if(!is_valid_pass(passField.value)){
        change_border_to_green(firstNameField);
        change_border_to_green(lastNameField);
        change_border_to_green(emailField);
        change_border_to_red(passField);
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
        errorMessage = "Please enter a valid " + placeHolder + ".";
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
        errorMessage = "Please enter a valid email.";
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
    Check if the errorContainer already exists
     */
    if (document.getElementById('errorContainer')){
        var errDiv = document.getElementById('errorContainer');
        errDiv.innerHTML = errorMessage;
    } else{
    /*
     If not, create new div #errorConteiner
     */
        var newDiv = document.createElement('div');
        var fNameInput = document.getElementById('firstName');
        newDiv.id = 'errorContainer';
        newDiv.style = 'color : #ff0000; font-size : 15px';
        newDiv.innerHTML = errorMessage;
        form.insertBefore(newDiv, fNameInput);
    }
}

function change_border_to_red(input_field){
    input_field.style =
        'background-color: inherit;'+
        'color: #ffffff;'+
        'border: 1px solid #ff0000;'+
        'border-radius: 0;'+
        'margin: 15px 0;'+
        'display: inline-block;'+
        'height: 15px;'+
        'padding: 10px;';
    if (input_field.id == 'firstName'){
        input_field.style.width = '42%';
    }else if((input_field.id == 'lastName')){
        input_field.style.width = '42%';
        input_field.style.float = 'right';
    }else{
        input_field.style.width = '95%';
    }
}

function change_border_to_green(input_field){
    input_field.style =
        'background-color: inherit;'+
        'color: #ffffff;'+
        'border: 1px solid #1ab188;'+
        'border-radius: 0;'+
        'margin: 15px 0;'+
        'display: inline-block;'+
        'width: 95%;'+
        'height: 15px;'+
        'padding: 10px;';
    if (input_field.id == 'firstName'){
        input_field.style.width = '42%';
    }else if((input_field.id == 'lastName')){
        input_field.style.width = '42%';
        input_field.style.float = 'right';
    }else{
        input_field.style.width = '95%';
    }
}