<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard</title>
    <link href="css/adstyle.css" rel="stylesheet">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">E-Clothing</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="adproduct">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> -->
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div> -->
      <div class="profile-details">
        <!-- <img src="images/profile.jpg" alt=""> -->
        <span class="admin_name">Aditi Agrawal</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">

      </div>
<!-- Show products for admin -->
 <div class="home-content">
<div class="sales-boxes">
        <div class="recent-sales box">
 <!-- <table class="table table-dark" style="padding:10px; margin:10px;"  border="5px" cellspacing="2px" cellpadding="10px">
  <thead class="thead-dark">  -->
  <div class="container">
  <div class="row">
    <div class="col-12">
    <table class="table" border="1">
      <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">CategoryName</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Edit</th>
    </tr>
    </thead>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->CategoryName}}</td>
      <td>{{$category->Description}}</td>
      <td>{{$category->Image}}</td>
      <td>{{$category->Price}}</td>
      <td>{{$category->Edit}}<a href='edit/{{$category->id}}'>Edit</a></td>
      <td>{{$category->Delete}}<a href="delete/{{$category->id}}">Delete</a></td>
      <!-- <td><a href="{{$category->CategoryId}}">Edit</a></td> -->
    </tr>
  
    @endforeach
</table>
<!-- </div></div></div> -->
  <!-- </thead>
</table> -->

 </div></div></div> 


<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
