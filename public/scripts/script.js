function validateForm()
{
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    var usernameRegex = /^[a-zA-Z0-9]{4,7}$/;
    if(!usernameRegex.test(username))
    {
        displayError("Invalid username");
        return false;
    }

    if(password.length<6)
    {
        displayError("Ïnvalid Password");
        return false;
    }
    return true;
}
function displayError(msg){
    var messageBox = document.getElementById("error");
    messageBox.innerHTML = msg;
}