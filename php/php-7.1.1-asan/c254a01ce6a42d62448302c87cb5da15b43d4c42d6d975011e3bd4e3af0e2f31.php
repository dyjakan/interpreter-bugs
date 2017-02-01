<?php
  class Foo {
    function __construct() {
      
      $s = 'preg_rep󠁎lace() is broken';
      
      var_dump(preg_replace_callback(
              '/broken/',
              array(&$this, 'bar'),
              $s
           ));
    }
    
    function bar() {
  $o = new Foo;
      return 'working';
    }
    
  } // of Foo

  $o = new Foo;
?>
