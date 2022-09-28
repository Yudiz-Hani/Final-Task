function validation() {
    console.log("Hello");

    var username = document.getElementById("uname").value;
    var password = document.getElementById("pass").value;

    var regexNumber = new RegExp(/^[6-9]\d{9}$/)
    var regexEmail = new RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/i)

    if (username == "" && password == "") {
        alert("Username or password can't be empty ");
        return false;
    }
    
    else if (!regexEmail.test(username) && !regexNumber.test(username)) {
        alert("Please enter in valid format");
        return false;
    }
    else{
    console.log("hello");
    localStorage.setItem("name1", username);
    localStorage.setItem("password1", password);
    window.location = "Home.php";
    console.log(localStorage.getItem("name1"));
    return true;
    }
}