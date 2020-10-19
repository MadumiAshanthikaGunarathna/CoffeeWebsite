<?php

require 'Controller/CoffeeController.php';
$coffeeController=new CoffeeController();

if(isset($_POST['type']))
{
 $coffeeTables=$coffeeController->CreateCoffeeTables($_POST['type']);   
}
 else 
 {
  $coffeeTables=$coffeeController->CreateCoffeeTables('%');   
     
 }
    


$title="Coffee overview";
$content=$coffeeController->CreateCoffeeDropdownList().$coffeeTables;

include 'Template.php';
?>

