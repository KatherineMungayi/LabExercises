<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>


<div class="form">
    <div class="avi"></div>
  <form action="index.php" method="post" enctype="multipart/form-data" >
    <input type="text" name="first_name"  placeholder="first_name"/>
    <input type="text" name="second_name" placeholder="second_name"/>
     <input type="text" name="city_of_residence"  placeholder="city_of_residence"/>
      <input type="email" name="Email"  placeholder="Email"/>
       <input type="password" name="password"  placeholder="password"/>

    <input type="submit" name="register" action="submit"/>
  </form>
</div><!--form-->
<div class="recovery">Forgot your password? <a href="#">Click here</a></div>

</body>
</html>
