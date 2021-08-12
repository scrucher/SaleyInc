



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
<?php

require_once'includes/link.css.php';

?>


</head>

<body class="">
  <div class="wrapper">
    
<?php

require_once'includes/side_bar.php';

?>



    <div class="main-panel">
      <!-- Navbar -->
      
<?php

require_once'includes/nav_bar.php';

?>




      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        
        
      
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="card card-tasks">
              <div class="card-header ">
                <h6 class="" style="text-align: center !important; font-size: 1.5em;">About us P Tags</h6>
              </div>
              <div class="card-body ">
                <div class="table-full-width ">
                <form method="POST">
                <div class="input-group">
                <label for="exampleFormControlSelect1">Paragraph One</label>
                <textarea type="text" class="form-control" name="p1"></textarea>
            </div>
            <div class="input-group">
            <label for="exampleFormControlSelect1">Paragraph Two</label>
                <textarea type="text" class="form-control" name="p2" ></textarea>
            </div>
            <div class="input-group">
            <label for="exampleFormControlSelect1">Paragraph Three</label>
                <textarea type="text" class="form-control" name="p3"></textarea>
            </div>
                <button type="submit" class="btn btn-primary" name ="about-btn">Submit</button>
            </form>
                </div>
              </div>
            </div>
          </div>
          

          <div class="col-lg-6 col-md-12">
            <div class="card card-tasks">
              <div class="card-header ">
                <h6 class="" style="text-align: center !important; font-size: 1.5em;">About us Li Tags</h6>
              </div>
              <div class="card-body ">
                <div class="table-full-width ">
                <form method="POST">
               <div class="input-group">
                <label for="exampleFormControlSelect1">Arg 1</label>
                <input type="text" class="form-control" name="arg1" >
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">Arg 2</label>
                <input type="text" class="form-control" name="arg2" >
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">Arg 3</label>
                <input type="text" class="form-control" name="arg3" >
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">Arg 4</label>
                <input type="text" class="form-control" name="arg4" >
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">Arg 5</label>
                <input type="text" class="form-control"  name="arg5">
            </div>
                <button type="submit" class="btn btn-primary" name="btn_li">Submit</button>
            </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row" style="margin-top: 10px;">
          <div class="col-lg-6 col-md-12">
            <div class="card card-tasks">
              <div class="card-header ">
                <h6 class="" style="text-align: center !important; font-size: 1.5em;">Why Choose us</h6>
              </div>
              <div class="card-body ">
                <div class="table-full-width ">
                <form>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Select Reasons</label>
                <select class="form-control" id="exampleFormControlSelect1" name="res">
                    <option value="description">Description </option>
                    <option value="reason_1">Reason 1</option>
                    <option value="reason_2 ">Reason 2</option>
                    <option value="reason_3">Reason 3</option>
                </select>
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">Body</label>
                <textarea class="form-control" aria-label="With textarea" class="form-control" name="body"></textarea>
            </div>
                <button type="submit" class="btn btn-primary" name="why-btn">Submit</button>
            </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="card card-tasks">
              <div class="card-header ">
                <h6 class="" style="text-align: center !important; font-size: 1.5em;">Services</h6>
              </div>
              <div class="card-body ">
                <div class="table-full-width ">
                <form>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Select Service</label>
                <select class="form-control" id="exampleFormControlSelect1" name="service">
                    <option value="service_1">Service 1</option>
                    <option value="service_2">Service 2</option>
                    <option value="service_3">Service 3</option>
                    <option value="service_4">Service 4</option>
                    <option value="service_5">Service 5</option>
                    <option value="service_6">Service 6</option>
                </select>
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">title</label>
                <input type="text" class="form-control" name="title" >
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">Body</label>
                <textarea class="form-control" aria-label="With textarea" class="form-control" name="body"></textarea>
            </div>
                <button type="submit" class="btn btn-primary" name="btn_srvc">Submit</button>
            </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 10px;">
          <div class="col-lg-6 col-md-12">
            <div class="card card-tasks">
              <div class="card-header ">
                <h6 class="" style="text-align: center !important; font-size: 1.5em;">Packs </h6>
              </div>
              <div class="card-body ">
              <div class="table-full-width table-responsive">
                <form method="POST">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Select Packs</label>
                <select class="form-control" id="exampleFormControlSelect1" name="pack">
                    <option value="pck_1">pack 1</option>
                    <option value="pack_2">pack 2</option>
                    <option value="pack_3">pack 3</option>
                    <option value="pack_4">pack 4</option>
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">offr 1</label>
                <input type="text" class="form-control" name="offr_1" >
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1" name="offr_2">offr 2</label>
                <input type="text" class="form-control" >
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">offr 3</label>
                <input type="text" class="form-control" name="offr_3" >
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">offr 4</label>
                <input type="text" class="form-control" name="offr_4" >
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1">offr 5</label>
                <input type="text" class="form-control" name="offr_5">
            </div>
            <div class="input-group">
                <label for="exampleFormControlSelect1" name="offre_6">offr 6</label>
                <input type="text" class="form-control" >
            </div>
                <button type="submit" class="btn btn-primary" name="offr-btn" >Submit</button>
            </form>
                </div>
              </div>
            </div>
          </div>
        </div>
          
      
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2020 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Saley.Inc</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Feature Toggle Tools -->
<?php

require_once'includes/toglle.tool.php';

?>


  <!--   Core JS Files   -->
<?php

require_once'includes/script.js.php';

?>
</body>

</html>