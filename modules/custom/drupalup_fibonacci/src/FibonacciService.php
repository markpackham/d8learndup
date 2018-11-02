<?php

namespace Drupal\drupalup_fibonacci;

/*
 * A service that lets us generate Fibonacci sequences
 * The Fibonacci Sequence is the series of numbers:
0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...
The next number is found by adding up the two numbers before it.
 */

class FibonacciService {

	protected $fiboSequence = [ 1, 1 ];

	/*
	 * Generates a certain amount of Fibonacci numbers
	 * via recursion
	 */
	public function calcSomeFibos( $numberOfNumbers ) {

		if ( count( $this->fiboSequence ) == $numberOfNumbers ) {
			return $this->fiboSequence;
		} else {

			$this->fiboSequence[] = $this->getPreceding( 2 ) +
			                        $this->getPreceding( 1 );

			//Some recursion going on here & will carry on until fiboSequence is equal to the number of numbers entered
			return $this->calcSomeFibos( $numberOfNumbers );
		}
	}

	/*
	 * Getting the preceding number
	 */
	private function getPreceding( $preceding = 1 ) {
		return $this->fiboSequence[ count( $this->fiboSequence ) - $preceding ];
	}
}