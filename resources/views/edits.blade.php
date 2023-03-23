<html>
<head>


<center>
<body>
@foreach($reg as $value )
<form action="/updatesaction/{{$value->id}}" method="post">
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
        @endforeach
        
</body>
        
</html>
