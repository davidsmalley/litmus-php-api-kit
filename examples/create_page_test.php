<?php

  require "../LitmusAPI.php";

  $apiKey  = "caius-api";
  $apiPass = "orrq8xp9u0gm";

  $o = new LitmusAPI($apiKey, $apiPass);

  $test = new PageTest(array(
    "URL"     => "http://google.com/",
    "Sandbox" => true
  ));

  $result = $o->CreatePageTest($test);

  echo "URL:    {$result->URL}\n";
  echo "Status: {$result->Status}";

?>