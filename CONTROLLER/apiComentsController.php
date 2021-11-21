<?php

require_once './MODEL/comentsModel.php';

class apiComentsController{
    private $comentsModel;
    private $view;

    function __construct(){
        $this->comentsModel = new comentsModel;
        $this->view = new apiView;
    }
    function getComents($params = null){
        if(empty($params)){
            $coments = $this->comentsModel->getAllComents();
            $this->view->response($coments, 200);
        }
    }
    function insertComents(){
        $body = $this->getBody();
        $id = $this ->comentsModel-> insertComent($body->comentario, $body->id_user, $body->id_producto);

        if($id != 0){
            $this->view->response("El comentatio se insertó con el id=$id comentario:$body->comentario", 200);
        } else {
            $this->view->response("No es posible publicar su comentario", 500);
        }
    }
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
}