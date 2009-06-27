<?php

  class PageTest
  {
    public $Title;
    public $ID;
    public $TestType;
    public $Sandbox;
    public $URL;
    public $Results;
    public $State;
    
    function __construct( $params=array() ) {
      if ($params != array()) {
        foreach ($params as $k => $v) {
          if ($k == "Results") {
            $this->set_results($v);
          } else {
            $this->$k = $v;
          }
        }
      }
    }
    
    public static function build( $obj )
    {
      $result = new PageTest(array(
        "Title"    => $obj["Title"],
        "ID"       => $obj["ID"],
        "TestType" => $obj["TestType"],
        "Sandbox"  => $obj["Sandbox"],
        "URL"      => $obj["URL"],
        "Results"  => $obj["Results"],
        "State"    => $obj["State"]
      ));
      return $result;
    }
    
    public function set_results( $params=array() )
    {
      $this->Results = array();
      foreach ($params as $client_params) {
        $this->Results[] = new PageTestClient($client_params);
      }
    }
  }

?>