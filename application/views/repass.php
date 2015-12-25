<!DOCTYPE html>
<html>

<body>
<form  action="taken_pass" method="post" >

 password:<input type="password" class="password">
 repeat password<input type="password" class="conpass">
   <input type="hidden"     class="hid"   value=<?php echo $rat;?>>
 <input type="submit" class="repassubmit">
</form>
<span style="color:red" id="passerr"></span>>
</body>
</html>