<?php

  require "../LitmusAPI.php";

  $apiKey  = "caius-api";
  $apiPass = "orrq8xp9u0gm";

  $o = new LitmusAPI($apiKey, $apiPass);

  $clients = $o->GetPageTestClients();

  echo "Supported Browsers: \n";

  foreach ($clients as $client) {
    echo "* {$client->ApplicationLongName}\n";
  }

?>