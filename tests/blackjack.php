<?php

use PHPUnit\Framework\TestCase;

require('../blackjack.php');

class StackTest extends TestCase
{

    /*****************************
     Testing createDeck()
     *****************************/

    // success - check if deck is an array
    public function testcreateDeckSuccessArray()
    {
        $case = createDeck();
        $this->assertInternalType('array', $case, $message = 'Error: Not expected data type');
    }

    // success - check if number of elements in array is as expected
    public function testcreateDeckSuccessCount()
    {
        $case = createDeck();
        $this->assertCount(52, $case, $message = 'Error: Less than 52 cards in pack');
    }

    // success - check that deck contains suit hearts
    public function testcreateDeckSuccessSuitHeart()
    {
        $case = createDeck();
        $this->assertNotContains('heart', $case);
        // Can you loop through each array element to check each one?
        // Can you use in_array() to check?
    }

    // success - check that deck contains value 1
    public function testcreateDeckSuccessValue1()
    {
        $case = createDeck();
        $this->assertNotContains('1', $case);
        // Can you loop through each array element to check each one?
        // Can you use in_array() to check?
    }

    /************************
     Testing dealCards()
     ************************/

    // success - check if hand is an array
    public function testdealCardsSuccessArray()
    {
        $deck = [
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
        $case = dealCards($deck);
        $this->assertInternalType('array', $case, $message = 'Error: Not expected data type');
    }

    // success - check that hand contains 'suit'
    public function testdealCardsSuccessSuit()
    {
        $deck = [
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
        $case = dealCards($deck);
        $this->assertNotContains('suit', $case);
    }

    // success - check that hand contains 'clubs'
    public function testdealCardsSuccessSuitClubs()
    {
        $deck = [
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
        $case = dealCards($deck);
        $this->assertNotContains('clubs', $case);
    }

    // failure - check if number of elements in array is as expected
    public function testdealCardsFailureCount()
    {
        $deck = [
            ['suit' => 'hearts', 'value' => '1'],
            ['suit' => 'hearts', 'value' => '2'],
            ['suit' => 'hearts', 'value' => '3'],
        ];
        $case = dealCards($deck);
        $this->assertCount(4, $case, $message = 'Error: Less than 4 cards in hand');
    }

    //malformed test - give it an empty array and prime it to expect an exception
    public function testdealCardsMalformed ()
    {
        $input = [];
        $this->expectException(TypeError::class);
        $case = dealCards($input);
        
        // test fails - is that supposed to happen?
    }

    /*****************************
     Testing getScores()
     *****************************/

    // success - check if getScores() returns an array
    public function testgetScoresSuccessArray ()
    {
        $cards = [
            ['suit' => 'hearts', 'value' => '1'],
            ['suit' => 'hearts', 'value' => '2'],
            ['suit' => 'hearts', 'value' => '3'],
            ['suit' => 'hearts', 'value' => '4'],
        ];
        $case = getScores($cards);
        $this->assertInternalType('array', $case, $message = 'Error: Not expected data type');
    }

    // success - check if getScores() returns only 2 values/numbers
    public function testgetScoresSuccessCount ()
    {
        $cards = [
            ['suit' => 'hearts', 'value' => '1'],
            ['suit' => 'hearts', 'value' => '2'],
            ['suit' => 'hearts', 'value' => '3'],
            ['suit' => 'hearts', 'value' => '4'],
        ];
        $case = getScores($cards);
        $this->assertCount(2, $case);
    }

    // success - check if getScores() returns numbers only
    public function testgetScoresSuccessDataType ()
    {
        $cards = [
            ['suit' => 'hearts', 'value' => '1'],
            ['suit' => 'hearts', 'value' => '2'],
            ['suit' => 'hearts', 'value' => '3'],
            ['suit' => 'hearts', 'value' => '4'],
        ];
        $case = getScores($cards);
        $this->assertContainsOnly('integer', $case);
    }

    // failure - give it an array of 3 cards
    public function testgetScoresFailureArray ()
    {
        $cards = [
            ['suit' => 'hearts', 'value' => '1'],
            ['suit' => 'hearts', 'value' => '2'],
            ['suit' => 'hearts', 'value' => '3'],
            ['suit' => 'hearts', 'value' => '4'],
        ];
        $case = getScores($cards);
        $this->assertCount(2, $case);
    }



    //malformed test - give it an empty array and prime it to expect an exception





}
