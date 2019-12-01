//*mail form by mo bhja*/
$to = "avanish@inceptionc.tech"; /* add your email*/
$Subject = "Email from my website";

//Don't touch this please//
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

//this is the header//
$headers = "Content-type:text/html:\r\n";
#headers = "From: $email";

//the mail function//
mail($to, $Subject, $comment, $header);
//this message will show up when you hit submit button///

echo "Email has been sent! Thank You $name";
?>


///html code

<html>
<boday>
<form action="process.php" method="post">
<p>Name:
<input type="text" name="name">
</p>
<p>Email
<input type="text" name="email" id="email">
</p>
<p>Message
<textarea name="comment" id="comment" cols="45", rows="5">
</p>
<p>submit
<input type="submit" name="submit" id="submit" value="submit">
</p>
</form>
</body>
</html>