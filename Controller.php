<?php

require_once 'Model.php';

class Controller {

    private array $models;

    public function getData($data) {

        foreach ($data as $value) {
            $this->models[] = new Model($value);
        }

    }

    public function showTable() {

        if (!isset($this->models)) {
            return var_dump('You have to give data');
        }

        $view = new View($this->models);
        $view->buildTable();
    }

}