<?php

abstract class ChessFigure
{
	protected $posX = 0, $posY = 0;

	public function setPosX(int $x)
	{
		$this -> posX = $x;
	}

	public function setPosY(int $y)
	{
		$this -> posY = $y;
	}

	abstract public function check(int $x, int $y);
}

class Rook extends ChessFigure
{
	public function check(int $x, int $y) : bool
	{
		if ($x === $this -> posX or $y === $this -> posY)
		{
			return true;
		}
		return false;
	}
}