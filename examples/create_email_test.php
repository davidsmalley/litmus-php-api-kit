<?php

  require "../LitmusAPI.php";

  $apiKey  = "caius-api";
  $apiPass = "orrq8xp9u0gm";

  $o = new LitmusAPI($apiKey, $apiPass);

  $test = new EmailTest;
  $test->Sandbox = true;

  $result = $o->CreateEmailTest($test);

  var_dump( $result );

?>