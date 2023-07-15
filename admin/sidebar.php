<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
  margin: 0;
font-family: 'Averia Gruesa Libre';font-size: 15px;
    color:#F8F9F9;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 210px;
  background-color: #333333;
  position: fixed;
  height: 100%;
  overflow: auto;

}

.sidebar a {
  display: block;
  color: white;

  padding: 16px;
  text-decoration: none;
}



.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

a.act{
background: linear-gradient(to right, #00C9FF 0%, #92FE9D 100%);
color: black;
border-radius:10px;
}

</style>
</head>
<body>

<div class="sidebar" ><b>
  <a href="dashboard.php"   <?php if($active=='dashboard') echo "class='act'"; ?>><span class="glyphicon glyphicon-dashboard"></span>&nbsp&nbspDashboard</a>
  <a href="donor_list.php"   <?php if($active=='list') echo "class='act'"; ?>><span class="glyphicon glyphicon-list-alt"></span>&nbsp&nbsp Donor List</a>
</div>
