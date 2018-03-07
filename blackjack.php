<?php

function createDeck() {
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
}
/**
* Shuffles deck, gets 4 random cards and returns them
*
* @param $deck array Deck of 52 playing cards
*
* @return array 4 random cards from deck
*/
function dealCards(array $deck):array {
shuffle($deck);
$card1 = array_pop($deck);
$card2 = array_pop($deck);
$card3 = array_pop($deck);
$card4 = array_pop($deck);
return [$card1, $card2, $card3, $card4];
}

/**
* Works out player and dealer scores
*
* @param $deck array Deck of 52 playing cards
*
* @return array Player and dealer scores
*/
function getScores(array $deck):array {
$_1stCard = $cards[0]['value'];
$_2ndCard = $cards[1]['value'];
$_3rdCard = $cards[2]['value'];
$_4thCard = $cards[3]['value'];

if ($_1stCard == 1 && $_3rdCard == 1) {
$_1stCard = 11;
}
if ($_2ndCard == 1 && $_4thCard == 1) {
$_2ndCard = 11;
}
$playerScore = $_1stCard + $_3rdCard;
$dealerScore = $_2ndCard + $_4thCard;
return [$playerScore, $dealerScore];
}

/**
* Works out who won and displays message
*
* @param $deck array Deck of 52 playing cards
*
* @return string Tell player if they won or lost
*/
function findWinner(array $scores):string {
if ($scores[0] > $scores[1]) {
return "You win!";
} else {
return "You lose!";
}
}

function play(){
$deck = createDeck();
$cards = dealCards($deck);
$scores = getScores($cards);
return findWinner($scores);
}

echo play();

?>