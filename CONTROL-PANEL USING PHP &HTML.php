
<!DOCTYPE html>
<html>
<head>
<style>
div {
  background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
</style><html>
<head>
<style>    
    div {
  width: 390px;
  border: 10px solid gray;
  padding: 10px;
  margin: 10px;
}

.button {
  background-color: #e7e7e7; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 

<title>Control Panel</title>
    
</style>
</head>
<body>
    
        <h1>REMOTE CONTROL </h1>
    


</style>
</head> <body>
    <div class="controller"> 
      <br><br> 
      <div classe"buttonstextcenter"rolew"group"> 
        <form action="" method="post"> 
        
            <br><br><br><br>
            <tr>
            <td></td>
            <button type="submit" name="F" class="button button2">FORWARD</button></td>
            <br><br>
            <td></td>
            <?tr>
            <button type="submit" name="L" class="button">LEFT</button></td>
            <button type="submit"  name="S"class="button button3">STOP</button></td>
            <button type="submit" name="R" class="button">RIGHT</button></td>
         </tr>
            
            <button type="submit" name="B" class="button button2">Backward</button></td>
            <br><br><br><br> 
        </from> 
       </div>
    </div> 
  </ body> 
</html>




<?php 

$conn = mysqli_connect('localhost', 'root', '', 'mojahed_task2');


if(!$conn){
	echo 'Connection error: '.mysqli_connect_error();
}if (isset($_POST['B'])){
	echo "<p align=center>backward</p> ";
	mysqli_query($conn,"INSERT INTO`control panels` SET `Backward` = 'B'");
}

if (isset($_POST['F'])){
	echo "<p align=center>forward</p> ";
	mysqli_query($conn,"INSERT `control panels` SET `Farward` = 'F'");
}

if (isset($_POST['R'])){
	echo "<p align=center>right</p> ";
	mysqli_query($conn,"INSERT `control panels` SET `Right` = 'R'");
}

if (isset($_POST['L'])){
	echo "<p align=center>left</p> ";
	mysqli_query($conn,"INSERT `control panels` SET `Left` = 'L'");
}
if (isset($_POST['S'])){
	echo "<p align=center>stop</p> ";
	mysqli_query($conn,"INSERT `control panels` SET `Stop` = 'S'");
}



?>





