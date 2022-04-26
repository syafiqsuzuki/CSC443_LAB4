<html>

<head>

<title>Form Feedback</title>

</head>

<body>

<?php #Script handle form

echo "<p> Thank you, <b>".$_POST["name"]. "</b> for the following comments: <br/>".

$_POST["comments"]."<p>We will reply to you at <i>".

$_POST["email"]." </i></p>";

?>

</body>

-</html>

if (strlen($_POST["name"]) >0){ $_POST["name"] $_POST["name"];

}

else{

$_POST["name"]= null;

echo '<p><b> You Forgot to Enter Your Name! </b></p>';