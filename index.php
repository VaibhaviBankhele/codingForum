<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
         #ques {
          min-height:433px;
         }
          </style>
        

    <title>iDiscuss - Coding Forums</title>
</head>

<body>
<?php  include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
    
    <!-- slider starts here-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="html3.jpg"style="height:350px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="html.jpg"style="height:350px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="html2.jpg" style="height:350px" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Category container starts here -->
    <div class="container my-3" id="ques">
        <h2 class="text-center my-3"> iDiscuss - Browse Categories</h2>
        <div class="row">
          <!-- Fetch all the categories -->
           <!-- //Use a for loop to iterate  through Categories-->
          <?php  
          $sql= "SELECT * FROM `category`";
          $result =mysqli_query($conn , $sql);

          while($row=mysqli_fetch_assoc($result)){
           // echo $row['category_id'];
           $id=$row['category_id'];
           $cat=$row['category_name'];
           $desc= $row['category_description'];
           echo '<div class="col-md-4 my-2">
                <div class="card " style="width: 18rem;">
                    <img src="card-'.$id.'.jpg" style="height:170px" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title"><a href="threadlist.php?catid= '.$id .'">'.$cat .'</a></h5>
                        <p class="card-text">'. substr($desc,0,90) .'...</p>
                        <a href="threadlist.php?catid='. $id.'" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>';


          }
          
          
          ?>
           
            

        </div>
    </div>



    <?php include 'partials/_footer.php'; ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>