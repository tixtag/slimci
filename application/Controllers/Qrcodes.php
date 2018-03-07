<?php
/**
 *c:fajar.sachkan@gmail.com
 *12/12/2017
 */
namespace Application\Controllers;
use \Endroid\QrCode\Factory\QrCodeFactory;
use \Endroid\QrCode\ErrorCorrectionLevel;
use \Endroid\QrCode\LabelAlignment;
use \Endroid\QrCode\QrCode;
use \Endroid\QrCode\Response\QrCodeResponse;


class Qrcodes extends BaseControllers
{

    public function generedQr($req, $res, $arg)
    {
        // Create a basic QR code
        $qrCode = new QrCode('tixtag itu namanya');
        $qrCode->setSize(300);

        // Set advanced options
        $qrCode->setWriterByName('png');
        $qrCode->setMargin(10);
        $qrCode->setEncoding('UTF-8');
        $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
        $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
        $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
        $qrCode->setLabel('Scan the code Tixtag.co.id', 16, __DIR__.'/../../assets/fonts/noto_sans.otf', LabelAlignment::CENTER);
        $qrCode->setLogoPath(__DIR__.'/../../assets/img/logo_qr.png');
        $qrCode->setLogoWidth(90);
        $qrCode->setRoundBlockSize(true);
        $qrCode->setValidateResult(false);

        // Directly output the QR code
        header('Content-Type: '.$qrCode->getContentType());
        echo $qrCode->writeString();

        // Save it to a file
        $qrCode->writeFile(__DIR__.'/../../assets/qrcodes/ti.png');

        // Create a response object
        $res = new QrCodeResponse($qrCode);
    }

    public function comperQr($req, $res, $arg)
    {



    }

}
