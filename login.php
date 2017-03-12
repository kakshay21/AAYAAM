<?php 
include'overall/uptonav.php'; 
session_start();
?>
<div class="container">
  <form class="col s12" action="loginscript.php" method="POST"><br><br><br><br>
        <div class="input-field">
          <input name="team_name" type="text" class="validate">
          <label for="team_name">Team Name</label>
        </div>
        <div class="input-field">
          <input name="password" type="password" class="validate">
          <label for="password">Password</label>
      <div class="row">
        <div class="input-field col m4">
          <button class="btn waves-effect waves-light orange" type="submit" name="action">Login
          </button>
        </div>
     </div><br><br>
  </form>
  </div></form></div><br><br><br><br>
<?php include'overall/footer.php'; ?>