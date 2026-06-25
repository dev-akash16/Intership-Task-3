<script>
function validateRegister() {

    let name = document.forms["registerForm"]["name"].value.trim();
    let email = document.forms["registerForm"]["email"].value.trim();
    let password = document.forms["registerForm"]["password"].value;

    if(name.length < 3){
        alert("Name must be at least 3 characters.");
        return false;
    }

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(!emailPattern.test(email)){
        alert("Please enter a valid email.");
        return false;
    }

    if(password.length < 6){
        alert("Password must be at least 6 characters.");
        return false;
    }

    return true;
}
</script>