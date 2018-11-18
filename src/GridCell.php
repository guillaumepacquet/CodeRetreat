<?php

class GridCell
{
    private $aliveCells = [];

    public function __construct(array $aliveCells)
    {
        $this->aliveCells = $aliveCells;
    }

    public function getNbAliveCell(): int
    {
        return count($this->aliveCells);
    }
}