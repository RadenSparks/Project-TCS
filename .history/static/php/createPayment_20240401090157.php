<<<<<<< HEAD
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /Project-TCS/index.php?site=login');
    exit;
}

$dsn = 'mysql:host=localhost;dbname=db_epicgamers';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8'");

    $check = $conn->prepare("SELECT * FROM your_table WHERE your_condition");
    $check->execute();

    if ($check->rowCount() > 0) {
    } else {

<?php    
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: /Project-TCS/index.php?site=login');

    }
    
    $conn = mysqli_connect("localhost", "root", "", "db_epicgamers") or die("Không thể kết nối!");
    mysqli_query($conn, "SET NAMES 'utf8'");
    
    if(mysqli_num_rows($check) > 0){


    header('Location: /Project-TCS/index.php?act=home=' . $_GET['id']);
    exit;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

    }else{

    }
    
    header('Location: /Project-TCS/index.php?site=home='.$_GET['id']);
?>

