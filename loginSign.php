<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MOODIFY</title>
    <link rel="stylesheet" href="loginSign.css">


  </head>
  <body>
    <script src="index.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
   <!-- 
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <form class="login" action="fetch.php" method="POST">
            <label for="username">Username</label><br>
            <input type="text" name="username" required><br><br>
            <label for="pass">Password</label><br>
            <input type="password" name="pass" required><br><br>
            <a href="forgot.php">Forgot Password?</a>&nbsp;&nbsp;
            <button type="submit" class="btn" id="submit-btn">Login</button>
          </form>
        </div>
        <div class="col-sm-6">
          <form class="signup" action="insert.php" method="POST">
            <label for="username">Username</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="gender">Gender</label><br>
            <input type="text" name="username" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Other">
            <label for="Other">Other</label><br><br>
            <label for="email">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="age">Age</label><br>
            <input type="email" name="email" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="age" required><br><br>
            <label for="pass">Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="cpass">Confirm Password</label><br>
            <input type="password" name="pass" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="cpass" required><br><br>
            <a href="forgot.php">Already a member login?</a>&nbsp;&nbsp;
            <button type="submit" class="btn" id="submit-btn">Signup</button>
            <input type="reset" value="Reset">

          </form>
        </div>
      </div>
    </div> -->
    <div class="section ">
		  <div class="container">
      <div class="mysec">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
			      <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			      <label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
              
                <form action="fetch.php" method="POST">
								<div class="card-front ">
									<div class="center-wrap">
										<div class="section text-center">
                    
											<h4 class="mb-4 pb-3">Log In</h4>
							
                        <label for="username"></label>
												<input type="username" name="username" class="form-style" placeholder="Your Username" id="username" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
									

                      <label for="pass"></label>
												<input type="password" name="pass" class="form-style" placeholder="Your Password" id="pass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i><br><br>
										
                        <button type="submit" class="btn" id="submit-btn">Login</button>
                        <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
                    </form>
                
         
								       <div class="card-back">
									      <div class="center-wrap">
										    <div class="section text-center">
                       <form  action="insert.php" method="POST">
											<h4 class="mb-4 pb-3">Sign Up</h4>
                      <label for="username"></label>
												<input type="text" name="username" class="form-style" placeholder="create a username" id="username" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
									
                        <label for="email"></label>
												<input type="email" name="email" class="form-style" placeholder="Your Email" id="email" autocomplete="off">
												<i class="input-icon uil uil-at"></i>

                        <!-- <label for="age"></label>
												<input type="text" name="age" class="form-style" placeholder="Enter your age" id="age" autocomplete="off">
												<i class="input-icon uil uil-lock-al t"></i> -->
										
										
                        <label for="pass"></label>
												<input type="password" name="pass" class="form-style" placeholder="create a strong password" id="pass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i><br><br>
											
                        <button type="submit" class="btn" id="submit-btn">Signup</button>
                          </form>
         
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
        </div>
	    </div>
	</div>
</body>
</html>

   