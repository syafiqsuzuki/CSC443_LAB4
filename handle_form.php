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

if (strlen ($_POST["comments"]) >0) { $_POST["comments"] = $_POST["comments"];

}

else{

$_POST["comments"]= null;

echo '<p><b> You Forgot to Enter Your Comments! </b></p>';

}

if(! (strlen($_POST["email"]) >0)) {

$_POST["email"] null; =

echo '<p><b> You Forgot to Enter Your Emails! </b></p>'; }
if (isset($_POST["gender"])) {

if ($_POST["gender"] 'M') {

$message = '<b><p>Good Day, Sir </b></p>'; =

}

if ($_POST["gender"]

$message '<b><p>Good Day, Madam </b></p>';

}else{

$_POST["gender"] = null;

echo '<p><b> You Forgot to Choose Your Gender! </b></p>'; 
}