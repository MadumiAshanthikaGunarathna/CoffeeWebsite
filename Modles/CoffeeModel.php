<?php
require ("Entites/CoffeeEntity.php");
class CoffeeModel
{
    function GetCoffeeTypes()
    {
        require 'Credentials.php';
        
        mysql_connect($host,$user,$passwd)or die(mysql_error());
        mysql_select_db($database_name);
        $result= mysql_query("SELECT DISTINCT type FROM coffee")or die(mysql_error());
        $type=array();
        
        while($row= mysql_fetch_array($result))
        {
            array_push($types,$row[0]);
            
        }
        //close connection and return result.
        mysql_close();
        return $types;
    }
    //Get coffeeEntity objects from the database and return them in array.
    function GetCoffeeByType($type)
    {
        
        require 'Credentials.php';
        mysql_connect($host,$user,$passwd) or die(mysql_error);
        mysql_select_db($database);
        
        $query="SELECT * FROM coffee WHERE type LIKE '$type'";
        $result = mysql_query($query) or die(mysql_error());
        $coffeeArray=array();
        
        //Get data from database..
        while($row=mysql_fetch_array($result))
        {
            $name=$row[1];
            $type=$row[2];
            $price=$row[3];
            $roast=$row[4];
            $country=$row[5];
            $image=$row[6];
            $review=$row[7];
            
            //Create coffee objects and store them in array.
            $coffee=new CoffeeEntity(-1, $name, $type, $price, $roast, $country, $image, $review);
            array_push($coffeeArray,$coffee);
            
           
        }
        
         //Close connection and return result
            mysql_close();
            return $coffeeArray;
    }
}
?>