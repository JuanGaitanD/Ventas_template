<?php 
    class producto {
        public $json, $productos;

        public function __construct(){
            $this->json = file_get_contents("json/productos.json");
            $this->productos = json_decode($this->json);
        }

        public function insertar_producto($dato){
            $id = ($this->productos[count($this->productos)-1]->id)+1;
            $new = ["id" => "$id", "id_categoria" => $dato[0], "codigo" => $dato[1], "nombre" => $dato[2], "descripcion" => $dato[3], "imagen" => $dato[4], "stock" => $dato[5], "precio_compra" => $dato[6], "precio_venta" => $dato[7]];
            // print_r($new);
            
            array_push($this->productos, $new);
            // print_r($this->productos);

            if(is_array($this->productos)){
                $producto_json = json_encode($this->productos);
                $file = 'json/productos.json';
                file_put_contents($file, $producto_json);
            } else {
                echo "Array Corrupto, bro";
            }
        }

        public function editar($dato) {
            /* Creamos una variable y almacenamos la posición del elemento a editar */
            $idn = "";

            for ($i=0; $i<count($this->productos); $i++){
                if($this->productos[$i]->id == $dato[0]) {
                    $idn = $i;
                    // return el indice
                }
            }

            $this->productos[$idn]->id = $dato[0];
            $this->productos[$idn]->id_categoria = $dato[1];
            $this->productos[$idn]->codigo = $dato[2];
            $this->productos[$idn]->nombre = $dato[3];
            $this->productos[$idn]->descripcion = $dato[4];
            $this->productos[$idn]->imagen = $dato[5];
            $this->productos[$idn]->stock = $dato[6];
            $this->productos[$idn]->precio_compra = $dato[7];
            $this->productos[$idn]->precio_venta = $dato[8];

            if(is_array($this->productos)){
                $producto_json = json_encode($this->productos);
                $file = 'json/productos.json';
                file_put_contents($file, $producto_json);
            } else {
                echo "Array Corrupto, bro";
            }
        }

        public function eliminar($id) {
            $idn = "";

            for ($i=0; $i<count($this->productos); $i++){
                if($this->productos[$i]->id == $id) {
                    $idn = $i;
                }
            }

            unset($this->productos[$idn]);
            $this->productos = array_values($this->productos);

            if(is_array($this->productos)){
                $producto_json = json_encode($this->productos);
                $file = 'json/productos.json';
                file_put_contents($file, $producto_json);
            } else {
                echo "Array Corrupto, bro";
            }
        }
    }
?>


