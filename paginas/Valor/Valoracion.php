<?php
require_once "DBController.php";

class Rate extends DBController
{

    function getAllPost()
    {
        $query = "SELECT .*, COUNT(guarda_valoracion.valoracion) as rating_count, SUM(guarda_valoracion.valoracion) as rating_total FROM tutorial LEFT JOIN guarda_valoracion ON tutorial.id = guarda_valoracion.tutorial_id GROUP BY guarda_valoracion.tutorial_id";
        
        $postResult = $this->getDBResult($query);
        return $postResult;
    }

    function getRatingByTutorial($tutorial_id)
    {
        $query = "SELECT tutorial.*, COUNT(guarda_valoracion.valoracion) as rating_count, SUM(guarda_valoracion.valoracion) as rating_total FROM tutorial LEFT JOIN guarda_valoracion ON tutorial.id = guarda_valoracion.tutorial_id WHERE guarda_valoracion.tutorial_id = ? GROUP BY guarda_valoracion.tutorial_id";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $tutorial_id
            )
        );
        
        $postResult = $this->getDBResult($query, $params);
        return $postResult;
    }

    function getRatingByTutorialForMember($tutorial_id, $miembro_id)
    {
        $query = "SELECT * FROM guarda_valoracion WHERE tutorial_id = ? AND miembro_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $tutorial_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $miembro_id
            )
        );
        
        $ratingResult = $this->getDBResult($query, $params);
        return $ratingResult;
    }

    function addRating($tutorial_id, $valoracion, $miembro_id)
    {
        $query = "INSERT INTO guarda_valoracion (tutorial_id,valoracion,miembro_id) VALUES (?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $tutorial_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $valoracion
            ),
            array(
                "param_type" => "i",
                "param_value" => $miembro_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function updateRating($valoracion, $rating_id)
    {
        $query = "UPDATE guarda_valoracion SET  valoracion = ? WHERE id= ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $valoracion
            ),
            array(
                "param_type" => "i",
                "param_value" => $rating_id
            )
        );
        
        $this->updateDB($query, $params);
    }
}
