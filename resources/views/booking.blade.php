<html>

<head>


  <title>Document</title>
  <style>
    body {
      margin: 0;
    }

    .header {
      background-color:#FBEAEB;
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
    <h1>  BOOKING</h1>
    </div>
    <div class="topnav">
      <a href="/userhome">Home</a>
      <a href="/viewbooking">View Booking</a>
      <a href="/viewprofile">View Profile</a>
      <a href="/logout">Logout</a>
    </div>
    <center>
    <form action="/bookingaction"method="post">
        @csrf
    <table cellpadding="5" >
    <tr><td>Movie name</td><td>:</td><td><input type="text"  id="name" name="name" ></td>
    </tr>
    <tr><td>Date</td><td>:</td><td><input type="date" id="date" name="date"  ></td>
   </tr>
    <tr><td>Time </td><td>:</td><td><input type="time"  id="time" name="time" ></td>
  </tr>

    <tr><td>Theater name</td><td>:</td><td><input type="text"  id="tname" name="tname" ></td>
    <tr><td>Seat type</td><td>:</td>
<td><select name="seat" id="seat">

<option selected="selected" disabled="disabled" value="default">Select seat type</option>

<option value="Balcony">Balcony</option>

<option value="Middle">Middle</option>

<option value="Lower class">Lower class</option>


</select></td></tr>

    <tr><td>No of seats</td><td>:</td><td><input type="num" id="num" name="num" ></td>
    </tr>

    <tr>
    
        <td><input type="submit" name="register" value="register"></td>
    </tr>
   
        </table>
        </form></center>
        
</body>
        
</html>
