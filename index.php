<?php
$pageTitle = "PHP and MySQL";
require_once "header.php";
require_once "connection.php";
$dbc = db_connect();

                //form submittion code
                if(isset($_POST['submit'])){

                    $error =[];
                
                    if(empty($_POST['Full name'])){
                        $_errors[] = "Name cannot be empty";
                    }
                    else{
                    $name =trim($_POST['Full name']);
                    }

                    if(empty($_POST['email'])){
                        $_errors[] = "email cannot be empty";
                    }
                    else{
                    $email =trim($_POST['email']);
                    }

                    
                    if(empty($_POST['username'])){
                        $_errors[] = "username cannot be empty";
                    }
                    else{
                        $username =trim($_POST['username']);
                    }

                    if(empty($_POST['phone number'])){
                        $_errors[] = "phone numbercannot be empty";
                    }
                    else{
                        $phonenumber =$_POST['phone number'];
                    }


                    if(empty($_POST['present address'])){
                        $_errors[] = "present address cannot be empty";
                    }
                    else{
                        $presentaddress =trim($_POST['present address']);
                    }


                    if(empty($_POST['parament address'])){
                        $_errors[] = "paramnet address cannot be empty";
                    }
                    else{
                        $parmanentaddress =trim($_POST['parmanent address']);
                    }

                    if(empty($_POST['CNIC'])){
                        $_errors[] = "CNIC cannot be empty";
                    }
                    else{
                        $CNIC =$_POST['CNIC'];
                    }

                    if(empty($_POST['DOB'])){
                        $_errors[] = "DOB cannot be empty";
                    }
                    else{
                        $DOB =trim($_POST['DOB']);
                    }

                    if(empty($errors)){
                    $dbc =db_connect();
                    $sql = "INSERT INTO users VALUES('$name','$email','$username','$phonenumber','$presentaddress','$parmanentaddress','$CNIC','$DOB')";                    $result = mysqli_query($dbc,$sql);
                    if($result){
                                echo "<div class = 'alert alert-success'> Data Entered successfully </div>";
                            }
                else{
                    echo "<div class = 'alert alert-danger'> Data cannot be Entered successfully due to error </div>";
                    }

                        db_close($dbc);
                    }

                else
                    foreach($errors as $error){
                echo "<div class 'alert alert-danger'>$error</div>";
                    }
            
                }
                else{
                    echo "<div class = 'alert alert-danger'>form is not submitted </div>";
                }
?>

<body>
                <div class = "container">
                <div class = "row">
                <div class = "col-sm-12">
                <h1 class = "text-center">Registration Form</h1>
                </div>
                </div>
                <div class ="row justify-content-center">
                <div class = col-sm-6>
                <form action = "process.php" method="post">
                <div class = "form-group">
                <label for = "name">Full Name:</label>
                <input type ="text" name ="name" id = "name" class = "form-control">
                </div>

                <div class = "form-group">
                <label for = "name">Email Address:</label>
                <input type ="text" name ="email" id = "email" class = "form-control">
                </div>

                <div class = "form-group">
                <label for = "name">Username:</label>
                <input type ="text" name ="username" id = "username" class = "form-control">
                </div>

                <div class = "form-group">
                <label for = "name">Phone Number:</label>
                <input type ="text" name ="phonenumber" id = "phonenumber" class = "form-control">
                </div>

                 <div class = "form-group">
                <label for = "name">Present Address:</label>
                <input type ="text" name ="presentaddress" id = "presentaddress" class = "form-control">
                </div>

                <div class = "form-group">
                <div class = "form-group">
                <label for = "name">Parmanent Address:</label>
                <input type ="text" name ="parmanentaddress" id = "parmanentaddress" class = "form-control">
                </div>

                <div class = "form-group">
                <label for = "name">CNIC:</label>
                <input type ="cnic" name ="CNIC" id = "CINS" class = "form-control">
                </div>

                <div class = "form-group">
                <label for = "name">Date of birth:</label>
                <input type ="date" name ="dob" id = "dob" class = "form-control">
                </div>

            <input type = "submit" value = "Register" class = "btn btn-success">
                </form>
                </div>
                </div>
                </div>
                <?php require_once "footer.php"; ?>
                
</body>
</html>