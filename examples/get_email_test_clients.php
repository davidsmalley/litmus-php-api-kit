<?php

  require "../LitmusAPI.php";

  $apiKey  = "your-api-key";
  $apiPass = "password";

  $o = new LitmusAPI($apiKey, $apiPass);

  $clients = $o->GetEmailTestClients();

  echo "Supported Email Clients: \n";

  foreach ($clients as $client) {
    echo "* {$client->ApplicationLongName}\n";
  }

?>