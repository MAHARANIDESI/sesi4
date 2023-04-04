<?php
    $usr="";
    $pwd="";
    $salah=0;
    
    if(isset($_GET["txUSER"])){
        $user =$_GET["txUSER"];
        $pwd=$_GET["txPASS"];
        if($user ==""){
            $salah=1;
         }else {
            echo "isi dari field User:".$user;
    
         }
         if($pwd==""){
            $salah=1;
         }else {
            echo "isi dari field Password:".$user;
         }
    }

     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form dengan metode GET</title>
</head>
<body>

<?php
if($salah==1){
    echo "<div style='color:red'>User Name/Password masih kosong</div>";
}
?>
<form method="GET" acation="latihan01.php">
<div>
    User Name 
    <input type ="text"name ="txUSER" required>
    
</div>
<div>
    Password
    <input type ="pasword"name ="txPASS">
    
</div>
<div>
    
    <button type ="submit">login </button>
    
</div>
</form>
    
</body>
</html>