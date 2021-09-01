<html>
<head>
	<title>Admin login</title>
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
                            <div class="box2">
                                   <h1 style="text-align: center;font-size: 35px;font-family: Lucida Console;">Library Management System</h1>
                                   <h1 style="text-align: center;font-size: 25px">Admin Registration Form</h1><br>
                                   <form  action="" method="post">
                                      <div class="login">
                                          <input style="margin:auto 25px;"type="text" name="Fisrt_name" placeholder="First Name" required=""><br><br>
                                          <input style="margin:auto 25px;"type="text" name="last_name" placeholder="Last name" required=""><br><br>
                                          <input style="margin:auto 25px;"type="text" name="username" placeholder="Username" required=""><br><br>
                                          <input style="margin:auto 25px;"type="text" name="date_of_birth" placeholder="Date_Of_birth" required=""><br><br>
                                          <input style="margin:auto 25px;"type="text" name="Email" placeholder="Email" required=""><br><br>
                                          <input style="margin:auto 25px;"type="Password" name="Password" placeholder="Password" required=""><br><br>
                                          <input style="margin:auto 110px; height:25px;width:100px;" type="submit" value="Submit">
                                      </div> 
                                   </form>
                                   <p style="color: white; padding-left: 90px;">
          
                                         Already have an account?<a style="color:white;" href="admin_login.html">Login</a>
                                   </p>
                            </div>
                     </div>
              </section>
       </header>
</div>
</body>
</html>