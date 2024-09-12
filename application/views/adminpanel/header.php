<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" /> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css">

    <title>Admin Panel</title>
  </head>
  <body>
    
    <nav class="flex-wrap bg-indigo-400 p-6 navbar fixed-top flex-md-nowrap p-0  text-white">
  <a class=" font-semibold navbar-brand col-sm-3 col-md-2 mr-0 text-xl" >Blog App</a>
  <input class="form-control form-control-dark w-100 placeholder-indigo-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link font-semibold" href="<?= base_url().'admin/login/logout' ?>">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-white sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column ">
          <li class="nav-item font-sans">
            <a class="nav-link  " href="<?= base_url().'admin/dashboard' ?>">
              <!-- <span data-feather="home"></span> -->
              Dashboard <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url().'admin/blog/addblog' ?>">
              <!-- <span data-feather="file-plus"></span> -->
              Add Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url().'admin/blog/' ?>">
              <!-- <span data-feather="file-text"></span> -->
              View Blog
            </a>
          </li>
          
        </ul>

       
      </div>
    </nav>