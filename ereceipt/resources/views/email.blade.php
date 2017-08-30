<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

<br>

<form action="send" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<table class="md-col-8" style="color:#636B6F; font-family:Raleway; font-size:14px;">
		<tr><td>Customer E-mail:</td><td><input type="text" name="to"></td></tr>
		<tr><td>Subject:</td><td><input type="text" name="sub" value="E-Receipt from Arong"></td></tr>
		<tr><td>Message:</td><td><textarea name="message" cols="30" rows="10"></textarea></td></tr>
		<tr><td>Attachment:</td><td><input type="file" name="attachment" required></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="Send"></td></tr>
	</table>
</form>

</body>
</html>