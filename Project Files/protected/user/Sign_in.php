<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
  $postData =
    ['username' => $_POST['username'], 'password' => $_POST['password']];

  if (empty($postData['username']) || empty($postData['password'])) {
    echo "Username or password is missing!";
  } else if (!UserLogin($postData['username'], $postData['password'])) {
    echo "Wrong username or password!";
  }
  $postData['password'] = "";
}
?>
<div class="container">
  <h1 class="h1edit"> Login </h1>
  <center>
    <hr class="mb-5 mt-3" style="width:10%">
  </center>

  <div class="col-d-10 mx-auto col-lg-4 ">
    <form class="p-4 p-md-5 border rounded-3 bg-light" method="post">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="loginUsername" aria-describedby="usernameHelp" placeholder="Username" name="username" value="<?= isset($postData) ? $postData['username'] : ''; ?>">
	<label for="loginUsername">Username</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="loginPassword" name="password" value="" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <!-- can be implemented later -->
      <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
      </div> -->
      <button class="w-100 btn btn-lg btn-primary mt-4" type="submit" name ="login">Sign In</button>
      <hr class="my-4">
      <center> <small class="text-muted">if you don't have account, you can
          <span> <a href="?P=Sign_Up" style="color: black;">sign up</a></span>.</small><br>
        <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
      </center>
    </form>
  </div>
</div>