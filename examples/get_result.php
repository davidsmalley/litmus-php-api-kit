<?php

  require "../LitmusAPI.php";

  $apiKey  = "your-api-key";
  $apiPass = "password";

  $o = new LitmusAPI($apiKey, $apiPass);

  $test = new EmailTest;
  $test->Sandbox = true;

  $result = $o->GetResult(4576806);

  var_dump( $result );

?>