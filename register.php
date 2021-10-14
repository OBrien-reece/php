<?php
session_start();
include("includes/header.php");
require("action.php");
?>


<div class="container">
  <div class="col-md-6 m-auto py-3">
    <div class="text-center">
      <h3><strong>Alcatrez</strong></h3>      
      <br><br>
      <h3><strong>Sign up to Alcatrez and enjoy</strong></h3><br>
      <div class="col-md-6 mr-auto ml-auto">

        <button 
        style="border-radius: 22px;
        padding-top: 10px;
        padding-bottom: 10px;" 
        type="submit" 
        class="btn btn-primary btn-block">
        <strong><a style="text-decoration: none;" class="text-light" href="login">Sign in with E-Mail</a></strong>
        </button><br>
        
      </div>

        <div class="row">
        <div class="col-md-5"><hr></div>
        <div class="col-md-2"><h6>or</h6></div>
        <div class="col-md-5"><hr></div>
        </div><br>

        <h5><strong>Sign up with your email addres</strong></h5>

    </div>

    <form method="POST" action="action.php" enctype="multipart/formdata">

      <div class="form-group">
        <label><strong>What's your Email</strong></label>
        <input 
        type="email" 
        name="email" 
        class="form-control border border-dark" 
        style="padding: 25px;"
        placeholder="Enter your Email.">
      </div>

      <div class="form-group">
        <label><strong>Create a password</strong></label>
        <input 
        type="password" 
        name="password" 
        class="form-control border border-dark" 
        style="padding: 25px;"
        placeholder="Create a password.">
      </div>     

      <div class="form-group">
        <label><strong>Confirm your password</strong></label>
        <input 
        type="password" 
        name="Cpassword" 
        class="form-control border border-dark" 
        style="padding: 25px;"
        placeholder="Confirm your password.">
      </div>      

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label><strong>Enter your first name</strong></label>
            <input 
            type="text" 
            name="fname" 
            class="form-control border border-dark" 
            style="padding: 25px;"
            placeholder="e.g Evans.">
          </div>           
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label><strong>Enter your last name</strong></label>
            <input 
            type="text" 
            name="lname" 
            class="form-control border border-dark" 
            style="padding: 25px;"
            placeholder="e.g Indeche.">
          </div>
        </div>           
        </div>        
       
       <h6 class="text-center" style="color: green;">
        <small>By clicking on sign-up, you agree to Spotify's Terms and Conditions of Use.</small>
       </h6>

       <h6 class="text-center" style="color: green;">
        <small>
        To learn more about how Spotify collects, uses, shares and protects your personal data, please see ........
        </small>
       </h6>

       <br>

       <div class="col-md-4 mr-auto ml-auto">
        <button 
        style="border-radius: 35px;
        padding-top: 15px;
        padding-bottom: 15px;" 
        type="submit" 
        name="registerUserBtn" 
        class="btn btn-success btn-block">
        <strong>Sign up</strong>
        </button><br>
        
      </div>

    </form>
  </div>
</div>
</div>





<?php
include("includes/scripts.php");
include("includes/footer.php");
?>