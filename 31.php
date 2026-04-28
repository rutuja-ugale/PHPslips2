<!DOCTYPE html>
<html>
<head>
    <title>Login Form Validation</title>

    <script>
        function validateForm() {
            var username = document.forms["myForm"]["uname"].value;
            var password = document.forms["myForm"]["pass"].value;

            if (username == "") {
                alert("Username cannot be empty");
                return false;
            }

            if (password.length < 6) {
                alert("Password must be at least 6 characters");
                return false;
            }

            alert("Login Successful");
            return true;
        }
    </script>
</head>

<body>

    <h2>Login Form</h2>

    <!-- onSubmit event -->
    <form name="myForm" onsubmit="return validateForm()">
        Username: <input type="text" name="uname"><br><br>
        Password: <input type="password" name="pass"><br><br>

        <input type="submit" value="Login">
    </form>

</body>
</html>