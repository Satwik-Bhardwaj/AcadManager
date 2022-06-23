<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/login_des.css" rel="stylesheet"></link>
</head>

<body>
    <?php
            if(isset($_POST['RegisterStudent'])){
                // servername => localhost
                // username => root
                // password => empty
                // database name => staff
                $conn = mysqli_connect("localhost", "root", "", "studentmanagement");

                // Check connection
                if($conn === false){
                    die("ERROR: Could not connect. "
                        . mysqli_connect_error());
                }

                // Taking all values from the form data(input)
                $user_id = $_REQUEST['user_id'];
                $email_id = $_REQUEST['email_id'];
                $password = $_REQUEST['password'];

                // Performing insert query execution
                // here our table name is college
                $sqltable = "INSERT INTO registration VALUES (
                                                    '$user_id', 
                                                    '$email_id',
                                                    '$password');";
                
                mysqli_query($conn, $sqltable);

                // Close connection
                mysqli_close($conn);
            }
	    ?>
    <div class="mattress">
        <div class="log_card">
            <div class="top_bar">
                <!-- <div id="btn"></div> -->
                <button type="button" class="toggle-btn" id="login_btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" id="reg_btn" onclick="register()">Register</button>
            </div>
            <form id="log_in" class="input-group">
                <div class="input-group-sub">
                    <input type="text" class="input-field" placeholder="user id" required>
                    <input type="password" class="input-field" placeholder="Password" required>
                    <div class="rem-pass-agree-state">
                        <input type="checkbox" class="check-box"><label>Remember Password</label>
                    </div>
                    <button type="submit" class="submit-button">Log In</button>
                </div>
            </form>
            <form id="register" class="input-group" method="post" action="">
                <div class="input-group-sub">
                    <input type="text" class="input-field" placeholder="User Id" name="user_id" required>
                    <input type="text" class="input-field" placeholder="Email Id" name="email_id" required>
                    <input type="password" class="input-field" placeholder="Password" name="password" required>
                    <div class="rem-pass-agree-state">
                        <input type="checkbox" class="check-box"><label> I agree to the terms & conditions</label>
                    </div>
                    <button type="submit" class="submit-button" name="RegisterStudent">Register</button>
                </div>
            </form>

        </div>
    </div>
    <script>
        var log_in = document.getElementById("log_in");
        var reg = document.getElementById("register");
        var login_btn = document.getElementById("login_btn");
        var reg_btn = document.getElementById("reg_btn");

        function register() {
            log_in.style.left = "-450px";
            reg.style.left = "0px";
            reg_btn.style.backgroundColor = "#1695D0";
            login_btn.style.backgroundColor = "transparent";

        }

        function login() {
            log_in.style.left = "0px";
            reg.style.left = "450px";
            reg_btn.style.backgroundColor = "transparent";
            login_btn.style.backgroundColor = "#1695D0";
        }
    </script>
</body>

</html>