<!-- <?php
require_once 'vendor/autoload.php';
use GeoIp2\Database\Reader;

$outputMessage = "";
if (isset($_POST['ip_addressv4']) || isset($_POST['ip_addressv6'])) {

    if (!empty($_POST['ip_addressv4'])) {
        $ipAddress = $_POST['ip_addressv4'];
    } else {
        $ipAddress = $_POST['ip_addressv6'];
    }
  
    function outputMessage($param, $ipAddress)
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
            $message = '<div class="alert alert-success">For <strong>'.$ipAddress.  ':</strong><br>' . $message . '</div>';
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


        $outputMessage = outputMessage($output, $ipAddress);
    } catch (Exception $e) {
        $outputMessage = '<div class="alert alert-danger">No Geo Data found for this ip: ' . $ipAddress . '</div>';
    }
}
?>
 -->