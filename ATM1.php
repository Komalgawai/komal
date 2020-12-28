<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body{
            background-image:url(d1.jpg);
            background-size: 100% 100%;
            background-attachment: fixed;
        }
        table{
            color:black;
        }

    </style>
    <script>
        
        function fun(){
            
            pass1=document.getElementById("pass").value;
            if(pass1!=1234){
                
                document.myform.password.focus();
                document.myform.password.value();
            }
            else{
                alert("Welcome komal");
            }
        }

    </script>

</head>
<body>
    <form name="myform" action="ATM2.php" method="GET" >   
    <h1 style=" text-align:center;color:white" >Welcome to SBI bank</h1>
        
    <table  border=5; align="center";color:red>
        
        <tr>
            <th style="color:white ;font-size:20px;" >Enter Pin</th>
            <th><input type="password" name="password" placeholder="Enter Pin" id="pass" style="background:none ;color:white;font-size:20px;" required ></th>
        </tr>
        
        <tr>
        <th colspan=2><input type="submit" value="submit" style="background:none ;color:white;font-size:20px;" onclick=fun()></th>
        </tr>

        </table>
        
    </form>
    
</body>

</html>