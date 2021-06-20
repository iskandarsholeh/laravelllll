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
  <title>Calculator</title>
</head>
<body>
  <h2>Calculator</h2>
<form method="POST" action="index.php">
  <input type="text" name="bil1" class="form-control" placeholder="Num 1" required>
  <input type="text" name="bil2" class="form-control" placeholder="Num 2" required>  
  <input type="text" name="result" class="form-control" placeholder="Result" value="<?php echo $result;?>">  
  <input type="submit" name="submit" value="Login" class="btn btn-primary">

</form>
</body>
</html>
