<?php

namespace Drupal\drupalup_fibonacci\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\drupalup_fibonacci\FibonacciService;
use Symfony\Component\DependencyInjection\ContainerInterface;

/*
 * Fibonacci form
 */

class FiboForm extends FormBase {

	protected $fiboService;

	public function __construct( FibonacciService $fiboService ) {
		$this->fiboService = $fiboService;
	}

	public static function create( ContainerInterface $container ) {
		return new static(
			$container->get( 'drupalup_fibonacci.calc_fibo' )
		);
	}

	/*
	 * {@inheritdoc}
	 */
	public function getFormId() {
		return 'drupalup_fibonacci_form';
	}

	/*
 * {@inheritdoc}
 */
	public function buildForm( array $form, FormStateInterface $form_state ) {
		//kint( $this->fiboService );

		$form['fibo_numbers'] = [
			'#type'  => 'textfield',
			'#title' => $this->t( 'How many Fibonacci numbers do you want to generate?' ),
		];

		$form['submit'] = [
			'#type'  => 'submit',
			'#value' => $this->t( 'Generate!' ),
		];

		return $form;
	}

	/*
* {@inheritdoc}
*/
	public function submitForm( array &$form, FormStateInterface $form_state ) {
		drupal_set_message( 'The Fibionacci sequence is: ' . implode( ',',
				$this->fiboService->calcSomeFibos( $form_state->getValue( 'fibo_numbers' ) ) ) );
	}

}