<?php

class Model {

    private array $models;

    public function __construct(array $data)
    {
       $this->models = $data;
    }

    public function getModel() {
        return $this->models;
    }

}