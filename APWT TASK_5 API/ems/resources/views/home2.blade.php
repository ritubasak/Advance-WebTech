<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  position: relative; 
}
#section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
#section2 {padding-top:50px;height:500px;color: black; background-color: #673ab7;}
#section3 {padding-top:50px;height:500px;color: black; background-color: #ff9800;}
#section41 {padding-top:50px;height:500px;color: black; background-color: #00bcd4;}
#section42 {padding-top:50px;height:500px;color: black; background-color: #009688;}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 17px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: green;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 260px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.topnav-right {
  float: right;
}

* {
  box-sizing: border-box;
}


  form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;

  border-top-left-radius: 10px 10px;
  border-bottom-left-radius: 10px 10px;
  
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  
  border-top-right-radius: 10px 10px;
  border-bottom-right-radius: 10px 10px;

  
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}


#myDIV {
  height:150px;
  background-color:#1E88E5;
  font-size: 70px;
  font-family: "Times New Roman", Times, serif;

}


#myDIV1 {
  width:500px;
  padding: 5px;
  font-size: 70px;
  margin: 40px;
  height:350px;
  text-shadow: 2px 2px #ffffff;

}


.button {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 10px 40px;
  text-align: center;
  text-decoration: none;
  border-radius: 27px;
  display: inline;

}

.button:hover {
  background-color: #f1f1f1;
}
.float-container {
    
    padding: 20px;
}

.float-child {
    width: 50%;
    float: left;
    padding: 20px;
    
}  
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="navbar">
  <a class="navbar-brand" href="#">
  <img src="{{url('/Logo/school.jpg')}}" alt="Image"style="width:40px;">
  </a>


  <div class="dropdown">
    <button class="dropbtn">Tutorials
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 


  <div class="dropdown">
    <button class="dropbtn">References
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 


  <div class="dropdown">
    <button class="dropbtn"> Exercises
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <li class="topnav-right">
    
      <a class="topnav-right" href="#">Login</a>
  </li>
  <li class="topnav-right">
      <a class="topnav-right" href="#">Paid Courses</a>
  </li>

</div>
</div>



<div id="section1" class="container-fluid">
<form  style="margin:auto;max-width:450px">
<div id="myDIV">Learn To Code
</div>

</form>
<form class="example" action="/action_page.php" style="margin:auto;max-width:500px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <input type="text" placeholder="Search.." name="search2" >
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>

<div id="section2" class="container-fluid">
<div class="float-container">

<div class="float-child">
  <div class="green">
  <div id="myDIV1"> <center> <strong>HTML</strong></center>
  <center><button class="button"> <a href="https://www.w3schools.com/">Learn HTML</a> </button></center>
  <center><button class="button">HTML References</button></center>
  <center><button class="button">Learn HTML</button></center>
</div>
  </div>
</div>

<div class="float-child">
  <div class="blue">
  <div class="floatRight">
<img src="{{url('/Logo/html.png')}}" alt="Image" style="width:500px;padding: 5px;font-size: 70px;
  margin: 40px;height:300px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
</div>
  </div>
</div>

</div>
</div>

</div>



<div id="section3" class="container-fluid">
<div class="float-container">

<div class="float-child">
  <div class="green">
  <div id="myDIV1"> <center> <strong>CSS</strong></center>
  <center><button class="button">Learn CSS</button></center>
  <center><button class="button">CSS References</button></center>

</div>
  </div>
</div>

<div class="float-child">
  <div class="blue">
  <div class="floatRight">
<img src="{{url('/Logo/css.png')}}" alt="Image" style="width:500px;padding: 5px;font-size: 70px;
  margin: 40px;height:300px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
</div>
  </div>
</div>

</div>
</div>

</div>



<div id="section41" class="container-fluid">
<div class="float-container">

<div class="float-child">
  <div class="green">
  <div id="myDIV1"> <center> <strong>JavaScript</strong></center>
  <center><button class="button">Learn JavaScript</button></center>
  <center><button class="button">JavaScript References</button></center>

</div>
  </div>
</div>

<div class="float-child">
  <div class="blue">
  <div class="floatRight">
<img src="{{url('/Logo/js.png')}}" alt="Image" style="width:500px;padding: 5px;font-size: 70px;
  margin: 40px;height:300px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
</div>
  </div>
</div>

</div>
</div>

</div>

<div id="section42" class="container-fluid">
<div class="float-container">

<div class="float-child">
  <div class="green">
  <div id="myDIV1"> <center> <strong>SQL</strong></center>
  <center><button class="button">Learn SQL</button></center>
  <center><button class="button">SQL References</button></center>

</div>
  </div>
</div>

<div class="float-child">
  <div class="blue">
  <div class="floatRight">
<img src="{{url('/Logo/sql.png')}}" alt="Image" style="width:500px;padding: 5px;font-size: 70px;
  margin: 40px;height:300px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
</div>
  </div>
</div>

</div>
</div>

</div>



</body>
</html>
