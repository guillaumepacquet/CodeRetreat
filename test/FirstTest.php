<?php

require __DIR__ . '/../vendor/autoload.php';

include ('../src/AliveCell.php');
include ('../src/DeadCell.php');
include ('../src/GridCell.php');

class FirstTest extends \PHPUnit\Framework\TestCase {
    public function testAliveCellWithLessThanTwoAliveNeighboursShouldDie() {
        $aliveCell = new AliveCell();

        $result = $aliveCell->getNextHealth(1);

        $this->assertInstanceOf(DeadCell::class, $result);
    }

    public function testAliveCellWithTwoAliveNeighboursShouldLive() {
        $aliveCell = new AliveCell();

        $result = $aliveCell->getNextHealth(2);

        $this->assertInstanceOf(AliveCell::class, $result);
    }

    public function testAliveCellWithMoreThanFourAliveNeighboursShouldDie() {
        $aliveCell = new AliveCell();

        $result = $aliveCell->getNextHealth(5);

        $this->assertInstanceOf(DeadCell::class, $result);
    }

    public function testDeadCellWithlessThanThreeAliveNeighboursShouldStayDead() {
        $deadCell = new DeadCell();

        $result = $deadCell->getNextHealth(2);

        $this->assertInstanceOf(DeadCell::class, $result);
    }

    public function testDeadCellWithThreeAliveNeighboursShouldLive() {
        $deadCell = new DeadCell();

        $result = $deadCell->getNextHealth(3);

        $this->assertInstanceOf(AliveCell::class, $result);
    }

    public function testDeadCellWithMoreThanThreeAliveNeighboursShouldLive() {
        $deadCell = new DeadCell();

        $result = $deadCell->getNextHealth(4);

        $this->assertInstanceOf(DeadCell::class, $result);
    }

    public function testIfGridWithOneAliveGetOneALiveCell() {

        $grid = new GridCell([new AliveCell()]);

        $result = $grid->getNbAliveCell();

        $this->assertEquals(1, $result);

    }

    public function testIfGridWithTwoAliveGetTwoALiveCell() {

        $grid = new GridCell([
            new AliveCell(),
            new AliveCell(),
        ]);

        $result = $grid->getNbAliveCell();

        $this->assertEquals(2, $result);
    }

    public function testIfGridWithFiveAliveGetFiveALiveCell() {

        $grid = new GridCell([
            new AliveCell(),
            new AliveCell(),
            new AliveCell(),
            new AliveCell(),
            new AliveCell(),
        ]);

        $result = $grid->getNbAliveCell();

        $this->assertEquals(5, $result);
    }
}