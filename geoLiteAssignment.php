<?php
include('header.php');
require_once 'vendor/autoload.php';

use GeoIp2\Database\Reader;

$outputMessage = "";
if (isset($_POST['ip_addressv4']) || isset($_POST['ip_addressv6'])) {

    if (!empty($_POST['ip_addressv4'])) {
        $ipAddress = $_POST['ip_addressv4'];
    } else {
        $ipAddress = $_POST['ip_addressv6'];
    }


    function outputMessage($param)
    {
        $message = "";
        if (!empty($param['country_code'])) {
            $message = $message . "Country code: " . $param['country_code'] . "<br>";
        }
        if (!empty($param['postal_code'])) {
            $message = $message . "Postal code: " . $param['postal_code'] . "<br>";
        }
        if (!empty($param['city_name'])) {
            $message = $message . "City Name: " . $param['city_name'] . "<br>";
        }
        if (!empty($param['time_zone'])) {
            $message = $message . "Time Zone: " . $param['time_zone'] . "<br>";
        }
        if (!empty($param['accuracy_radius'])) {
            $message = $message . "Accuracy Radius: " . $param['accuracy_radius'] . "<br>";
        }

        if ($message === '') {
            $message = '<div class="alert alert-danger">No Data found</div>';
        } else {
            $message = '<div class="alert alert-success">' . $message . '</div>';
        }
        return $message;
    }




    $reader = new Reader('GeoLite2-City.mmdb');
    /* $record = $reader->city('2c0f:ff30::'); */
    try {
        $record = $reader->city($ipAddress);
        $output = [];
        $output['country_code'] = $record->country->isoCode;;
        $output['postal_code'] = $record->postal->code;
        $output['city_name'] =  $record->city->name;
        $output['time_zone'] =  $record->location->timeZone;
        $output['accuracy_radius'] =  $record->location->accuracyRadius;


        $outputMessage = outputMessage($output);
    } catch (Exception $e) {
        $outputMessage = '<div class="alert alert-danger">No Geo Data found for this ip: ' . $ipAddress . '</div>';
    }
}

?>
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
<?php
include('footer.php');
?>
