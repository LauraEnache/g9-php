<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  First Name: <input type="text" name="first_name"> <br>
  Last Name: <input type="text" name="last_name"> <br>
    Age: <input type="number" name="age"> <br>
    <input type="submit" value="Send">
</form>



<?php
$firstname = $_POST['first_name'] ?? '';
$lastname = $_POST['last_name'] ?? '';
$age = $_POST['age'] ?? 0;

if (!is_numeric($age)){
    die("Age must be a number");// la age daca input type nu este nr, ne afiseaza ca trebuie sa fie nr; este rec sa punem 0
}

echo $firstname . ' ' . $lastname . ' ' . $age;