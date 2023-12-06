<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="assets/img/elang2.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">
<title>
</title>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->
<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
<!-- Nepcha Analytics (nepcha.com) -->
<!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


  </head>


  <body class="g-sidenav-show  bg-gray-100">
    

    

    
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="assets/img/elang2.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Profile</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
 
<li class="nav-item">
  <a class="nav-link text-white " href="http://127.0.0.1:8000/posts">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">Dashboard</span>
  </a>
  </li>    
  </ul>
  </div>
    
</div>
</aside>

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->

<!-- End Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container">
<a class="navbar-brand" href="#"></a>

<button class="navbar-toggler" type="button" data-bs-
toggle="collapse" data-bs-target="#navbarSupportedContent" aria-
controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle

navigation">

<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">


<a class="nav-link active" aria-current="page"

href="#"></a>
</li>
</ul>
<form action="{{ route('logout') }}" method="POST" class="d-flex"

role="search">
@csrf
@method('DELETE')
<button class="btn btn-danger" type="submit">Logout</button>
</form>
</div>
</div>
</nav>
<div class="container">
</div>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div>
<h3 class="text-center my-4">HALAMAN ADMIN</h3>
<hr>

<div class="card border-0 shadow-sm rounded">
<div class="card-body">
<a href="{{ route('posts.create') }}" class="btn 
btn-md btn-success mb-3">TAMBAH POST</a>
<form action="search"class="d-flex" role="search">
        <input name="search"style="font-family: 'Source Sans Pro';border-radius:10px;background:white;height:40px;width:85%;"class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

        <button style="font-family: 'Source Sans Pro';border-radius:10px;margin-top:-40px;float:right;"class="btn btn-outline-success" type="submit">Search</button>
      </form>

<table class="table table-bordered">
<thead>
<tr>
<th scope="col">GAMBAR</th>
<th scope="col">JUDUL</th>
<th scope="col">CONTENT</th>
<!-- <th scope="col">AKSI</th> -->
</tr>
</thead>
<tbody>
@forelse ($posts as $post)
<tr>
<td class="text-center">
<img src="{{ 
asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 
150px">
</td>
<td>{{ $post->title }}</td>
<td>{!! $post->content !!}</td>
<td class="text-center">
<form onsubmit="return
confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
<a href="{{ route('posts.show', 
$post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
<a href="{{ route('posts.edit', 
$post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
@csrf
@method('DELETE')
<button type="submit"
class="btn btn-sm btn-danger">HAPUS</button>
</form>
</td>
</tr>
@empty
<div class="alert alert-danger">
Data Post belum Tersedia.
</div>
@endforelse
</tbody>
</table>
{{ $posts->links() }}

        


            <div class="container-fluid py-4">
                
<!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
<!-- Sidebar Backgrounds -->
<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>











































































<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
  </body>

</html>
