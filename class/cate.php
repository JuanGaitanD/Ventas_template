<?php
class cate{
    public $json, $categorias;

    public function __construct(){
        $this->json = file_get_contents("json/cate.json");
        $this->categorias = json_decode($this->json);
    }

    public function show(){
        return $this->categorias;
    }

    public function insertar($dato){
        $largo = count($this->categorias);
        $num = $this->categorias[$largo-1]->id;
        $id = $num+1;

        array_push($this->categorias,["id"=>$id, "categoria"=>$dato]);
        $cate_json = json_encode($this->categorias);
        $file = 'json/cate.json';
        file_put_contents($file, $cate_json);
    }

    public function eliminar($id){
        $posicion = "";
        $largo = count($this->categorias);
        for($i=0; $i<$largo; $i++){
            if($this->categorias[$i]->id == $id){
                $posicion = $i;
            }
        }
        unset($this->categorias[$posicion]);
        $this->categorias = array_values($this->categorias);
        
        $cate_json = json_encode($this->categorias);
        $file = 'json/cate.json';
        file_put_contents($file, $cate_json);

    }

    public function editar($id, $dato){
        $posicion = "";
        $largo = count($this->categorias);
        for($i=0; $i<$largo; $i++){
            if($this->categorias[$i]->id == $id){
                $posicion = $i;
            }
        }

        $this->categorias[$posicion]->categoria = $dato;

        $cate_json = json_encode($this->categorias);
        $file = 'json/cate.json';
        file_put_contents($file, $cate_json);
    }

}


?>