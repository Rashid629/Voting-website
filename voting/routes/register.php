<html>


<head>
    <title>Online voting system - Registratrion</title>
    <link rel="stylesheet" href="../css/footer_style.css">
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>
    <center>
        <div id="headerSection">
            <h1>Online Voting System</h1>
        </div>
        <hr>



        <h2>Registration</h2>
        <form action="../api/register.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Name" required>&nbsp
            <input type="number" name="mob" placeholder="Mobile" required><br><br>
            <input type="password" name="pass" placeholder="Password" required>&nbsp
            <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
            <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
            <div id="upload" style="width: 30%">
                Upload image: <input type="file" id="profile" name="image" required>
            </div><br>
            <div id="upload" style="width: 30%">
                Select your role:
                <select name="role">
                    <option value="1">Voter</option>
                    <option value="2">Candidate</option>
                </select><br>
            </div><br>
            <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
            Already user? <a href="../">Login here</a>
        </form>


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