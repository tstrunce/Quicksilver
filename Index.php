									*Mock Incident*

<html>
<head>
<title>QuickSilver Password Retrieval</title>
</head>
<body>
<input type="User" id="User" name="Username" size="40"><br>
<input type="email" id="email" name="email" size="40"><br>
<input type="button" id="click" value="Send Password">
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#click").click(function(){
var email=$("#email").val();
$.post("send_email.php",{email:email},function(data){
document.write(data);
});
});
});
</script>
</html>
