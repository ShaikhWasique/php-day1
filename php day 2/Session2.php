<html> 
    <body>
        <?php
      //arrays and functions and array indexed
      $fruits=["Banana","Apple","Orange"];
      echo "select fruit :" .$fruits[1];
      foreach($fruits as $fruit) {
        echo"<br> fruit :.".$fruit;
      }
      //Associative arrays
      echo "<br>";
      $ages=["john"=>25, "ismail" =>18,"alice" => 22];
      echo "<br> Selected Age :".$ages ["alice"];
      foreach( $ages as $name => $age){
        echo "<br>" . $name ." is ". $age."years old";
      }
      // multi
      echo "<br>";
      $students=[
        ["john",28,false],
        ["ismail",23,true],
        ["kashif",25,false]
      ];
      echo"<br> student 1 is present in the class:".$students[0][2];
      // arrays manipulation
      $classroom=["stuart","ismail","rick"];
      foreach($classroom as $student){
        echo"<br> student:".$student;      
      }
      // adding elements
      $classroom[] ="alen";
      array_push($classroom,"kashif");
      foreach($classroom as $student)
      echo "<br> student:".$student;
    // updating
    echo "<br>";
    $classroom[2]="Wasique0";
    foreach($classroom as $student){
      echo "<br> student:".$student;
}
//counting elements
echo "<br><br>";
echo "number of elements in the array are:".count($classroom);
//deleting elements
unset($classroom[1]);
echo"<br>";
print_r($classroom);
//re-indexing elements
$classroom=array_values($classroom);
echo "<br>";
print_r($classroom);
        ?>
    </body>
    </html>