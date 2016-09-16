<?php
    require_once "src/Source.php";
    class SourceTest extends PHPUnit_Framework_TestCase
    {
        function test_function()
        {
            //Arrange
            $test_Source = new Source;
            $input = "";
            //Act
            $result = $test_Source->runFunction($input);
            //Assert
            $this->assertEquals("", $result);
        }
    }
?>
