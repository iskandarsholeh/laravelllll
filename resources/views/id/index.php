<?php
// echo "hello world Indonesia";
// echo "<br>ini adalah domain : ";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>Lokasi terletak pada : ";
// echo $_SERVER['DOCUMENT_ROOT'];
?>

<?php

$bil1 = '';
$bil2 = '';
$result = '';
if(isset($_POST['submit'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $result = $bil1 + $bil2;
    
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator</title>
</head>
<body>
  <h2>Kalkulator</h2>
<form method="POST" action="index.php">
  <input type="text" name="bil1" class="form-control" placeholder="Bil 1" required>
  <input type="text" name="bil2" class="form-control" placeholder="Bil 2" required>  
  <input type="text" name="result" class="form-control" placeholder="Hasil" value="<?php echo $result;?>">  
  <input type="submit" name="submit" value="Login" class="btn btn-primary">

</form>
</body>
</html>
