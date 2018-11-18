<?php

class AliveCell
{
    public function getNextHealth(int $nbNeighbours)
    {
        return $this->getStatus()[$nbNeighbours];
    }

    private function getStatus(): array
    {
        return [
            1 => new DeadCell(),
            2 => new AliveCell(),
            3 => new AliveCell(),
            4 => new DeadCell(),
            4 => new DeadCell(),
            5 => new DeadCell(),
            6 => new DeadCell(),
            7 => new DeadCell(),
            8 => new DeadCell(),
        ];
    }

    public function print() {
        return 'o';
    }
}