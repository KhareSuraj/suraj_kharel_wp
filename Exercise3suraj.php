<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1 </title>
</head>
<style>
    body{
        color: #994A1D;
        font-family:Times New Roman (serif);

    }
    table, th, td {
        border: 2px solid orange;
        border-collapse: collapse;
        border:color:#808080
        padding: 10px 5px;
    }
    
    h1{
        color:#CD853F;
        font-size: 20px;
        margin-bottom: 40px;
        background:#F0F8FF;

    }
    h2{
        color:#191970;
        font-size: 18px;
        margin-bottom: 5px;
        background:#F0F8FF;  
    }
    h3{
        color:#4682B4;
        font-size: 15px;
        margin-bottom: 5px;
        background:#F0F8FF; 
    }
    div{
        max: width 1000px;
        width:80%
        margin: 30px auto;
    }
    
</style>

<body>
    <div>

    <h1>Exercise 3 <br> Suraj Kharel</h2>

 
    <h3>

    1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

    It's August, so it's still holiday.
    Not August, This is Month-name so i don't have any holidays

    You can use date(F) function to get the current month name</h3>
    <?php
    $d = date("F");
    if ($d == "August"){
        echo "It's August, so it's still holiday. <br>";
    }
    else {
        echo "Not August, This is Month-$d so I don't have any holidays <br>";
    }
    ?>

   
    <h3>2. Assign color red to a variable name $color and check to print one the following responses using if else statement 

        The color is red. 

        The color is not red. </h3>
    <?php
     $color = "red";
     if ($color == "red"){
         echo "The color is red. <br>";
     }
     else {
         echo "The color is not red. <br>";
     }
    ?>
    
    <h3>3. Write a program to grade students based on their total score for a subject. 
        The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50</h3>
    <?php
           $score = 99;
           if ($score >=80 ){
               echo "Excellent <br>";
           }
           elseif ($score >=70){
               echo "Great<br>";
           }
           elseif ($score >= 60){
               echo "Good<br>";
           }
           elseif ($score >= 50){
            echo "Pass<br>";
           }
           else {
            echo "Fail <br>";
        }
    ?>
    <h3>4. Write a program to get inputs (age and name) from the user and based on their age, 
        decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.) </h3>
        

        <form action = "Exercise3suraj.php" method="get">
            Name: <input type = "text" name="name"> 
            Age: <input type = "number" name="age">
            <input type = "submit">
        </form>

        <?php 
         
         if ($_GET['age'] >=18){
             echo "You are eligible for voting";
         }
         else{
             echo"You are not eligible for voting";
         }
        ?>

    <h3> 5. Use a looping statement to construct the following pattern: <br>

            12345678 <br>
            1234567 <br>
            123456<br>
            12345<br>
            1234<br>
            123<br>
            12<br>
            1 </h3>
        <?php
            for($i=8;$i>=1;$i--){
            for($j=1;$j<=$i;$j++){
            echo " $j ";
            }
            echo '</br>';}
        ?>
        <h3> 6. Use While loop to print the following pattern: <br>
                *<br>
                **<br>
                ***<br>
                ****<br>
                *****<br>
                ******<br>
                *******<br>
                ********</h3>
            <?php
            for ($i=1; $i<=8; $i++){
                for($j=0; $j<$i; $j++){
                    echo "*";
                }
                echo "<br/>";
            }
            
            ?>
</body>
    </div>
</html>