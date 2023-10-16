<?php
    class client {
        public $json, $clientes;
    

        public function __construct(){
            $this->json = file_get_contents('json/cliente.json');
            $this->clientes = json_decode($this->json);
            /* Metodo mostrar es igual a llamar el atributo $clientes */
        }

        # Metodo para insertar cliente
        public function insertar($dato) {
            $clave = $this->encriptar($dato[4]);
            
            if(!count($this->clientes) == 0){
                $id = $this->clientes[0]->id;
                $id++;

                array_unshift($this->clientes, ["id" => $id, "identif" => $dato[0], "nombre" => $dato[1], "direccion" => $dato[2], "celular" => $dato[3], "clave" => $clave, "rol" => "cliente"]);
            } else {
                $id = 1;
                array_unshift($this->clientes, ["id" => $id, "identif" => $dato[0], "nombre" => $dato[1], "direccion" => $dato[2], "celular" => $dato[3], "clave" => $clave, "rol" => "cliente"]);
            }
            
            $this->json = json_encode($this->clientes);
            $file = 'json/cliente.json';
            file_put_contents($file, $this->json);
        }

        public function session($identif, $clave){
            // $i = 0;
            for($i=0; $i<count($this->clientes); $i++){
                if($identif == $this->clientes[$i]->identif && password_verify($clave, $this->clientes[$i]->clave)){
                    return $this->clientes[$i];
                    break;
                } 
            }
            return null;
        }

        public function encriptar($n){
            if($n == 1){
                for($i=0; $i<count($this->clientes); $i++){
                    $this->clientes[$i]->clave = password_hash($this->clientes[$i]->clave, PASSWORD_DEFAULT);
                }

                $this->json = json_encode($this->clientes);
                $file = 'json/cliente.json';
                file_put_contents($file, $this->json);
            } else {
                return password_hash($n, PASSWORD_DEFAULT);
            }

        }

        # Metodo para actualizar cliente
        // public function editar($id, $dato){
        //     /* $id = posición en el arreglo */
        //     /* $dato = [$ident, $nombre, $direccion, $celular] */
            
        //     $this->clientes[$id]->identif = $dato[0];
        //     $this->clientes[$id]->nombre = $dato[1];
        //     $this->clientes[$id]->direccion = $dato[2];
        //     $this->clientes[$id]->celular = $dato[3];

        //     $this->json = json_encode($this->clientes);
        //     $file = 'json/cliente.json';
        //     file_put_contents($file, $this->json);
        // }

        # Metodo para eliminar cliente
        // public function delete($id) {
        //     unset($this->clientes[$id]);
        //     $this->clientes = array_values($this->clientes);

        //     $this->json = json_encode($this->clientes);
        //     $file = 'json/cliente.json';
        //     file_put_contents($file, $this->json);
        // }

        // public function buscar($ident){
        //     for($i=0; $i<count($this->clientes); $i++){
        //         if($ident == $this->clientes[$i]->id){
        //             return $this->clientes[$i];
        //         } else {
        //             return null;
        //         }
        //     }
        // }
    }
?>