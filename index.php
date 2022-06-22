<?php
  require "classes/vierkant.class.php";
  require "classes/figuur.class.php";
  require "classes/cilinder.class.php";
  require "classes/cirkel.class.php";

  $obj = new Vierkant(3);
  echo $obj->berekenOppervlakte(3) . "<br>";

  $obj2 = new Cilinder(10, 3);
  echo $obj2->berekenOppervlakte(10, 3) . "<br>";

  $obj3 = new Cirkel(5);
  echo $obj3->berekenOppervlakte(5) . "<br>";