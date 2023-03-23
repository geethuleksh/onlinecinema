<html>



<head>


  <title>Document</title>
  <style>
    body {
      margin: 0;
    }

    .header {
      background-color: #DDC3A5;
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
    }

    .rightcolumn {
      float: left;
      background-color: #cfbdbd;
      text-align: left;

      width: 100%;
    }
  </style>


</head>

<body>
  <div class="header">
    <h1> VIEW BOOKING</h1>
  </div>
  <div class="topnav">
    <a href="/userhome">Home</a>
    <a href="/booking"> Booking</a>
    <a href="/viewprofile">View Profile</a>
    <a href="/logout">Logout</a>
  </div>


  <body>

    <center>
      <table border="1" bgcolor="#DDC3A5">
        <tr>

          <th>Movie name</th>

          <th>Date</th>
          <th>Time</th>
          <th>Theater name</th>
          <th>Seat type</th>
          <th>No of seats</th>
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
      <td>{{$value->status}}</td>
      <td><a href="/edit/{{$value->id}}">edit</a></td>
<td><a href="/delete/{{$value->id}}">delete</a></td>
        </tr>
        @endforeach
      </table>
      |
    </center>
  </body>

</html>