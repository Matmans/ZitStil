<html>
    <head>
        <title>
        </title>
    </head>

    <body>
    <?PHP
    include 'db.php';
    $email = $_GET['email'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $data = mysqli_query($conn, $query);

    while ($result = mysqli_fetch_assoc($data)) {
        if($result['editdone'] == false) {
            echo '<form action="edit.php" method="POST" enctype=multipart/form-data>';
            echo 'ID: <input type="number" name="id" value="'. $result['id'] .'" disabled><br>'
            echo 'Naam: <input type="string" name="naam" value="'. $result['naam'] .'"><br>';
            echo 'Email: <input type="string" name="email" value="'. $result['email'] .'"><br>';
            echo 'Tel: <input type="string" name="tel" value="'. $result['tel'] .'"><br>';
            echo 'Adres: <input type="string" name="adres" value="'. $result['adres'] .'"><br>';
            echo 'input type="submit"';
            echo '</form>';
        }
        else {
            echo 'U hebt uw gegevens al eens aangepast op' . $result['date'];
        }
    }
    ?>
    </body>
</html>