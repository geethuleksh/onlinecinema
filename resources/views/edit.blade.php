<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($reg as $value )
<form action="/updateaction/{{$value->id}}" method="post">
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
    @endforeach
</body>
</html>