<?php

  class LitmusClient
  {
    public $ApplicationLongName;
    public $ApplicationName;
    public $AverageTimeToProcess;
    public $BusinessOrPopular;
    public $Completed;
    public $DesktopClient;
    public $FoundInSpam;
    public $FullpageImage;
    public $FullpageImageContentBlocking;
    public $FullpageImageNoContentBlocking;
    public $FullpageImageThumb;
    public $FullpageImageThumbContentBlocking;
    public $FullpageImageThumbNoContentBlocking;
    public $Id;
    public $PlatformLongName;
    public $PlatformName;
    public $RenderedHtmlUrl;
    public $ResultType;
    public $SpamHeaders;
    public $SpamScore;
    public $Status;
    public $SupportsContentBlocking;
    public $WindowImage;
    public $WindowImageContentBlocking;
    public $WindowImageNoContentBlocking;
    public $WindowImageThumb;
    public $WindowImageThumbContentBlocking;
    public $WindowImageThumbNoContentBlocking;
    
    function __construct( $params=array() )
    {
      if ($params != array()) {
        foreach ($params as $k => $v) {
          $this->$k = $v;
        }
      }
    }
  }
  
  class PageTestClient extends LitmusClient {}
  class EmailTestClient extends LitmusClient {}

?>