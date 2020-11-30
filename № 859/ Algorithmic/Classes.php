<?php

abstract class Chess_Figure
{
	protected $Pos_X = 0, $Pos_Y = 0;

	public function SetPos_X(int $x)
	{
		$this->Pos_X = $x;
	}

	public function SetPos_Y(int $y)
	{
		$this->Pos_Y = $y;
	}

	abstract public function Check(int $x, int $y);
}

class Rook extends Chess_Figure
{
	public function Check(int $x, int $y) : bool

	{
		if ($x === $this->Pos_X or $y === $this->Pos_Y){
			return true;
		}
		return false;
	}
}