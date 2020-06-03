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
        public function reservationPrice($nights) {
          return $this -> pricePerNight * $nights;
        };
        
      }

      $res1 = new Rooms();
      echo "Room floor: " . $res1 -> floor = 1 . "<br>";
      echo "Room name/number: ". $res1 -> name = 'A101' . "<br>";
      echo "Price per night: € ". $res1 -> pricePerNight = 150 . "<br>";
      echo "Total reservation amount: € ". $res1 -> reservationPrice(3) . "<br>";

      echo " ---- <br>";

      $res2 = new Rooms();
      echo "Room floor: " . $res2 -> floor = 2 . "<br>";
      echo "Room name/number: ". $res2 -> name = 'A201' . "<br>";
      echo "Price per night: € ". $res2 -> pricePerNight = 120 . "<br>";
      echo "Total reservation amount: € ". $res2 -> reservationPrice(4) . "<br>";


     ?>
  </body>
</html>
