<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Simple Calculator</title>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="T22.Proj.style.css">
</head>
 <body>
   <div class="background">
      <div class="container">
         <!-- headinng -->
         <div class="heading">
            <div class="heading-inner">
               <h2>STUDENT <br>GRADE <br>CALCULATOR</h2>
            </div>
         </div>
         <!-- calculator -->
         <div class="calculator">
            <hr class="hr">
            <div class="app-form">
               <form method="POST">
                  <div class="app-form-group">
                     <input type="number" placeholder="Enter a number" name="num1">
                  </div>
                  <div class="app-form-group">
                     <input type="number" placeholder="Enter a number" name="num2">
                  </div>
                  <div class="select-style">
                     <select name="operation" id="">
                        <option value="add">ADDITION</option>
                        <option value="sub">SUBTRACT</option>
                        <option value="mul">MULTIPLY</option>
                        <option value="div">DIVISION</option>
                     </select>
                  </div>
                  <div class="submit-btn">
                     <input type="submit" name="submitname" value="submit">
                  </div>
               </form>
            </div>
         </div>
         <!-- result -->
         <div class="result">
            <p>
               <?php

               if(isset($_POST['submitname'])){
                  $num1 = $_POST['num1'];
                  $num2 = $_POST['num2'];

                  $operations = $_POST["operation"];

                  switch($operations){
                     case "add": $sum = $num1 + $num2;
                                 echo "The addition of two number is {$sum}";
                                 break;
                     case "sub": if($num1>$num2){
                                 $sub1 = $num1 -$num2;
                                 echo "The substraction of two number is {$sub1}";
                                 break;
                                 }
                                 else{
                                 $sub2 = $num2 -$num1;
                                 echo "The substraction of two number is {$sub2}";
                                 break;
                                 }
                     case "mul": $pro = $num1 * $num2;
                                 echo "The multiplication of two number is {$pro}";
                                 break;
                     case "div": if($num1>$num2){
                                 $sub1 = $num1/$num2;
                                 echo "The division of two number is {$sub1}";
                                 break;
                                 }
                                 else{
                                 $sub2 = $num2/$num1;
                                 echo "The division of two number is {$sub2}";
                                 break;
                                 }
                     default: echo "Sorry it's not exist";
                  }
               }
               ?>
            </p>
         </div>
      </div>
   </div>
 </body>
</html>