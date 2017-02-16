<?php
    require_once "src/Score.php";
    class ScoreTest extends PHPUnit_Framework_TestCase
    {
      function test_ones_score()
      {
        $inputWord = "IS";
        $inputScore = new Score();

        $result = $inputScore->calcScore($inputWord);

        $this->assertEquals(2, $result);
      }
      function test_Twos_score()
      {
        $inputWord = "DOG";
        $inputScore = new Score();

        $result = $inputScore->calcScore($inputWord);

        $this->assertEquals(5, $result);
      }
      function test_Threes_score()
      {
        $inputWord = "Big";
        $inputScore = new Score();

        $result = $inputScore->calcScore($inputWord);

        $this->assertEquals(6, $result);
      }
      function test_Fours_score()
      {
        $inputWord = "fig";
        $inputScore = new Score();

        $result = $inputScore->calcScore($inputWord);

        $this->assertEquals(7, $result);
      }
      function test_Fives_score()
      {
        $inputWord = "bike";
        $inputScore = new Score();

        $result = $inputScore->calcScore($inputWord);

        $this->assertEquals(10, $result);
      }
      function test_Eights_score()
      {
        $inputWord = "Jig";
        $inputScore = new Score();

        $result = $inputScore->calcScore($inputWord);

        $this->assertEquals(11, $result);
      }
      function test_Tens_score()
      {
        $inputWord = "Quit";
        $inputScore = new Score();

        $result = $inputScore->calcScore($inputWord);

        $this->assertEquals(13, $result);
      }

    }

 ?>
