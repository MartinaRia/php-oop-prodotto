<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php OOP Test1</title>
  </head>
  <body>
    <!-- GOAL: Provare a immaginare una classe come quella vista a lezione, definendo le variabili d'ambiente per disegnare un ipotetico prodotto di magazzino;
    Definire anche costruttore completo (tutti le variabili che avete creato) + printMe per fare il log, nell'ottica di quanto visto questa mattina a lezione -->
    <?php

      class Rooms {
        public $floor;
        public $name;
        public $pricePerNight;
        public $nights;

        function __construct($name){
          $this -> name = $name;
        }

        // public function reservationPrice($nights) {
        //   return $this -> pricePerNight * $nights;
        // }
        public function reservationPrice() {
          return $this -> pricePerNight * $this -> nights;
        }

        public function printMe(){
          echo "Room name/number: ". $this -> name.  "<br>";
          echo "Room floor: " . $this -> floor . "<br>";
          echo "Price per night: € ". $this -> pricePerNight . "<br>";
          echo "Number of nights ". $this -> nights . "<br>";
          echo "Total reservation amount: € ". $this -> reservationPrice() . "<br>";
        }
      }

      $res1 = new Rooms(A101);
      //$res1 -> name = 'A101';
      $res1 -> floor = 1;
      $res1 -> pricePerNight = 150;
      $res1 -> nights = 3;
      $res1 -> printMe();

      echo " ---- <br>";

      $res2 = new Rooms(A202);
      $res2 -> floor = 2;
      $res2 -> pricePerNight = 120;
      $res2 -> nights = 4;
      $res2 -> printMe();


     ?>
  </body>
</html>
