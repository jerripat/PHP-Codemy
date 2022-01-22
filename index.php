<?php include('company.php') ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
      <link rel="shortcut icon" type="image/jpg" href="Images/favicon.ico"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <title>Fun with PHP!</title>
    </head>
    <body>
    <style>
        <?php include("CSS/styles.css") ?>
        </style>
      <?php include("navbar.php") ?>
  
    
    <div class="card cardAlign" style="width: 18rem;">
        <img src="images/mateusz.jpg" class="card-img-top" alt="House">
            <div class="card-body">
                <h5 class="card-title">Home on the range</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
    </div>
    <div class="square">
        
</div>
<center>
<?php  echo $companyname ?> <?php include("footer.php")  ?>  All rights reserved
</center>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</html>