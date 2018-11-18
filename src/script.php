<?php

include ('AliveCell.php');
include ('DeadCell.php');
include ('GridCell.php');

$printGrid = function (array $grid) {
    foreach ($grid as $rowKey => $row) {
        foreach($row as $colKey => $cell) {
            echo $cell->print();
        }
        echo "\n";
    }
};

$grid = [
    [
        new DeadCell(),
        new DeadCell(),
        new DeadCell(),
    ],
    [
        new DeadCell(),
        new AliveCell(),
        new DeadCell(),
    ],
    [
        new DeadCell(),
        new DeadCell(),
        new DeadCell(),
    ],
];

$printGrid($grid);

$nextGrid = [];

foreach ($grid as $rowKey => $row) {
    foreach($row as $colKey => $cell) {
        //TODO pass the alive cell or something...
        $grid = new GridCell([]);



        $nextGrid[$rowKey][$colKey] = $cell->getNextHealth($grid->getNbAliveCell());
    }
}

$printGrid($nextGrid);