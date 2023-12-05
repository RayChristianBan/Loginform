<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $cpassword = $_POST['cpass'];

        
        
        $sql = "Select * from student_data where name='$name'";
        $result = mysqli_query($conn, $sql);        
        $count_user = mysqli_num_rows($result);  

          
        $sql = "Select * from student_data where number='$number'";
        $result = mysqli_query($conn, $sql);        
        $count_user = mysqli_num_rows($result); 

          
        $sql = "Select * from student_data where course='$course'";
        $result = mysqli_query($conn, $sql);        
        $count_user = mysqli_num_rows($result); 

        $sql = "Select * from student_data where email='$email'";
        $result = mysqli_query($conn, $sql);        
        $count_email = mysqli_num_rows($result);  
        
        if($count_name == 0 && $count_number==0 && $count_course==0 && $count_email==0){  
            
            if($password != null) {
                $sql = "INSERT INTO student_data(name, number , course , email, password) VALUES('$name', '$number', '$course', '$email','$password')";
                $result = mysqli_query($conn, $sql);
                    header("Location: dashboard.php");
                
            } 
            else { 
                echo  '<script>
                        alert("Passwords do not match")
                        window.location.href = "index.php";
                    </script>';
            }      
        }  
        else{  
            if($count_name>0){
                echo  '<script>
                        window.location.href = "index.php";
                        alert("Username already exists!!")
                    </script>';
            }
            if($count_number>0){
                echo  '<script>
                        window.location.href = "index.php";
                        alert("Student Number already exists!!")
                    </script>';
            }

            if($count_email>0){
                echo  '<script>
                        window.location.href = "index.php";
                        alert("Email already exists!!")
                    </script>';
            }


        }     
    }
    ?>