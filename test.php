<?php
  
  class Car{
    private $no_of_wheel;
    private $color;
    protected $speed;

    public function __construct($wheel,$color,$speed){
       $this->no_of_wheel = $wheel;
       $this->color = $color;
       $this->speed = $speed;
    }

    public function start(){
      echo "<br>Vooom Voom <br>";
    }

    public function stop()
    {
       echo "<br>Dssssss <br>";
    }

    public function setColor($color){
      $this->color = $color;
    }

    public function getColor(){
      return $this->color;
    }

  }


  // class for benz

  class Benz extends Car{
  
    public $logoSize;
    public $color;
    private static $no_of_speaker;

     public function __construct($wheel,$color,$speed,$logoSize)
    {
      $this->no_of_wheel = $wheel;
       $this->color = $color;
       $this->speed = $speed;
       $this->logoSize = $logoSize;


    }

    public function start(){
       echo "<br>!!!!!!!!! <br>";
    }

    public static function startCar(){
       echo "<br>Static start called <br>";
    }

    public static function changeNoOfSpeaker($no){
      self::$no_of_speaker = $no;
    }


  }

  $carObjet1 = new Car(4,"red","40km/h");
  $carObjet1->setColor("green");
    echo $carObjet1->getColor();
  

  echo "<pre>";
  print_r($carObjet1);


  // $carObjet3->speed  = "500km/h";

 


  $benz1 = new Benz(44, "pink", "60km/h",300);
  print_r($benz1);


  $carObjet1->start();
  $benz1->start();

  Benz::startCar();
