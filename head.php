<html>

<head>


<style>

.header {
  overflow:hidden;
  background-color: #333;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#FF0404  ;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link  */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color:#FF0404  ;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}


/* Float the link section to the right */
.header-right {
  float: right;
}


/* Style the active/current link*/
a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius:30px;
}
a.logo2{
  background-color: #333;
}
</style>
</head>

<body>
  <div class="header">
    <a href="" class="logo"<?php  echo "class='logo2'"; ?>>Blood Donation Detail System </a>
    
    <div class="header-right">
    <a href="home.php"  <?php if($active=='home') echo "class='act'"; ?>>Home</a>  
    <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?> >About Us</a>
    <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <!-- <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a> -->
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
    </div>
  </div>

</body>
</html>

