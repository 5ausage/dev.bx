<?php

abstract class ChessFigure
{
	protected $posX = 0, $posY = 0;

	public function onDesk($x, $y): bool
	{
		if ($x > 8 || $x < 1)
		{
			return false;
		}

		if ($y > 8 || $y < 1)
		{
			return false;
		}

		return true;
	}

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
		if ($x === $this -> posX xor $y === $this -> posY)
		{
			return true;
		}
		return false;
	}
}