<!doctype html>
<html lan="zh-TW">
    <head>
        <meta charset="utf-8">
        <title> </title> 
    </head>
    <body>
        <?php
        
        class cat
        {
            protected $name;
            protected $position;
            
            public function __construct($name) {
                $this->name = $name;
                $this->position = ['x'=>0,'y'=>0];
            }    
            
             public function getName()
            {
               return $this->name ; 
            } 
            
            public function setName($name)
            {
                $this->name = $name; 
            }
            public function moveTo($x,$y) {
                $this->position['x']=$x;
                $this->position['y']=$y;
                
                return $this->position;
            }
            
             public function move($x,$y) {
                $this->position['x']+=$x;
                $this->position['y']+=$y;
                
                return $this->position;
            }
            
//            public function resetPosition() {
//                $this->innerFunction();
//                $this->moveTo(0,0);
//                
//                return $this->position;
//            }
            protected function innerFunction() {
                echo "innerFunction";
            }
        }
        
        $pet=new cat("kitty");
        
//        echo $pet->name;
        echo "<br>";
//        $pet->name = "hello kitty";
        echo $pet->getName();
        echo "<br>";
        
        $movePosition= $pet->moveTo(3, 5);
         echo "(".$movePosition['x']." , ".$movePosition['y'].")";
         echo "<br>";
         
            $movePosition= $pet->move(2, 2);
         echo "(".$movePosition['x']." , ".$movePosition['y'].")";
         echo "<br>";
         
//          $movePosition= $pet->resetPosition();
//         echo "(".$movePosition['x']." , ".$movePosition['y'].")";
//         echo "<br>";
        ?>  
    </body>
</html>