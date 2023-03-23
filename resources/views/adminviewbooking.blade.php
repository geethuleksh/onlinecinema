<html>

<head>

  <title>Document</title>
  <style>
    body {
      margin: 0;
    }

    .header {
      background-color: #e4ddf4;
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
    <h1>ADMIN VIEW BOOKING</h1>
    </div>
    <div class="topnav">
      <a href="/adminhome">Admin Home</a>
    
      <a href="/adminview"> Admin View</a>
      <a href="/adminlogout">Admin Logout</a>
 </div>
<br>
<center>
  <table border="1" bgcolor="#e4ddf4" width="60%" height="40%">
    <tr>

      <th>Movie name</th>

      <th>Date</th>
      <th>Time</th>
      <th>Theater name</th>
      <th>Seat type</th>
      <th>No of seats</th>
      <th>userid</th>
      <th>status</th>
    </tr>
    @foreach($res as $value)
        <tr>
      <td>{{$value->name}}</td>
      <td>{{$value->date}}</td>
      <td>{{$value->time}}</td>
      <td>{{$value->tname}}</td>
      <td>{{$value->seat}}</td>
      <td>{{$value->num}}</td>
      <td>{{$value->userid}}</td>
      <td>{{$value->status}}</td>
      <td><a href="/confirm/{{$value->id}}">confirm</a></td>
      <td><a href="/decline/{{$value->id}}">decline</a></td>
        </tr>
        @endforeach
  </table>
  |</center>

</body>

</html>
 
</body>
</html>