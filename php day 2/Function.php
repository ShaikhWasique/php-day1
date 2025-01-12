<html>
    <body>
        <?php
        // function 
        function firstfunction(){
            echo "Bye World";
        }
        firstfunction();
        //with parameter function
        function greet ($name){
            echo"<br> Bye".$name;
        }
        greet("class");
        //with default parameter function
        function defaultparameter($name ="Guest"){
            echo"<br> hello".$name;
        }
        defaultparameter();
        defaultparameter("Default parameter !");
        //function that return a value
        function multiply ($a,$b){
            return $a*$b;
        }
        $result=multiply(900000,6000);
        echo "<br>".$result;
        //Function by value example
        function  addten($num){
            $num+=10;
            echo"<br> function value:".$num;
        }
        $x=5;
        addten($x);
        echo"<br> function value:".$x;
        echo "<br>";
        //function by reference example
        function  addtenbyrefer($num){
            $num+=10;
            echo"<br> function value:".$num;
        }
        $y=5;
        addtenbyrefer($y);
        echo"<br> function value:".$y;
        echo "<br>"; 
        //early returning the values and functions(conditional return)
        function checkEvenOdd($num){
            if($num %2 == 0){
                return "Even";
            }
            return "Odd";
        }
            echo"<br>";
            echo checkEvenOdd(18);
            echo"<br>";
            echo checkEvenOdd(15);
            
            ?>
    </body>
</html>