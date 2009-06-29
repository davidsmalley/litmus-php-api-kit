<?php

  require "../LitmusAPI.php";

  $apiKey  = "your-api-key";
  $apiPass = "password";

  $o = new LitmusAPI($apiKey, $apiPass);

  $result = $o->GetPageTest(283430);

  echo "URL: {$result->URL}\n\n";

  var_dump( $result->Results[0] );

  foreach ($result->Results as $browser) {
    echo "Browser: {$browser->ApplicationLongName}\n";
    $done = ($browser->Completed ? "true" : "false");
    echo "Done:    {$done}\n";
  }

?>