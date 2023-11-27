<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    echo "<script>location.replace('login.php');</script>";            
}

else {
    $id = $_SESSION['user_name'];
} 
?>

<body>
    <div class="base">
        <h2><?php echo "Hi, $id";?></h2>
        <button type="button" class="btn" onclick="location.href='logout.php'">
            LOGOUT
        </button>
    </div>
</body>