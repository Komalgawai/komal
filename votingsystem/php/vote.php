<!doctype html>
<html lang="en">

<head>
    <title>Done</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="../styles/done.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   
</head>


<body >
    


<?php
session_start();
$aadhar=$_SESSION["aadhar1"];
$email=$_SESSION["email"];
$vote=$_POST["vote"];
$cn=mysqli_connect("localhost","root","","image") or die("Could not Connect My Sql");
$sql = "INSERT INTO `vote` (`email`,`aadhar`,`vote_party`)  VALUES ('$email','$aadhar','$vote')";
if (mysqli_query($cn, $sql)) {
    ?>
    <div class="container">
    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
      </svg>
    <h1 id="floating">
        YOUR VOTE IS RECORDED THANKS FOR VOTING / आपका वोट रिकॉर्ड किया गया है, मतदान के लिये धन्यवाद
    </h1>
</div>
<?php
}
else {
	echo"<h1 style='text-align: center ;font-size: 40px;font-style: italic; opacity: 1.0;margin-top:250px;'>". "You have already voted once! you are not allowed to vote again "."</h1>";
    
}


?>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
