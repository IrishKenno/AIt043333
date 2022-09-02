<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" href="Vermillion.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Vermillion</title>
    <style>
        *{
            font-family: 'Kanit', sans-serif;
            box-sizing: border-box;
            
            
        }
        i.IO{
            margin-right: 20px;
            /* font-size: 25px; */
        }
        img.IO{
          /* width: 1920px; */
          /* height: 1080px; */
          width:100%;
          height: 100%;
        }
        video{
            /* object-fit: cover; */
            position: absolute;
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 1;
        }
        
    </style>
</head>
<body>

<nav style="background-color: white;" class="navbar navbar-expand-lg navbar-light ">
<nav class="navbar navbar-light ">
  <a class="navbar-brand" href="#">
    <img src="Vermillion.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Vermillion
  </a>
</nav>
  <div class="container-fluid">
    <!-- <a style="font-size: 30px;" font-size 30px;" class="navbar-brand text-white" href="#">Vermillion</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="font-size: 20px;" class="nav-link active " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a style="font-size: 20px;" class="nav-link " href="formreg.php" tabindex="-1" aria-disabled="true">Register <i class="bi bi-person-circle"></i></a>
        </li>
        <li class="nav-item">
          <a style="font-size: 20px;" class="nav-link " href="ListMember.php" tabindex="-1" aria-disabled="true">Member List <i class="bi bi-person"></i></a>
        </li>
      </ul>
    </div>
    <!-- <i class="bi bi-people"></i> -->
    <button class="btn btn-outline-secondary" type="submit"> <i class="IO"><i class="bi bi-person-check-fill"></i></i>Login</button>
  </div>
</nav>



</body>
</html>