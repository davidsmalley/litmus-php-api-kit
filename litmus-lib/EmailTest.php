<?php

  class EmailTest extends LitmusTest
  {
    public $Html;
    public $ID;
    public $ZipFile;
    public $TestType;
    public $Sandbox;
    public $UserGuid;
    public $Source;
    public $InboxGUID;
    public $State;
    public $Subject;
    public $Results;

    public static function build( $params=array() )
    {
      $obj = new EmailTest(array(
        "Html"      => $params["Html"],
        "ID"        => $params["ID"],
        "ZipFile"   => $params["ZipFile"],
        "TestType"  => $params["TestType"],
        "Sandbox"   => $params["Sandbox"],
        "UserGuid"  => $params["UserGuid"],
        "Source"    => $params["Source"],
        "InboxGUID" => $params["InboxGUID"],
        "State"     => $params["State"],
        "Subject"   => $params["Subject"],
        "Results"   => $params["Results"]
      ));
      return $obj;
    }
    
    public function set_results( $params=array() )
    {
      $this->Results = array();
      foreach ($params as $client_params) {
        $this->Results[] = new EmailTestClient($client_params);
      }
    }
  }

?>