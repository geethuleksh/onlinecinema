<html>


<head>

  <title>Document</title>
  <style>
    body {
      margin: 0;
    }

    .header {
      background-color: #E2D1F9;
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
    <h1>  VIEW PROFILE</h1>
    </div>
    <div class="topnav">
      <a href="/userhome">Home</a>
      <a href="/booking">Booking</a>
      <a href="/viewbooking">View Booking</a>
      <a href="/logout">Logout</a>
    </div>
    <center>
      <table border="1" bgcolor="#E2D1F9" width="50%" height="20%">
        <tr>

          <th>name</th>

          <th>Email</th>
          <th>Phone no</th>
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
      <td><a href="/edits/{{$value->id}}">edit</a></td>
      
        </tr>
        @endforeach
        
      </table>
      |
    </center>
  </body>

</html>
</body>
</html>




