<html>


<head>
    <title>Online voting system - Home</title>
 
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body >

    <center>
        <div id="headerSection" >
            <h1>Online Voting System</h1>
        </div>
        <hr>

        <div id="loginSection" >
            <h2>Login</h2>
            <form action="api/login.php" method="POST">
                <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                <input type="password" name="pass" placeholder="Enter password" required><br><br>
                <select name="role" style="width: 15%; border: 2px solid black">
                    <option value="1">Voter</option>
                    <option value="2">Candidate</option>
                    <option value="2">Judge</option>
                </select><br><br>
                <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                Don't Have an Account? Please Register <a href="routes/register.php">Register here</a>
            </form>
        </div>
<div style="border-style: solid; position: fixed;
  bottom: 0;
  left: 0;  
  width: 100%; 
  background-color: #f0f0f0;  
  padding: 10px; ">
<footer style="color:red; border=2px" >All Rights Reserved by University Grants Comission UGC</footer>
</div>
  

    </center>


</body>

</html>