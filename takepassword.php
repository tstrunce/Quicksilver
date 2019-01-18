*Mock Incident*

<html>
<head>
<title>Password Retrieval Demonstration</title>
</head>
<body>
<h3>Type the username you want</h3>
<input  type="Username" id="username_password" size=40>
<input type="button" id="submit" value="Get Password">
<span id="msg"><h3>Hey you got a password, you can use this password to update the mysql table, enjoy</span>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#msg").hide();
$("#submit").click(function(){
$("#msg").show();
});
});
</script>
</html>
