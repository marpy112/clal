
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>      
    
    <div class="wrapper">
            
        <div class="title">
          
            <img src="img/logo.png" alt="BSIT LOGO" class= "logo
            "> <br>
            <div class="image"></div>
        
            
            <strong style=" font-family: sans-serif; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Computer Laboratory <br> Attendance Login </strong>
        </div>
        <form name= "f1"  action = "authentication.php" onsubmit = "return validation()" method = "POST"  >

            <div class="field">
                <input type="text" id= "user" name='user'>
                <label>Username</label>
            </div>
            <div class="field">
                <input type="password" id= "pass" name='pass' >
                <label>Password</label>
            </div>
           
            <div class="field">
                <input type="submit" id= "btn" name="btn" value="Login">
      
        </form>
     
    </div>
    <!-- <script>  
        function validation()  
        {  
            var id=document.f1.user.value;  
            var ps=document.f1.pass.value;  
            if(id.length=="" && ps.length=="") {  
                alert("User Name and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("User Name is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }                             
        }  
    </script>  -->
</body>

</html>