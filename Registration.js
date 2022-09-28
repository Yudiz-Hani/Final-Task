console.log("Hello");
function validation() {

    const arruser = [];
    const objuser = {};
    //store localstorage data
    const userArray = JSON.parse(localStorage.getItem('users'));
    
    //get value from user
    var user = document.getElementById('name1').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;
    var password = document.getElementById('password').value;
    var rbmale = document.getElementById('male').value;
    var rbfemale = document.getElementById('female').value;
    var dob = document.getElementById("dob").value;

    let gender;
    if (rbmale.checked || rbfemale.checked) {
        gender = (() => (male.checked ? 'Male' : 'Female'))();
    }

    //Regular Expressions
    var regexNumber = new RegExp(/^[6-9]\d{9}$/)
    var regexEmail = new RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/i)
    var regexPassword = new RegExp(/^[a-zA-Z]\w{3,14}$/)


    if (user == "" && email == "" && mobile == "" && password == "" && rbmale.checked != true && rbfemale.checked != true) {
        document.getElementById("sname").innerphp = "*Please enter Name";
        document.getElementById("semail").innerphp = "*Please enter Email";
        document.getElementById("smobile").innerphp = "*Please enter Mobile";
        document.getElementById("spassword").innerphp = "*Please enter Password";
        document.getElementById("sgender").innerphp = "*Please select atleast one option";

        return false
    }
    else if (!regexEmail.test(email)) {
        document.getElementById("semail").innerphp = "*Please enter Valid Email";
        //return false
    }
    else if (!regexNumber.test(mobile)) {
        document.getElementById("smobile").innerphp = "*Please enter mobile no. in valid form";
        //return false
    }
    else if (!regexPassword.test(password)) {
        document.getElementById("spassword").innerphp = "*Please enter valid password";
       // return false;
    }

    else{
        if (userArray != null) {
            for (let i = 0; i < userArray.length; i++) {
              if (email === userArray[i].email) {
                alert('User already exists');
                return false;
              }
            }
          }
          objuser.user = user;
          objuser.email = email;
          objuser.mobile = mobile;
          objuser.password = password;
          objuser.dob = dob;
          objuser.gender = gender;

          if (userArray == null) {
            arruser.push(objuser);
            localStorage.setItem('users', JSON.stringify(arruser));
          } else {
            userArray.push(objuser);
            localStorage.setItem('users', JSON.stringify(userArray));
          }
        alert(
            "Your account has been created successfully... Redirecting to Login"
          );
        window.location="login.php";
      }
    return true;
}