<?php

  /**
  * 
  */
  class PageTestClient
  {
    public $FullpageImageNoContentBlocking;
    public $AverageTimeToProcess;
    public $ApplicationLongName;
    public $FullpageImage;
    public $FoundInSpam;
    public $ResultType;
    public $FullpageImageThumbContentBlocking;
    public $PlatformLongName;
    public $FullpageImageThumbNoContentBlocking;
    public $Id;
    public $ApplicationName;
    public $WindowImageContentBlocking;
    public $FullpageImageThumb;
    public $SpamScore;
    public $WindowImageNoContentBlocking;
    public $PlatformName;
    public $WindowImage;
    public $Status;
    public $DesktopClient;
    public $WindowImageThumbContentBlocking;
    public $SpamHeaders;
    public $WindowImageThumbNoContentBlocking;
    public $RenderedHtmlUrl;
    public $BusinessOrPopular;
    public $Completed;
    public $WindowImageThumb;
    public $FullpageImageContentBlocking;
    public $SupportsContentBlocking;
    
    function __construct( $params=array() )
    {
      if ($params != array()) {
        foreach ($params as $k => $v) {
          $this->$k = $v;
        }
      }
    }
  }
  

?>