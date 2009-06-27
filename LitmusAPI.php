<?php

  set_include_path(implode(array(
  (dirname(__FILE__) . "/lib/"),
  (dirname(__FILE__) . "/litmus-lib/"),
  get_include_path()
  ), ":"));
  require_once("lib/nusoap.php");

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
    private $proxy;
    
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
        $this->client->call("__getFunctions");
        $this->methods = array_keys($this->client->operations);
      }
      return $this->methods;
    }
    
    public function CreatePageTest( $page_test )
    {
      $result = $this->proxy->CreatePageTest($this->api_key, $this->api_pass, $page_test);
      return PageTest::build($result);
    }
    
    public function GetPageTest( $id )
    {
      $result = $this->proxy->GetPageTest($this->api_key, $this->api_pass, $id);
      return PageTest::build($result);
    }
    
    
      
    private function _setup_soap_client()
    {
      $this->client = new nusoap_client("http://soap.litmusapp.com/soap/wsdl", true);
      $this->proxy = $this->client->getProxy();
    }

    private function set_api_credentials( $key, $pass )
    {
      if (!is_null($key) || !is_null($pass)) {
        $this->api_key  = $key;
        $this->api_pass = $pass;
      }
    }

  }

  require "PageTest.php";
  require "PageTestClient.php";

?>