<?php

namespace Anjala\Public1;

class Hello {
    public function talk(){
        return 'Hello world!';
    }
}
  
$bye = new Hello;
echo $bye->talk();
 
?>