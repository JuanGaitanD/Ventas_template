<?php 
    class ventas {
        public $json, $ventas;

        public function __construct() {
            $this->json = file_get_contents("json/ventas.json");
            $this->ventas = json_decode($this->json);
        }

        public function venta($dato) {
            /* $dato = ["fecha", ["cliente_nombre", "direccion", "celular"], [ ["id", "producto_name", "precio", "cantidad", "subtotal"], total ]*/
            $num = count($this->ventas);
            if($num==0){
                $id = 1;
            } else {
                $id = $this->ventas[0]->id;
                $id++;
            }

            array_unshift($this->ventas, ["id"=>$id, "fecha"=>$dato[0], "cliente"=>$dato[1], "productos"=>$dato[2], "Total"=>$dato[3]]);

            if(is_array($this->ventas)){
                $json_ventas = json_encode($this->ventas);
                $file = 'json/ventas.json';
                file_put_contents($file, $json_ventas);
            } else {
                throw new Exception("Array Corrupto, bro");
            }
        }


        public function delete($i){
            unset($this->ventas[$i]);

            $this->ventas = array_values($this->ventas);

            if(is_array($this->ventas)){
                $json_ventas = json_encode($this->ventas);
                $file = 'json/ventas.json';
                file_put_contents($file, $json_ventas);
            } else {
                throw new Exception("Array Corrupto, bro");
            }
        }
    }

?>