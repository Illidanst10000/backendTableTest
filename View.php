<?php

class View
{
    private array $models;
    private array $columnLength;

    public function __construct(array $models)
    {
        $this->models = $models;
        $this->columnLength();
    }

    public function buildTable()
    {
        $this->buildTableHead();
        $this->buildTableBody();
        $this->buildTableFooter();
    }

    public function columnLength()
    {

        $columnLengths = [];

        foreach ($this->models as $model) {

            foreach ($model->getModel() as $keyLength => $valueLength) {

                if (!isset($keyLength)) {
                    $this->columnLength[$keyLength] = 0;
                }

                $columnLengths[$keyLength] = max($columnLengths[$keyLength], strlen($keyLength), strlen($valueLength));
            }
        }

        ksort($columnLengths);
        $this->columnLength = $columnLengths;

    }

    public function maxColumnLength()
    {
        return array_sum($this->columnLength) + (count($this->columnLength) * 3) + 1;
    }

    public function buildTableHead()
    {

        echo str_repeat('=', $this->maxColumnLength());

        echo PHP_EOL . '|';

        foreach ($this->columnLength as $column => $length) {
            echo ' ';
            echo str_repeat(' ', ($length - strlen($column)));
            echo $column . ' |';
        }

        echo PHP_EOL;

        echo str_repeat('-', $this->maxColumnLength());

    }

    public function buildTableBody()
    {

        foreach ($this->models as $model) {
            $this->buildTableBodyRow($model);
        }


    }

    public function buildTableBodyRow($model)
    {
        echo PHP_EOL;
        echo '|';

        foreach ($this->columnLength as $column => $length) {

            if (!array_key_exists($column, $model->getModel())) {
                echo str_repeat(' ', $length + 1);
                echo ' |';
                continue;
            }

            $spacesLength = $length - strlen($model->getModel()[$column]);

            echo str_repeat(' ', $spacesLength + 1);
            echo $model->getModel()[$column];
            echo ' |';
        }


    }

    public function buildTableFooter()
    {
        echo PHP_EOL;
        echo str_repeat('=', $this->maxColumnLength());
    }
}