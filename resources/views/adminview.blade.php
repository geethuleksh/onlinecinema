<html>

<head>

  <title>Document</title>
  <style>
    body {
      margin: 0;
    }

    .header {
      background-color:  #c8d8e4;
      padding: 70px;
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
    </style>
</head>
<body>
<div class="header">
    <h1>ADMIN VIEWS</h1>
    </div>
    <div class="topnav">
      <a href="/adminhome">Admin Home</a>
      <a href="/adminviewbooking">Admin View Booking</a>
      
      <a href="/adminlogout">Admin Logout</a>
    
    </div>
   <center> <table border="1" width="50%" height="50%" bgcolor="#c8d8e4">
    <tr>

<th>name</th>

<th>Email</th>
<th>Phne no</th>
<th>Gender</th>
<th>Address</th>
<th>Username</th>
<th>Password</th>
</tr>
@foreach($res as $value)
<tr>
      <td>{{$value->name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->phneno}}</td>
      <td>{{$value->gender}}</td>
      <td>{{$value->address}}</td>
      <td>{{$value->username}}</td>
      <td>{{$value->password}}</td>
        </tr>
        @endforeach
</center>

</table>
</body>
</html>