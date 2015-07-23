<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/template/header.php'; ?>

<body class="login">
  <h1 class="logo">Confetti</h1>
  <form action="">
    <label for="email">Email Address</label>
    <input type="text" id="email" name="email">
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <input type="submit" value="Login">
    <a href="/app/login/forgot-password">Forgot Password?</a>
  </form>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/template/footer.php'; ?>
