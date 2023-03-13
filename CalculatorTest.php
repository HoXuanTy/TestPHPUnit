<?php
    use PHPUnit\Framework\TestCase;
    require "Calculator.php";

    class CalculatorTest extends TestCase{
        private $calcutator;

        protected function setUp () : void {
            $this->calcutator = new Calculator();
        }
        protected function tearDown (): void{
            $this->calcutator = NULL;
        }
        /** @test */
        function sumTest (): void{
            $result = $this->calcutator->sum(1,2);
            $this->assertSame(3, $result);
        }
        /** @test */
        function minusTest(): void {
            $this->assertSame(4, $this->calcutator->minus(6, 2));
        }
    }
?>