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
            public $name;
            protected $position;
            
            public function __construct($name) {
                $this->name = $name;
                $this->position = ['x'=>0,'y'=>0];
            }          
            public function moveTo($x,$y) {
                $this->position['x']=$x;
                $this->position['y']=$y;
                
                return $this->position;
            }
            
            public function resetPosition() {
                $this->innerFunction();
                $this->moveTo(0,0);
                
                return $this->position;
            }
            protected function innerFunction() {
                echo "innerFunction";
            }
        }
        
        $pet=new cat("");
        
     
        ?>  
    </body>
</html>