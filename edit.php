<?PHP 

include 'db.php';

$id = $_POST['id'];
$name = $_POST['naam'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$adres = $_POST['adres'];
$editdone = 'true';
$date = date("Y/m/d");

$query = "UPDATE users SET naam='$name' , email='$email', tel='$tel', adres='$adres', editdone='$editdone', date='$date'";
$data = mysqli_query($conn, $query);

?>