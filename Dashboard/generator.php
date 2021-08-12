

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   Saley.Inc || Qr-Generator
  </title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


</head>

<body class="">
  <div class="wrapper" style="padding: 5%;">
   
 

      <!-- Navbar -->
      <div class="container">
            <h4>Generate Qr-Code </h4>
          
                    <div class="row" style="margin:10%;">
                      <div class="col align-self-center">
                        <form method="post">
                            <div class="input-group">
                                <label for="exampleFormControlSelect1">url</label>
                                <input type="url" class="form-control" name="url" required>
                            </div>
                            <div class="form-group" style="margin-top: 10px; justify-content: center;"><button type="submit" class="btn btn-primary" name="generate">Generate</button></div>
                            
                          </form>
                       
                        </div>
                        <div class="col align-self-center">
                        
                        <?php 
                           if(isset($_POST['generate'])) 
                           {
                           $data = trim($_POST['url']); 
                           echo "<h2>Qr-Code Generated</h2>"; 
                           echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=$data' height=250 width=250/>"; 
                           }
                        
                        
                        
                        ?>
                        
                        </div>
                    
                
                      </div>
          
      
      </div>
    </div>
  </div>


</body>

</html>