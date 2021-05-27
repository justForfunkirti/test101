<!DOCTYPE html>
<html>
<head>
     <title></title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="persuitofhappiness.jpg" alt="Persuit of Happiness" width="1800" height="500" controls>
      <div class="carousel-caption">
        <h3>Persuit of Happiness</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="pirates_of_the_caribian.webp" alt="Chicago" width="1800" height="500">
      <div class="carousel-caption">
        <h3>Pirates of the caribian</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="generation_aami.jfif" alt="New York" width="1800" height="500">
      <div class="carousel-caption">
        <h3>Generation Aami</h3>
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-12">
             <img src="persuitofhappiness.jpg" class="img-fluid aboutimg">
           </div>
           <div class="col-lg-6 col-md-6 col-12">
             <h2 class="display-4">This is for you ;)</h2>
             <p class="py-3">Its for all who loves movies,musics,webseries. There you go it is all yours!!!</p>
             <a href="about.php" class="btn btn-success">Check More</a>
           </div>
         </div>
    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
               <img class="card-img-top" src="pirates_of_the_caribian.webp" alt="Card image">
               <div class="card-body">
                <h4 class="card-title">Pirates of he Caribian</h4>
                <p class="card-text">Part2</p>
                <a href="poc1.php" class="btn btn-primary">Watch Movie/Download</a>
               </div>
            </div>
             
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
               <img class="card-img-top" src="angrezi_medium.jfif" alt="Card image">
               <div class="card-body">
                <h4 class="card-title">Angrezi Medium</h4>
                <p class="card-text">Hindi</p>
                <a href="angrezim.php" class="btn btn-primary">Watch Movie/Download</a>
               </div>
            </div>
             
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
               <img class="card-img-top" src="13-Reasons-Why_s1_e1.jpg" alt="Card image">
               <div class="card-body">
                <h4 class="card-title">13 Reasons Why</h4>
                <p class="card-text">Series</p>
                <a href="13rsw.php" class="btn btn-primary">Watch Movie/Download</a>
               </div>
            </div>
             
          </div>
          
       </div>
       
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Galary</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
           <div class="col-lg-4 col-md-4 col-12">
             <img src="persuitofhappiness.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="persuitofhappiness.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="persuitofhappiness.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="persuitofhappiness.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="persuitofhappiness.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="persuitofhappiness.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="persuitofhappiness.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="persuitofhappiness.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="persuitofhappiness.jpg" class="img-fluid pb-4">
           </div>
      </div>
       
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Suggesions</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
         <div class="form-group">
          <label>Username</lable>
          <input type="text" name="user" autocomplete="off" class="form-control ml-10" cols="100" rows="10">
         </div>
        <div class="form-group">
          <label>Email Id</lable>
          <input type="text" name="email" autocomplete="off" class="form-control" cols="10" rows="10">
        </div>
        <div class="form-group">
          <label>Mobile</lable>
          <input type="text" name="mobile" autocomplete="off" class="form-control" cols="10" rows="10">
        </div>
        <div class="form-group">
          <label>Suggestins</lable>
          <textarea class="form-control" name="comment" cols="70" rows="5">
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

         
      </form>
    </div>
</section>

<footer>
   <p class="p-3 bg-dark text-white text-center">This is all</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>