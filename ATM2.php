<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    input{
        display:inline;
        margin-left:50px;
        border-radius:50px;
        font-size:18px;
    }
    #div1{
        margin-left:24%;
    }
    #divv{
        margin-top:15%;
        
    }
    body{
            background-image:url(d1.jpg);
            background-size: 100% 100%;
            background-attachment: fixed;
        }
</style>
<body>
    <form action="ATM3.php" method="POST">
<div id="divv">  
<marquee behavior="scroll" direction="right" style="color:white;font-size:30px">Welcome Komal Gawai</marquee>
<br><br>
    <div id="div1" >
    
    
    <input type="button" name="Current" value="Current"> 
    <input type="button" name="Saving" value="Saving">
    <input type="button" name="Avaliable Balance" value="Available balance">
      
    </div>
</div>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){ 
        $Avaliablebalance=$_POST['AvaliableBalance'];
        $Saving=$_POST['Saving'];
        $Current=$_POST['Current'];
       
        include "ATM3.php";
        }
        
    ?>
    



</body>
</html>