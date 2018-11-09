<?php
  $connection = mysqli_connect('localhost', 'root', '','travellucky');

  if(!$connection)
  {
    die("Gak bisa ni");
  }

  if(isset($_POST['submit']))
  {
    $tanggal = mysqli_real_escape_string($connection, $_POST['tanggal']);
    $trip = mysqli_real_escape_string($connection, $_POST['trip']);
    $query = "SELECT * FROM seat";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result))
    {
      echo $row['id_posisiduduk'];
    }
  }
//LALALA
?>

<!DOCTYPE html>
<html>
<head>
  <!-- html tab kotak  -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Lucky</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
  <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- bootstrap datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
      <h1>Travel Lucky</h1>
      <form class="formpertama" method="post" action="">
          <div class="form-group row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
            </div>
          </div>
          <div class="form-group row">
            <label for="trip" class="col-sm-2 col-form-label">Trip</label>
            <div class="col-sm-10">
                <select class="form-control" id="trip" name="trip">
                    <option value="1">Jakarta - Bandung</option>
                    <option value="2">Bandung - Jakarta</option>
                  </select>
            </div>
          </div>
          <button type="submit" class="search-button btn btn-primary btn-lg float-right" name="submit">Search</button>
        </form>
        
  </div>
  <script>
    $('#tanggal').datepicker({
            uiLibrary: 'bootstrap4'
        });    
  </script>
</body>
</html>
