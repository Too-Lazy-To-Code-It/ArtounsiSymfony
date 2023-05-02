<?php

namespace App\Services;

use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;

class QrcodeService{
    /**
     * @var BuilderInterface
     */
    protected $builder;

    public function __construct(BuilderInterface $builder){
        $this->builder = $builder;
    }

    public function qrcode($query)
    {
        $url = 'https://www.google.com/search?q=';
        $objDateTime = new \DateTime('NOW');
        $dateString = $objDateTime->format('d-m-Y H:i:s');
        
        //set qr code
        $result = $this->builder
            ->data($url.$query)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(400)
            ->margin(10)
            ->labelText('this is the label')
            ->build();

        //generate name
        $namePng = uniqid('' ,'').'.png';
        //save img png
        $result->saveToFile((\dirname(__DIR__).'/public/assets/qr-code/'.$namePng));
    
        return $result; 
         }
}