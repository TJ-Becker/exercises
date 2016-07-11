<?php
    function newDeck() {
        $deck = [
            ["Two of Hearts", 2],
            ["Three of Hearts", 3],
            ["Four of Hearts", 4],
            ["Five of Hearts", 5],
            ["Six of Hearts", 6],
            ["Seven of Hearts", 7],
            ["Eight of Hearts", 8],
            ["Nine of Hearts", 9],
            ["Ten of Hearts", 10],
            ["Jack of Hearts", 10],
            ["Queen of Hearts", 10],
            ["King of Hearts", 10],
            ["Ace of Hearts", 1, 11],
            ["Two of Spades", 2],
            ["Three of Spades", 3],
            ["Four of Spades", 4],
            ["Five of Spades", 5],
            ["Six of Spades", 6],
            ["Seven of Spades", 7],
            ["Eight of Spades", 8],
            ["Nine of Spades", 9],
            ["Ten of Spades", 10],
            ["Jack of Spades", 10],
            ["Queen of Spades", 10],
            ["King of Spades", 10],
            ["Ace of Spades", 1, 11],
            ["Two of Clubs", 2],
            ["Three of Clubs", 3],
            ["Four of Clubs", 4],
            ["Five of Clubs", 5],
            ["Six of Clubs", 6],
            ["Seven of Clubs", 7],
            ["Eight of Clubs", 8],
            ["Nine of Clubs", 9],
            ["Ten of Clubs", 10],
            ["Jack of Clubs", 10],
            ["Queen of Clubs", 10],
            ["King of Clubs", 10],
            ["Ace of Clubs", 1, 11],
            ["Two of Diamonds", 2],
            ["Three of Diamonds", 3],
            ["Four of Diamonds", 4],
            ["Five of Diamonds", 5],
            ["Six of Diamonds", 6],
            ["Seven of Diamonds", 7],
            ["Eight of Diamonds", 8],
            ["Nine of Diamonds", 9],
            ["Ten of Diamonds", 10],
            ["Jack of Diamonds", 10],
            ["Queen of Diamonds", 10],
            ["King of Diamonds", 10],
            ["Ace of Diamonds", 1, 11]
        ];
        shuffle($deck);
        return $deck;
    }

    function randomCard(&$array) {
        $random = mt_rand(0, (count($array) - 1));
        $card = $array[$random];
        unset($array[$random]);
        $array = array_values($array);
        return $card;
    }

    function displayHand($array) {
        $last = end($array);
        foreach ($array as $card) {
            if ($card === $last) {
                echo "{$card[0]}", PHP_EOL;
            } else {
                echo "{$card[0]}, ";
            }
        }
    }

    function handValue(&$hand) {
        $value = 0;
        foreach ($hand as $key => $card) {
            if ($card[2] === 11) {
                $aces = [];
                $aces[] = $card;
                unset($hand[$key]);
                foreach ($aces as $ace) {
                    $hand[] = $ace;
                }
            }
            $value += $card[1];
            if ($value == 21) {
                $value = "Blackjack!";
            } else if ($value > 21) {
                $value = "Bust.";
            }
        }
        return $value;
    }



    $deck = newDeck();
    $dealerCard = randomCard($deck);
    $card = randomCard($deck);
    $dealerHand[] = $dealerCard;
    $hand[] = $card;

    echo "DEALER HAND: ";
    displayHand($dealerHand);
    echo "Your hand: ";
    displayHand($hand);

    fwrite(STDOUT, "Hit? (y/n) \n");
    $hit = trim(fgets(STDIN));
    if ($hit === "y") {
        do {
            $card = randomCard($deck);
            $hand[] = $card;
            handValue($hand);
            echo "Your hand: ";
            displayHand($hand);
            echo handValue($hand), PHP_EOL;
            if (!is_int(handValue($hand))) {
                break;
            }
            fwrite(STDOUT, "Hit? (y/n) \n");
            $hit = fgets(STDIN);
        } while ($hit !== "n");
    }






