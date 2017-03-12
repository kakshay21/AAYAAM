<?php 
include'overall/uptonav.php'; 
?>
<div class="container">
  <form class="col s12" action="write.php" method="POST">
        <div class="input-field">
          <input name="quesid" type="text" class="validate">
          <label for="quesid">Question No</label>
        </div>
        <div class="input-field">
          <input name="ques" type="text" class="validate">
          <label for="ques">Question</label>
        </div>
        <div class="input-field">
          <input name="ans" type="text" class="validate">
          <label for="ans">Answer</label>
        <div class="input-field col s12 m4">
          <button class="btn waves-effect waves-light orange" type="submit" name="action">Submit
          </button>
        </div>
  </form>
  </div></form></div><br><br>
<?php include'overall/footer.php'; ?>