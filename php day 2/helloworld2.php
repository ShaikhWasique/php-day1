<html>
    <body>
<?php
 $day ="Sunday";
 switch($day){
    case "Sunday":
    echo "Its Sunday !!!";
 break;
 case "Monday":
    echo "Its Monday!!!";
    break;
    case "Tuesday":
        echo "Its Tuesday!!!";
        break;
       case "wednesday":
        echo " Its wednesday!!!";
        break;
        case "Thursday":
            echo "Its Thursday!!!";
            break;
        default:
        echo "no existing day found";
        }
        //iteractic control structure
        echo "<br>";
        $count= 1;
        while($count<=10){
echo "<br> count is".$count;
$count++;
        }
        //iteractic control do while loop
        echo "<br>";
        $num= 1;
        do{
            echo "<br> Do while number is".$num;
            $num++;
        }
        while($num <= 5);
        //iteractic control structures for loop
        echo "<br>";
        for ( $i=1; $i<= 3; $i++ ) {
            echo"<br> for loop number;".$i;
        }
        // iteractic control structure foreach loop
        echo "<br>";
        $array=["red","blue","green","yellow","brown"];
        foreach($array as $color){
            echo "<br> color:". $color;       
         } 
          
?>
</body>
</html>