<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" /> -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <Link rel="stylesheet" href="https://getbootstrap.com/docs/4.6/examples/sign-in/signin.css">
  <title>Login</title>
</head>

<body class="h-screen flex items-center justify-center bg-white">
  
  <div class="w-full max-w-xs ">
  <h1 class="font-sans text-4xl text-gray-800 text-center font-extrabold">Please sign in</h1><br>
  <form class="border-2 border-indigo-400bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?= base_url() . 'admin/login/login_post' ?>" method="POST">
  <?php
      if ($error != "No_Error") {
        echo '<div class="alert alert-danger" role="alert">';
        echo "$error";
        echo '</div>';
      }
    ?>
    <div class="mb-4">
      <label class="font-sans block text-gray-700 text-sm font-bold mb-2" for="inputEmail">
        Username
      </label>
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-400" type="text" name="email" id="inputEmail" placeholder="Username" required=""
      autofocus="">
    </div>
    <div class="mb-6">
      <label class="font-sans block text-gray-700 text-sm font-bold mb-2" for="inputPassword">
        Password
      </label>
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-400" type="password" name="password" id="inputPassword" placeholder="Password"
      required="">
    </div>
    <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-indigo-400 hover:bg-indigo-200 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Sign In
      </button>
    </div>
  </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    © 2017-2024 All rights reserved.
  </p>
</div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
