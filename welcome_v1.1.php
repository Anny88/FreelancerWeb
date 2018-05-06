<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
    
<header class = "container">
    <div class = "row">
      <nav class = "col-sm-4 text-left">
         <p>MAIN</p> 
      </nav>
      <nav class="col-sm-8 text-right">
        <p>LOG IN</p>
        <p>SIGN UP</p>
      	<p>CONTACT</p>
      </nav>
    </div>
</header>  
 
<section class = "container" >    
  <div class="col-sm-6 col-sm-offset-3 form-wrap">
      <div class="col-sm-12" style="display:inline-block; padding:20px; font-size:20px;" align="center">
        <h3>Welcome to the website Burgerboss.</h3>
        <h4>Log in or sign up to proceed.</h4>
      </div>
      <div  class="container-fluid">
        <div  class="col-sm-3 col-sm-offset-3" style="display: inline-block; padding:10px;margin-bottom:2rem;" align="center">  
          <form action="login.php">
            <button type="submit" class="btn btn-default">Log In</button>
          </form>
        </div>   
        <div  class="col-sm-3 col-sm-offset-0 " style="display: inline-block; padding:10px;margin-bottom:2rem;" align="center">    
          <form action="signup.php">
            <button type="submit" class="btn btn-default" >Sign Up</button>
          </form>
        </div>    
      </div>
   </div>
 </section>    
    
 <footer class="container">
  <div class="row">
    <div class = "col-sm-8">
    </div>  
    <p class="col-sm-4">&copy; AKCorporation. All rights reserved.</p> 
  </div>
</footer>

</body>
</html>
