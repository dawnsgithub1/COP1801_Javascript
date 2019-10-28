<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="projectsyles.css">
  <title>ContactUs</title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand"><img src="OrioleMusic.jpg" alt="Logo" style="width:50px;height:50px;border:1;"</a>
      </div>
      <h1 href="#default" class="center" valighn="bottom">NFDL Music Programs</a></h1>
    </div>
  </nav>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="Index.php">Home</a></li>
        <li><a href="AboutUs.php"target="_blank">About Us</a></li>
        <li><a href="MusicOpportunities.php"target="_blank">Music Opportunities</a></li>
        <li><a href="Events.php"target="_blank">Events</a></li>
        <li class="active"><a href="ContactUs.php"target="_blank">Contact Us</a></li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <h3>NFDL School Music Teacher Contact information</h3>
      <p>
        <?php
          include 'mod3_config.php';
          include 'mod3_opendb.php';

          $sql= "SELECT FirstName, LastName, EmailAddress FROM contact LIMIT 10";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo "FirstName: " . $row["FirstName"]. "<br>";
            echo "LastName: " . $row["LastName"]. "<br>";
            echo "EmailAddress: " . $row["EmailAddress"]. "<br><hr>";
          }
        } else {
          echo "0 results";
        }

        mysqli_close($conn);

      ?>
    </p>
  </div>
  <div class="footer">
    <h6 align="left"><font face="verdana" size="1" color=#FBF8EF>&copy;Dawn Scott NFDL Musicical WebPage</h6>
    <h6 align="center"><font face="verdana" size="5" color=#FBF8EF>Contact Us</h6>
  </div>
</body>
</html>
