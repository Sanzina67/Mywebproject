<html>
<head>
	<title>Front page of my system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<div class="dropdown">
       <nav>
       	<div class="logo">
       	<img  src="logo.png">
       	<h4 style="color:white;">Online Libaray Management System</h4>
       </div>

       	<ul>
       		<li><a href="index.html">Home</a></li>
       		<li><a href="#">Login</a>
       		  <ul>
       			<li><a href="admin_login.html">Admin login</a></li>
       			<li><a href="user_login.html">User login</a></li>
       		  </ul>
       		</li>
       		<li><a href="#">Registration</a>
       		  <ul>
       			<li><a href="admin_reg.html">Admin registration</a></li>
       			<li><a href="user_reg.html">User registration</a></li>
       		  </ul>
       		</li>
            <li><a href="books.html">Books</a></li>
       		<li><a href="#">Feedback</a></li>

       	</ul>
       </nav>
       <header>
              <section>
                     <div class="login_img">
                     <br>
                            <div class="box1">
                                   <h1 style="text-align: center;font-size: 35px;font-family: Lucida Console;">Library Management System</h1>
                                   <h1 style="text-align: center;font-size: 25px">User Login Form</h1><br>
                                   <form  action="" method="post">
                                          <br>
                                      <div class="login">
                                          <input type="text" name="Username" placeholder="Username" required=""><br><br>
                                          <input type="Password" name="Password" placeholder="Password" required=""><br><br>
                                          <input style="margin:auto 90px; height:25px;width:100px;" type="submit" value="Login">
                                      </div> 
                                   </form>
                                   <p style="color: white; padding-left: 20px;">
                                          <br><br>
                                          <a style="color:white;" href="">Forgot Password?</a> &nbsp &nbsp &nbsp
                                          New to this website?<a style="color:white;" href="user_reg.html">sign Up</a>
                                   </p>
                            </div>
                     </div>
              </section>
       </header>
</div>
</body>
</html>