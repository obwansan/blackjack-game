<?php

use PHPUnit\Framework\TestCase;

require('../blackjack.php');

class StackTest extends TestCase
{
    // success
    public function testdealCardsSuccessArray()
    {
        $input = [
            ['suit' => 'hearts', 'value' => '1'],
            ['suit' => 'hearts', 'value' => '2'],
            ['suit' => 'hearts', 'value' => '3'],
            ['suit' => 'hearts', 'value' => '4'],
            ['suit' => 'hearts', 'value' => '5'],
            ['suit' => 'hearts', 'value' => '6'],
            ['suit' => 'hearts', 'value' => '7'],
            ['suit' => 'hearts', 'value' => '8'],
            ['suit' => 'hearts', 'value' => '9'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '1'],
            ['suit' => 'clubs', 'value' => '2'],
            ['suit' => 'clubs', 'value' => '3'],
            ['suit' => 'clubs', 'value' => '4'],
            ['suit' => 'clubs', 'value' => '5'],
            ['suit' => 'clubs', 'value' => '6'],
            ['suit' => 'clubs', 'value' => '7'],
            ['suit' => 'clubs', 'value' => '8'],
            ['suit' => 'clubs', 'value' => '9'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '1'],
            ['suit' => 'diamonds', 'value' => '2'],
            ['suit' => 'diamonds', 'value' => '3'],
            ['suit' => 'diamonds', 'value' => '4'],
            ['suit' => 'diamonds', 'value' => '5'],
            ['suit' => 'diamonds', 'value' => '6'],
            ['suit' => 'diamonds', 'value' => '7'],
            ['suit' => 'diamonds', 'value' => '8'],
            ['suit' => 'diamonds', 'value' => '9'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'spades', 'value' => '1'],
            ['suit' => 'spades', 'value' => '2'],
            ['suit' => 'spades', 'value' => '3'],
            ['suit' => 'spades', 'value' => '4'],
            ['suit' => 'spades', 'value' => '5'],
            ['suit' => 'spades', 'value' => '6'],
            ['suit' => 'spades', 'value' => '7'],
            ['suit' => 'spades', 'value' => '8'],
            ['suit' => 'spades', 'value' => '9'],
            ['suit' => 'spades', 'value' => '10'],
            ['suit' => 'spades', 'value' => '10'],
            ['suit' => 'spades', 'value' => '10'],
            ['suit' => 'spades', 'value' => '10']
        ];;
        $case = dealCards($input);
        $this->assertInternalType('array', $case);
    }

    // failure
    public function testdealCardsFailureArray()
    {
        $input = [
            ['suit' => 'hearts', 'value' => '1'],
            ['suit' => 'hearts', 'value' => '2'],
            ['suit' => 'hearts', 'value' => '3'],
            ['suit' => 'hearts', 'value' => '4'],
            ['suit' => 'hearts', 'value' => '5'],
            ['suit' => 'hearts', 'value' => '6'],
            ['suit' => 'hearts', 'value' => '7'],
            ['suit' => 'hearts', 'value' => '8'],
            ['suit' => 'hearts', 'value' => '9'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '1'],
            ['suit' => 'clubs', 'value' => '2'],
            ['suit' => 'clubs', 'value' => '3'],
            ['suit' => 'clubs', 'value' => '4'],
            ['suit' => 'clubs', 'value' => '5'],
            ['suit' => 'clubs', 'value' => '6'],
            ['suit' => 'clubs', 'value' => '7'],
            ['suit' => 'clubs', 'value' => '8'],
            ['suit' => 'clubs', 'value' => '9'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '1'],
            ['suit' => 'diamonds', 'value' => '2'],
            ['suit' => 'diamonds', 'value' => '3'],
            ['suit' => 'diamonds', 'value' => '4'],
            ['suit' => 'diamonds', 'value' => '5'],
            ['suit' => 'diamonds', 'value' => '6'],
            ['suit' => 'diamonds', 'value' => '7'],
            ['suit' => 'diamonds', 'value' => '8'],
            ['suit' => 'diamonds', 'value' => '9'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'spades', 'value' => '1'],
            ['suit' => 'spades', 'value' => '2'],
            ['suit' => 'spades', 'value' => '3'],
            ['suit' => 'spades', 'value' => '4'],
            ['suit' => 'spades', 'value' => '5'],
            ['suit' => 'spades', 'value' => '6'],
            ['suit' => 'spades', 'value' => '7'],
            ['suit' => 'spades', 'value' => '8'],
            ['suit' => 'spades', 'value' => '9'],
            ['suit' => 'spades', 'value' => '10'],
            ['suit' => 'spades', 'value' => '10'],
            ['suit' => 'spades', 'value' => '10'],
            ['suit' => 'spades', 'value' => '10']
        ];;
        $case = dealCards($input);
        $this->assertInternalType('string', $case);
    }

    // success
    public function testgetScoresFailureArray ()
    {
        $input = [
            ['suit' => 'hearts', 'value' => '1'],
            ['suit' => 'hearts', 'value' => '2'],
            ['suit' => 'hearts', 'value' => '3'],
            ['suit' => 'hearts', 'value' => '4'],
            ['suit' => 'hearts', 'value' => '5'],
            ['suit' => 'hearts', 'value' => '6'],
            ['suit' => 'hearts', 'value' => '7'],
            ['suit' => 'hearts', 'value' => '8'],
            ['suit' => 'hearts', 'value' => '9'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'hearts', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '1'],
            ['suit' => 'clubs', 'value' => '2'],
            ['suit' => 'clubs', 'value' => '3'],
            ['suit' => 'clubs', 'value' => '4'],
            ['suit' => 'clubs', 'value' => '5'],
            ['suit' => 'clubs', 'value' => '6'],
            ['suit' => 'clubs', 'value' => '7'],
            ['suit' => 'clubs', 'value' => '8'],
            ['suit' => 'clubs', 'value' => '9'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'clubs', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '1'],
            ['suit' => 'diamonds', 'value' => '2'],
            ['suit' => 'diamonds', 'value' => '3'],
            ['suit' => 'diamonds', 'value' => '4'],
            ['suit' => 'diamonds', 'value' => '5'],
            ['suit' => 'diamonds', 'value' => '6'],
            ['suit' => 'diamonds', 'value' => '7'],
            ['suit' => 'diamonds', 'value' => '8'],
            ['suit' => 'diamonds', 'value' => '9'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'diamonds', 'value' => '10'],
            ['suit' => 'spades', 'value' => '1'],
            ['suit' => 'spades', 'value' => '2'],
            ['suit' => 'spades', 'value' => '3'],
            ['suit' => 'spades', 'value' => '4'],
            ['suit' => 'spades', 'value' => '5'],
            ['suit' => 'spades', 'value' => '6'],
            ['suit' => 'spades', 'value' => '7'],
            ['suit' => 'spades', 'value' => '8'],
            ['suit' => 'spades', 'value' => '9'],
            ['suit' => 'spades', 'value' => '10'],
            ['suit' => 'spades', 'value' => '10'],
            ['suit' => 'spades', 'value' => '10'],
            ['suit' => 'spades', 'value' => '10']
        ];
        $case = getScores($input);
        $this->assertCount(2, $case);
    }

}