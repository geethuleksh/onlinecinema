<html>
    <head>
       
        <style>
body {
      margin: 0;
    }

    .header {
      background-color:#E7E8D1;
      padding: 50px;
      text-align: center;
    }  
    
    </Style>

    </head>
<body>
<div class="header">
    <h1>  LOGIN FORM</h1>
    </div>
    <center>
    <form action="loginaction" method="post">
@csrf
    <h3>LOGIN </h3>
 Username:<input type="text" name="username" id="username"><br><br>
 Password:<input type="password" name="password" id="password"><br><br>
 <input type="submit" name="login" value="login"><br><br>
</form>
 
</center>
</body>
</html>