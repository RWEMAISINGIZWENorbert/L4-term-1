<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="login_validation.php" method = 'POST'>
         <label for="">username</label>
         <input type="text" name="username"> <br>
         <label for="">Password</label>
         <input type="password" name="password"><br>
         <input type="submit" value="Login">

         <div>
            New user ? <a href="create_account.php">create account here</a><br> <br>
            Order the product <a href="order_product.php">order</a>
         </div>
      </form>
</body>
</html>