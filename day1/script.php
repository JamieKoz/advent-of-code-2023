<?php

// read file input
// read line
// parse for first digit and store in va1
// parse for last digit and store in val2
// place digits next to each other 1 & 2 = 12
// then sum all digits in the end
//
namespace day1;

class Solution {

	public function solve()
	{
		$contents = file('./problem.txt');
		$arrayOfAllDigits = [];
		foreach ($contents as $line) {
			preg_match_all('/\d+/', $line, $matches);

			if (count($matches[0]) > 0) {
				$concatenatedMatches = implode('', $matches[0]);
				$val1 = $concatenatedMatches[0];
				$val2 = substr($concatenatedMatches, -1);
				$combined = $val1 . $val2;
				$arrayOfAllDigits[] = $combined;
			}
		}

		$sum = 0;
		foreach($arrayOfAllDigits as $number){
			$sum += $number;
		}
		echo $sum . "\n";

	}
	
}
$solution = new Solution();
$solution->solve();

