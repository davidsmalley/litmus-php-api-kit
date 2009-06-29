<?php

  require "../LitmusAPI.php";

  $apiKey  = "your-api-key";
  $apiPass = "password";

  $o = new LitmusAPI($apiKey, $apiPass);

  $test = new PageTest(array(
    "URL"     => "http://google.com/",
    "Sandbox" => true
  ));

  $result = $o->CreatePageTest($test);

  echo "URL:    {$result->URL}\n";
  echo "Status: {$result->Status}";

?>