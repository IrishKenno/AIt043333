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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="font-size: 15px;" class="nav-link active " aria-current="page" href="index.php">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link  text-white" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="#">Pricing</a>
        </li> -->
        <li class="nav-item">
          <a style="font-size: 15px;" class="nav-link " href="formreg.php" tabindex="-1" aria-disabled="true">Register<i class="bi bi-person-circle"></i></a>
        </li>
      </ul>
    </div>
    <!-- <i class="bi bi-people"></i> -->
    <button class="btn btn-outline-secondary" type="submit"> <i class="IO"><i class="bi bi-person-check-fill"></i></i>Login</button>
  </div>
</nav>

    <main>
        <div class="container ">
            <div class="card">
                <div class="card-header bg-secondary bg-gradient text-light">
                Register Form
                </div>
        <div div class="card-body">
            <form name ="form1" action="insert.php" method="post">
                <div class="row">
                    <div class="col-md-2">
                    <label for="exampleFormControlInput1" class="form-label" >Name Prefix</label>
                    <select name="txt_firstname" id="txt_firstname" class="form-select">
                        <option selected>Name Prefix</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                    </select></div>
                    
                    <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label" >Name</label>
                    <input  class="form-control" type="text" name="txt_name" id="txt_name"placeholder="Please specify Name"></div>
                    <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label" >Lastname</label>
                    <input  class="form-control" type="text" name="txt_lastname" id="txt_lastname"placeholder="Please specify Lastname"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><br>
                    <label for="exampleFormControlInput1" class="form-label" >Gender</label>
                    <div>
                    <input  class="form-check-input" type="radio" name="txt_sex" id="txt_sex" value="Male" >&nbsp;Male&ensp;
                    <input  class="form-check-input" type="radio" name="txt_sex" id="txt_sex" value = "Female">&nbsp;Female</div>
                    </div>

                    <div class="col-md-3"><br>
                    <label for="exampleFormControlInput1" class="form-label" >DD/MM/YYYY</label>
                    <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"
                    placeholder="00/00/0000" data-provide="datepicker" data-date-language="ru-ru"></div>
                    <div class="col-md-7"><br>
                    <label for="exampleFormControlInput1" class="form-label" >Address</label>
                    <textarea class="form-control" name="txt_address" id="txt_address"placeholder="Address"></textarea></div>

                    <div class="col-md-6"><br><label for="exampleFormControlInput1" class="form-label" >Phone-Number</label>
                    <input  class="form-control" type="text" name="txt_number" id="txt_number"placeholder="Phone-Number"></div>
                    <div class="col-md-6"><br><label for="exampleFormControlInput1" class="form-label" >Email</label>
                    <input  class="form-control" type="text" name="txt_email" id="txt_email"placeholder="Email"></div>
                    
                    <center>
                    <!-- < class="col-md-2"><br> -->
                    <br>
                    <button class="btn btn-outline-success" type="submit"> </i>Save</button>&ensp;
                    <button class="btn btn-outline-danger" type="submit"> </i>Cancel</button>&ensp;
                    </center>
                    
                </div>

            </form>
            
        </div>
        </div>
    </div>

    </main>
    <?php include "footer.php"; ?>
</body>
</html>