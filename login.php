<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=20261012-password-toggle">
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">

<div class="login-container">
<form method="POST" action="app/login.php" class="p-4">
    <h3 class="display-4">LOGIN</h3>
  <?php if (isset($_GET['error'])) {
      $errorMessage = $_GET['error'] === 'unavailable'
          ? 'Login is temporarily unavailable. Please try again later.'
          : 'Incorrect username or password.';
  ?>
    <p class="login-error" role="alert"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8'); ?></p>
  <?php } ?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" autocomplete="username" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <div class="password-input-wrap">
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" autocomplete="current-password" required>
      <button type="button" class="password-toggle" id="passwordToggle" aria-label="Show password" title="Show password" aria-controls="exampleInputPassword1" aria-pressed="false">👁</button>
    </div>
  </div>
  <button type="submit" class="btn-solid theme-primary">Login</button>
</form>
</div>

<script>
const passwordInput = document.getElementById('exampleInputPassword1');
const passwordToggle = document.getElementById('passwordToggle');

passwordToggle.addEventListener('click', () => {
    const shouldShowPassword = passwordInput.type === 'password';
    passwordInput.type = shouldShowPassword ? 'text' : 'password';
    passwordToggle.setAttribute('aria-label', shouldShowPassword ? 'Hide password' : 'Show password');
    passwordToggle.title = shouldShowPassword ? 'Hide password' : 'Show password';
    passwordToggle.setAttribute('aria-pressed', String(shouldShowPassword));
});
</script>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

</body>
</html>