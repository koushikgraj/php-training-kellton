<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>  Admin Dashboard  </title>
    <link href="css/adstyle.css" rel="stylesheet">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <<a href="{{url('logout')}}"><span class="links_name">Log out</span></a>
            <i class='bx bx-log-out'></i>
            <!-- <span class="links_name">Log out</span> -->
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
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

<!-- Form For admin -->
  <div class="sales-boxes">
        <div class="recent-sales box">
  <span class="style10"><strong>Create New Category</strong></span>
<form action="{{ url('adcategory')}}" method="post" >
  @csrf
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" >Category Name:</td>
                <td>
                  <label>
                  <input type="text" name="CategoryName" id="txtName" />
                  </label>
                  <span class="textfieldRequiredMsg">Enter Category.</span></td>
              </tr>
              <tr>
                <td height="34">Description:</td>
                <td>
                  <label>
                  <textarea name="Description" id="txtDesc" cols="35" rows="3"></textarea>
                  </label>
                <span class="textareaRequiredMsg">Enter Description</span></td>
              </tr>
              <tr>
                <td height="34">Price:</td>
                <td>
                  <label>
                  <textarea name="Price" id="txtDesc" cols="35" rows="3"></textarea>
                  </label>
                <span class="textareaRequiredMsg">Enter Price</span></td>
              </tr>
              <tr>
                <td height="34">Upload Image:</td>
                <td><label>
                  <input type="file" name="Image" id="txtFile" />
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input type="submit" name="button" id="button" value="Submit" />
                </label></td>
              </tr>
</table>
        </form>

</div></div>

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
