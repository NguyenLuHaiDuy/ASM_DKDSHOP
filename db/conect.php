<?
$server = "localhost";
$username = "root";
$password = "mysql";
$database = "banquanao";
$connect = new mysqli($server, $username,$password,$database);
if($connect->connect_error){
    echo "Kết nối lỗi";
    exit();
    }
?>
