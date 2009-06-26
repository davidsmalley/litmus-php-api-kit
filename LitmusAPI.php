<?php

  /**
  * Core class for the Litmus API
  */
  class LitmusAPI
  {

    # Store the key and password
    private $api_key;
    private $api_pass;
    
    # Where we store the connection to the server
    private $client;
    
    # List of available API methods
    private $methods;

    # Setup the object with the api key and password
    function __construct( $api_key=null, $api_pass=null )
    {
      $this->set_api_credentials($api_key, $api_pass);
      
      $this->_setup_soap_client();
    }

    /**
     * Returns a list of available API methods
     *
     * @param bool $refresh whether to force a refresh of the methods
     * @return array list of available methods + respective arguments
     */
    public function methods( $refresh=false )
    {
      if (is_null($this->methods) || $refresh) {
        $this->methods = $this->client->__getFunctions();
      }
      return $this->methods;
    }
    
    public function __call( $method, $args )
    {
      return $this->client->$method($this->api_key, $this->api_pass, $args);
    }
    
    private function _setup_soap_client()
    {
      $this->client = new soapclient(
        "http://soap.litmusapp.com/soap/wsdl",
        array( "cache" => WSDL_CACHE_NONE )
      );
    }

    private function set_api_credentials( $key, $pass )
    {
      if (!is_null($key) || !is_null($pass)) {
        $this->api_key  = $key;
        $this->api_pass = $pass;
      }
    }

  }


?>