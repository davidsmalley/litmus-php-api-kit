<?php

  require "../LitmusAPI.php";

  $apiKey  = "your-api-key";
  $apiPass = "password";

  $o = new LitmusAPI($apiKey, $apiPass);

  $clients = $o->GetPageTestClients();

  echo "Supported Browsers: \n";

  foreach ($clients as $client) {
    echo "* {$client->ApplicationLongName}\n";
  }

?>