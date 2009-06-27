<?php

  /**
    *
    */
  class LitmusTest
  {
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
  }


?>