<html>
<head>

<style>
body {
      margin: 0;
    }

    .header {
      background-color:#EEA47FFF;
      padding: 50px;
      text-align: center;
    }  
    .topnav {
      overflow: hidden;
      background-color: rgb(88, 34, 34);
    }

    /* Style the topnav links */
    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* Change color on hover */
    .topnav a:hover {
      background-color: rgb(226, 77, 77);
      color: rgb(49, 23, 23);
    }

    .leftcolumn {
      float: left;
      background-color: #cfbdbd;
      text-align: center;
      width: 100%;
    }.rightcolumn {
      float: left;
      background-color: #cfbdbd;
      text-align: left;
    
      width: 100%;
    }
    </Style>
</head>
<body>

<div class="header">
    <h1>  REGISTRATION FORM</h1>
    </div>
    <div class="topnav">
      <a href="/">Home</a>
      <a href="/login">Login</a>
      
    </div>


<center>


    <form action="/registeraction" method="post" id="form">
        @csrf
<table cellpadding="5" >
    <tr><td>Name</td><td>:</td><td><input type="text"  id="name" name="name" ></td>
    </tr>
    <tr><td>Email</td><td>:</td><td><input type="email" id="email" name="email"  ></td>
   </tr>
    <tr><td>Phone no</td><td>:</td><td><input type="num"  id="phneno" name="phneno" ></td>
  </tr>
<tr>
        <td>Gender</td><td>:</td><td>
        Male<input type="radio" name="gender" value="male">
         Female<input type="radio" name="gender" value="female"></td>
       
    </tr>
    <tr><td>Address</td><td>:</td><td><textarea name="address" id="address" name="address"></textarea></td>
</tr>
    <tr><td>Username</td><td>:</td><td><input type="text"  id="username" name="username"></td>
    </tr>
    <tr><td>Password</td><td>:</td><td><input type="password" id="password" name="password" ></td>
    </tr>
    
    <tr>
    
        <td><input type="submit" name="register" value="register"></td>
    </tr>
   
        </table>
        </form>
        
</body>
        
</html>
