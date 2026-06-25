<script>
function validateLogin() {

    let email = document.forms["loginForm"]["email"].value;
    let password = document.forms["loginForm"]["password"].value;

    if(email === ""){
        alert("Email is required");
        return false;
    }

    if(password === ""){
        alert("Password is required");
        return false;
    }

    return true;
}
</script>