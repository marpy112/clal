
<!DOCTYPE html>

<?php
	session_start();
	if(!ISSET($_SESSION['name'])){
		header('location:index.php');
	}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPUTER LABORATORY ATTENDANCE MONITORING</title>
    
    <link  rel="stylesheet"  href="css.css">
  
</head>
<body>
   <!---====== Navigation =====---> 

   <div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="earth-outline" style="height: 50px; width: 50px ; "></ion-icon>
                    </span>
                    <span class="title" style="font-size: 20px; line-height:30px;margin-right: 1in;">Computer Laboratory <br> Attendance Monitoring</span>
                </a>
            </li>
<br>
        <li class= "active">  <a href="dashboard.php">
           <span class="icon" ><ion-icon name="home-outline"></ion-icon></span>
           <span class = "title"> Dashboard</span>
           
       </a>
       </li>
   

<li>  
    <a href="Student.php">
    <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
    <span class = "title">Students </span>
</a>
</li>
<li>  <a href="MngStdnt.php">
    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
    <span class = "title"> Manage Students</span>
</a>
</li>
<li>  
    <a href="AdminSettings.php">
    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></ion-icon></span>
    <span class = "title">Admin Settings </span>
</a>
</li>
<li>  
<a >
<span class="icon" style="cursor:pointer;"><ion-icon name="power-outline"></ion-icon></span>
  <span name="logout"class="title" type="button" id="logoutBtn"style="cursor:pointer;">Logout</span>
</a>

<script>

document.getElementById("logoutBtn").addEventListener("click", function() {
  // Show a confirmation dialog using SweetAlert2
  Swal.fire({
    title: "Are you sure you want to logout?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, logout!",
  }).then((result) => {
   
    if (result.isConfirmed) {
      window.location.href = "index.php";
    }
  });
});

  </script>
<!-- <script>
  const logoutBtn = document.getElementById("logoutBtn");
  logoutBtn.addEventListener("click", function(e) {

    const confirmation = confirm("Are you sure you want to log out?");
    if (confirmation) {
  
      window.location.href = "index.php"; 
    }
  });
</script> -->
</li>
</ul>
</div>


<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>
        <?php
				require'conn.php';
			
				
				$query = mysqli_query($conn, "SELECT * FROM `login` WHERE `name`='$_SESSION[name]'") or die (mysqli_error($conn));

				while($fetch = mysqli_fetch_array($query)) {
				
				}
				
			
			?>
        <h3 style="color: rgb(23, 23, 185); font-size: 23px; top: 15px; right:120px; position: absolute; font-family: Arial, sans-serif; font-weight: 300;">Welcome    <strong>
                    <?php echo $_SESSION['name']; ?>
                </strong>
            </p>
 </h3>



        <div class="user">
         
            <img src="img/logo.png" alt="">
             
        </div>
    </div>

    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">40</div>
                <div class="cardName">Present For Today</div>
            </div>

            <div class="iconBx">
                <ion-icon name="person-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">80 students</div>
                <div class="cardName">Time In</div>
            </div>

            <div class="iconBx">
                <ion-icon name="timer-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">45 students</div>
                <div class="cardName">Time Out</div>
            </div>

            <div class="iconBx">
                <ion-icon name="log-out-outline"></ion-icon>
            </div>
        </div>

   
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/main.js"></script>
</html>