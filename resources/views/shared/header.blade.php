<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <style>
        *{
    margin: 0px;
    padding: 0px;
}
body {
    font-size: 14px;
    font-family: verdana;

}
#heading{
    float: left;
    width: 640px;
}
#heading a {
    line-height: 65px;
    text-decoration: none;
    padding-left: 60px;
    color:#FFF;
    font-family: aardvark cafe;
    font-size: 40px;
}
#menu {
   
    width: 100%;
    height: 60x;
    margin: 0px;
    padding: 0px;
    
}
#menu ul {
    list-style: none;

}
#menu ul li {
    float: left;
    line-height: 65px
}
#menu ul li a {
    float:left; 
    width:100px; 
    display:block; 
    text-align:center; 
    color:#FFF; 
    text-decoration:none; 
}
#menu ul ul {
    display:none; 
    list-style:none; 
    position:absolute; 
    background-color:#26C4C2;
    float: none;
    top:65px; 
    width:190px;
}
#menu ul li a:hover {
    background-color:#2E9EA2; 
    display:block;
}
#menu ul li:hover ul {
    display:block;
}
#menu ul ul li a {
    display:block;
    padding-left:30px; 
    text-align:left; 
    width:190px;
    height: 60px;
    line-height: 60px;
}
#menu ul ul li a:hover {
    color:#fff;
}
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="menu">
    <div class="container-fluid">
        <a  class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collaps" data-bs>
      <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent" id="heading">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home"> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="blog">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="siswa">Siswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="guru">Guru</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="user">User</a>
        </li>
</div>
</nav>




