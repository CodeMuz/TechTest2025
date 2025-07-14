#!/usr/bin/env php
<?php
require __DIR__ . '/../vendor/autoload.php';  // Composer autoloader

use Bi\Scratchcardtest\ScratchcardScore;

if ($argc < 2) {
    echo "Usage: php run_score.php input.txt\n";
    exit(1);
}

$inputFile = $argv[1];

if (!file_exists($inputFile)) {
    echo "File not found: $inputFile\n";
    exit(1);
}

$score = ScratchcardScore::calculateTotalScoreFromFile($inputFile);
echo "Total score: $score\n";
