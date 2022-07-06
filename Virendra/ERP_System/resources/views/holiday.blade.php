@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body style="background-color:powderblue;">

</style>
<h6>Choose a Filter</h6> 

<select class="selectpicker">
  <option>2015</option>
  <option>2016</option>
  <option>2017</option>
  <option>2018</option>
  <option>2019</option>
  <option>2020</option>
  <option>2022</option>
  
</select>
<button class="btn btn-primary" type="submit">Find Values</button>
 




<section>

<h3>Holiday Schedule-2022</h3>

    <table class="table">
    <thead class="table-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Month</th>
      <th scope="col">Date</th>
      <th scope="col">Day of the week</th>
      <th scope="col">Holiday</th>
      <th scope="col">Holiday type</th>
      <th scope="col">Created_at</th>
      <th scope="col">updated_at</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td>January</td>
      <td>13 jan,2022</td>
      <td>Thursday</td>
      <td>Lohri</td>
      <td>Mandatory Holiday</td>


    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td>Jan</td>
      <td>26 jan,2022</td>
      <td>Wednesday</td>
      <td>Republic Day</td>
      <td>Mandatory Holiday</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td ></td>
      <td>March</td>
      <td>18 March,2022</td>
      <td>Friday</td>
      <td>Holi(Choti Holi)</td>
      <td>Mandatory Holiday</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td ></td>
      <td>April</td>
      <td>15 April,2022</td>
      <td>Friday</td>
      <td>Good Friday</td>
      <td>Mandatory Holiday</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td ></td>
      <td>May</td>
      <td>3 May,2022</td>
      <td>Tuesday</td>
      <td>Eid-Ul-Fitr</td>
      <td>Mandatory Holiday</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td ></td>
      <td>Augest</td>
      <td>15 Aug,2022</td>
      <td>Monday</td>
      <td>Independence Day</td>
      <td>Mandatory Holiday</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td ></td>
      <td>Augest</td>
      <td>19 Aug,2022</td>
      <td>Friday</td>
      <td>Janmashtmi</td>
      <td>Mandatory Holiday</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td ></td>
      <td>October</td>
      <td>19 Oct,2022</td>
      <td>Wednesday</td>
      <td>Dussehra</td>
      <td>Mandatory Holiday</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td ></td>
      <td>October</td>
      <td>24 Oct,2022</td>
      <td>Friday</td>
      <td>Diwali</td>
      <td>Mandatory Holiday</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td ></td>
      <td>November</td>
      <td>8 Nov,2022</td>
      <td>Tuesday</td>
      <td>Guru Nanak Jayanti</td>
      <td>Mandatory Holiday</td>
    </tr>
  </tbody>
</table>
</section>
</body>
</html>
@endsection