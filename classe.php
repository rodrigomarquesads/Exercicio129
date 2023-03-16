<?php
    class sequencia {
        private $inicio;
        Private $fim;
        public function setInicio ($inicio) {
            $this->inicio = $inicio;
        }
            public function setfim1 ($fim) {
            $this->inicio = $fim;
        
       }

       public function exibirtodosNumeros (){
        for ($i = $this -> inicio; $i <= $this->fim; $i++){    
            echo $i. "<br>";
        }
    }
    public function exibirPares(){
        for ($i = $this->inicio; $i<= $this->fim; $i++){
            if ($i%2 == 0){
                echo $i."<br>";
            }
        }
    }
    public function exbirImpares (){
        for ($i = $this-> inicio; $i<= $this->fim; $i++){
            if($i%2==1){
                echo $i. "<br>";
            }
        }
    }
}
        }
    
    ?>
