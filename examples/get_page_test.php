<?php

  require "../LitmusAPI.php";

  $apiKey  = "caius-api";
  $apiPass = "orrq8xp9u0gm";

  $o = new LitmusAPI($apiKey, $apiPass);

  $result = $o->GetPageTest(283430);

  echo "URL: {$result->URL}\n\n";

  foreach ($result->Results as $browser) {
    echo "Browser: {$browser->ApplicationLongName}\n";
    $done = ($browser->Completed ? "true" : "false");
    echo "Done:    {$done}\n";
  }

?>