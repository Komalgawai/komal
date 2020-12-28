<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
            background-image:url(d1.jpg);
            background-size: 100% 100%;
            background-attachment: fixed;
        }
  #divv{
      margin-left:500px;
      margin-top:200px;
  }      


</style>
<body>
    <?php
     $amount=$_GET["amount"];

    if($amount==''){?>
        <form action="ATM3.php" method="get">
        <div id="divv">
        <span style="color:white ;font-size:20px;">Enter Amount</span><br>
        <input type="tel" name="amount" style="background:none ;color:white;font-size:20px;" ><br><br>
        <input type="submit" value="Submit" style="background:none ;color:white;font-size:20px;">   
        </div>
        </form>

    <?php } ?>

    <?php
        
        Abstract class Account{
            public $bal;
        
            function __construct($bal){
                $this->bal=$bal;
            }
    
             function getbalance(){
                echo"<h3>Welcome Komal Gawai</h3>";
                echo"Your balance is:".($this->bal)."<br>";
            }
        
            
            
        }
        interface calculate{
            function withdraw($with);
            function deposite($depo);
            
        }
        
        class Saving extends Account implements calculate{
    
            public $with;
            public $depo; 
             
            function withdraw($with){
                echo "<h3>In saving:</h3>";
                echo"Withdraw Amount:".$with."<br>";
                echo "Remaining Amount:".($this->bal-$with)."<br>";
            }
            function deposite($depo){
                echo "Deposite Amount:".$depo."<br>";
                echo "Amount:".($this->bal+$depo)."<br>";
            }
            
        
        }
        class Current extends Account implements calculate{
    
            public $with;
            public $depo; 
    
            function withdraw($with){
                echo "<h3>In Current:</h3>";
                echo"Withdraw Amount:".$with."<br>";
                echo "Remaining Amount:".($this->bal-$with)."<br>";
            }
            function deposite($depo){
                echo "Deposite Amount:".$depo."<br>";
                echo "Amount:".($this->bal+$depo)."<br>";
            }
            
        
        }
          
            if($Avaliablebalance=='AvaliableBalance'){
                $curr=new Current(20000);
                $curr->getbalance();
                }
            else if($Saving=='Saving'){
                $sav=new Saving(20000);
                $sav->withdraw($amount);
                $sav->deposite($amount);
                }
            else if($Current=='Current'){
                $curr= new Current(20000);
                $curr->withdraw($amount);
                $curr->deposite($amount);    
                }
        
        


    ?>

    


    
</body>
</html>