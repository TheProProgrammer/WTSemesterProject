function validateForm() {
    var email = document.getElementById("email").value;
    var fullname = document.getElementById("fullname").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var pfp = document.getElementById("pfp").value;
    var password = document.getElementById("password").value;

    if (email.trim() === "" || fullname.trim() === "" || phone.trim() === "" || address.trim() === "" || pfp.trim() === "" || password.trim() === "") {
        document.getElementById("error").innerText = "All fields are required";
        return false;
    }

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        document.getElementById("error").innerText = "Invalid email address";
        return false;
    }

    var passwordRegex = /^.{8,}$/;
    if (!passwordRegex.test(password)) {
        document.getElementById("error").innerText = "Password must be at least 8 characters long";
        return false;
    }
    return true;
}