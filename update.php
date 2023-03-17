<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
            <?php
             include 'database.php';
              $id = $_GET['updateid'];
              $sql="SELECT * FROM portfolio_db WHERE id=$id";
              $result=mysqli_query($con,$sql);
              $row = mysqli_fetch_assoc($result);
              $name=$row['name'];
              $email=$row['email'];
              $phone=$row['phone'];
              $body=$row['body'];


                if(isset($_POST['submit'])){
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $phone = $_POST['phone'];
                  $body = $_POST['body'];

   $sql = "UPDATE `portfolio_db` SET id='$id',name='$name',email='$email',
  phone='$phone',body='$body' WHERE id='$id'";
  $result=mysqli_query($con,$sql);

   if($result){
    echo "Update Succesfully";
    header('Location:index.php#projects');
   }else{
      die(mysqli_error($con));
   }
}

?>


 <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name*</label>
    <input type="text" name="name" class="form-control mb-3" placeholder="Enter Your Name" 
    autocomplete="off" value="<?php echo $name; ?>"></div>
  <div class="form-group">
    <label>Email*</label>
    <input type="email" name="email" class="form-control mb-3" placeholder="Enter Your Email"
     autocomplete="off" value="<?php echo $email; ?>"></div>
  <div class="form-group">
    <label>Phone No*</label>
    <input type="phone" name="phone" class="form-control mb-3" value="<?php echo $phone; ?>" 
    placeholder="Enter Your Mobile Number" autocomplete="off"></div>
  <div class="form-group">
    <label>Message</label>
    <input type="text" name="body" class="form-control mb-3" placeholder="Send us Message" 
    autocomplete="off" value="<?php echo $body; ?>"></div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
    </div>
  </section>
 <hr class="m-0" />
</body>
</html>
