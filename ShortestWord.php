<?php
class ShortestWord {
    private $sentence;

    public function __construct(string $sentence) {
        $this->sentence = $sentence;
    }

    public function getShortestWordLength(): int {
        $words = explode(' ', $this->sentence);
        $shortestLength = PHP_INT_MAX;
        foreach ($words as $word) {
            $length = strlen($word);
            if ($length < $shortestLength) {
                $shortestLength = $length;
            }
        }
        return $shortestLength;
    }
}

// Test cases
$test1 = new ShortestWord("TRUE FRIENDS ARE ME AND YOU");
echo "Output: " . $test1->getShortestWordLength() . PHP_EOL;

$test2 = new ShortestWord("I AM THE LEGENDARY VILLAIN");
echo "Output: " . $test2->getShortestWordLength() . PHP_EOL;
?>
