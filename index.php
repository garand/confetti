<?php include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php'; ?>

<body class="login">
  <h1 class="logo">Confetti</h1>
  <form action="" method="post">
    <label for="email">Email Address</label>
    <input type="text" id="email" name="email">
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <input type="submit" value="Login">
    <a href="/login/forgot-password">Forgot Password?</a>
  </form>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'; ?>
