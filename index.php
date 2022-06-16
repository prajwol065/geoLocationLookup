<?php

include('geoLiteAssignment.php');


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>MaxMind Geo Lite City Assignment</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <div class="container">
        <img id="bg" src="images/geography.jpg">
        <div id="wrapper">
            <h1 id="geoHeading" class="display-2">GeoLite 2 Ip address Lookup</h1>
            <div class="lead" id="mesageBox"><?php echo $outputMessage; ?></div>
            <p id="geoIntro" class="lead">Please enter the ip address either ipv4 or ipv6 to retrieve geo information</p>
            <form method="post">
                <div class="row">
                    <div class="col-md-6">

                        <input class="form-control active" type="text" id="ip_addressv4" name="ip_addressv4" placeholder="eg. 192.168.10.10">
                        <input class="form-control hidden" type="text" id="ip_addressv6" name="ip_addressv6" placeholder="eg. 2c0f:feb0:2000::">
                    </div>
                    <div class="col-md-6">
                        <button id="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <button id="ip_selector" class="btn btn-info">Switch To IPV6</button>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="script.js" type="text/javascript"></script>
</body>

</html>