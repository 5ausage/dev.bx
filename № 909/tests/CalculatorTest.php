<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/Calculator.php');

class CalculatorTest extends TestCase
{
	public function testAdd(): void
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->add(2, 2));
		self::assertEquals(0, $calculator->add(0, 0));
		self::assertEquals(-1, $calculator->add(-1, 0));
		self::assertEquals(2, $calculator->add(-1, 3));
	}

	public function testSubtract(): void
	{
		$calculator = new Calculator();
		self::assertEquals(0, $calculator->subtract(-1, -1));
		self::assertEquals(3, $calculator->subtract(2, -1));
		self::assertEquals(-6, $calculator->subtract(2, 8));
		self::assertEquals(-6, $calculator->subtract(-2, 4));
	}

	public function testMultiply(): void
	{
		$calculator = new Calculator();
		self::assertEquals(0, $calculator->multiply(0, 0));
		self::assertEquals(0, $calculator->multiply(-2, 0));
		self::assertEquals(-4, $calculator->multiply(2, -2));
		self::assertEquals(2, $calculator->multiply(1, 2));
	}

	public function testDivide(): void
	{
		$calculator = new Calculator();
		self::assertEquals(1, $calculator->divide(2, 2));
		self::assertEquals(0, $calculator->divide(0, 2));
		self::assertEquals(0.16666666666667, $calculator->divide(1, 6));
		self::assertEquals(-1, $calculator->divide(1, -1));
	}

	public function testDivideException(): void
	{
		$calculator = new Calculator();

		$this -> expectException(\InvalidArgumentException::class);
		$this -> expectExceptionMessage('Divider cant be a zero');
		$calculator -> divide(5, 0);
	}

	public function testDegree(): void
	{
		$calculator = new Calculator();
		self::assertEquals(1, $calculator->degree(2, 0));
		self::assertEquals(0.5, $calculator->degree(2, -1));
		self::assertEquals(4, $calculator->degree(2, 2));
		self::assertEquals(-0.5, $calculator->degree(-2, -1));
	}

	public function testSqrt(): void
	{
		$calculator = new Calculator();
		self::assertEquals(2, $calculator->sqrt(4));
		self::assertEquals(0, $calculator->sqrt(0));
		self::assertEquals(2.6457513110646, $calculator->sqrt(7));
		self::assertEquals(63245, $calculator->sqrt(3999930025));
	}

	public function testSqrtException(): void
	{
		$calculator = new Calculator();

		$this -> expectException(\InvalidArgumentException::class);
		$this -> expectExceptionMessage('Radical cant be less than zero');
		$calculator -> sqrt(-2);
	}
}