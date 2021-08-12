<?php
require './vendor/autoload.php';


// Imports

use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;
use Endroid\QrCode\QrCode;




//classes

class Analytics 
{
    function getAnalytics ()
    {
        $client = new BetaAnalyticsDataClient();

        $response = $client->runReport([
            'property' => '[YOUR_PROPERTY_ID]'
        ]);

        foreach ($response->getRows() as $row) 
        {
            foreach ($row->getDimensionValues() as $dimensionValue) 
            {
                print 'Dimension Value: ' . $dimensionValue->getValue() . PHP_EOL;
            }
        }
    }
}
/*

class GenerateQrCode 
{
    function qr_Code() 
    {
        $set_log =true;
        $qrCode = new QrCode('http://baidu.com');
        if($set_log ==true){
            $qrCode->setLogoPath('thumb/link.jpg');
            $qrCode->setLogoWidth(90);
        }
        $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
        $name = rand(1,99999999).time();
        $path ='static/qrcode/'.$name.'.png';
        $qrCode->writeFile($path);
        header('Content-Type: '.$qrCode->getContentType());
        echo $qrCode->writeString();
        //Go to operate this picture
        //@Delete Files
        unlink($path);
        exit;
    }
}
*/

?>