<?php 
session_start();
include'overall/uptonav.php'; 
?>
 <div class="container">
    <form action="signupscript.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name="team_name" type="text" class="validate">
          <label for="team_name">Team Name</label>
        </div>
        <div class="input-field col s6">
          <input name="head_name" type="text" class="validate">
          <label for="head_name">Team Head Name</label>
        </div>
      </div>
            <div class="row">
        <div class="input-field col s12">
          <input name="email" type="email" class="validate">
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light orange" type="submit" name="action">Register
      </button>
    </form>
  </div>
<br><br>
<?php include'overall/footer.php'; ?>
