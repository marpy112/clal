<head>
    ...
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css">
</head>

<?php
    require_once 'conn.php';
    session_start();

    if(ISSET($_POST['btn'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $query = mysqli_query($conn, "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'");
        $fetch = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);

        if($row > 0){
            $_SESSION['name']=$fetch['name'];
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Successfully!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location='dashboard.php';
                    });
                </script>";
        }else{
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Invalid username or password',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location='index.php';
                    });
                </script>";
        }
    }
?>
