<?php
/**
 * Jetpack CRM Automation Transaction_Field condition.
 *
 * @package automattic/jetpack-crm
 */

namespace Automattic\Jetpack\CRM\Automation\Conditions;

use Automattic\Jetpack\CRM\Automation\Automation_Exception;
use Automattic\Jetpack\CRM\Automation\Base_Condition;
use Automattic\Jetpack\CRM\Automation\Data_Types\Data_Type_Transaction;

/**
 * Transaction_Field condition class.
 *
 * @since 6.2.0-alpha
 */
class Transaction_Field extends Base_Condition {

	/**
	 * All valid operators for this condition.
	 *
	 * @since 6.2.0-alpha
	 * @var string[] $valid_operators Valid operators.
	 */
	protected $valid_operators = array(
		'is',
		'is_not',
		'contains',
		'does_not_contain',
	);

	/**
	 * All valid attributes for this condition.
	 *
	 * @since 6.2.0-alpha
	 * @var string[] $valid_operators Valid attributes.
	 */
	private $valid_attributes = array(
		'operator',
		'value',
	);

	/**
	 * Executes the condition. If the condition is met, the value stored in the
	 * attribute $condition_met is set to true; otherwise, it is set to false.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @param mixed  $data Data passed from the trigger.
	 * @param ?mixed $previous_data (Optional) The data before being changed.
	 * @return void
	 *
	 * @throws Automation_Exception If an invalid operator is encountered.
	 */
	public function execute( $data, $previous_data = null ) { // phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable
		if ( ! $this->is_valid_transaction_field_data( $data ) ) {
			$this->logger->log( 'Invalid transaction field condition data' );
			$this->condition_met = false;

			return;
		}

		$field    = $this->get_attributes()['field'];
		$operator = $this->get_attributes()['operator'];
		$value    = $this->get_attributes()['value'];

		$this->check_for_valid_operator( $operator );
		$this->logger->log( 'Condition: ' . $field . ' ' . $operator . ' ' . $value . ' => ' . $data[ $field ] );

		switch ( $operator ) {
			case 'is':
				$this->condition_met = ( $data[ $field ] === $value );
				$this->logger->log( 'Condition met?: ' . ( $this->condition_met ? 'true' : 'false' ) );
				break;

			case 'is_not':
				$this->condition_met = ( $data[ $field ] !== $value );
				$this->logger->log( 'Condition met?: ' . ( $this->condition_met ? 'true' : 'false' ) );
				break;

			case 'contains':
				$this->condition_met = ( strpos( $data[ $field ], $value ) !== false );
				$this->logger->log( 'Condition met?: ' . ( $this->condition_met ? 'true' : 'false' ) );
				break;

			case 'does_not_contain':
				$this->condition_met = ( strpos( $data[ $field ], $value ) === false );
				break;

			default:
				$this->condition_met = false;
				throw new Automation_Exception(
					/* Translators: %s is the unimplemented operator. */
					sprintf( __( 'Valid but unimplemented operator: %s', 'zero-bs-crm' ), $operator ),
					Automation_Exception::CONDITION_OPERATOR_NOT_IMPLEMENTED
				);
		}

		$this->logger->log( 'Condition met?: ' . ( $this->condition_met ? 'true' : 'false' ) );
	}

	/**
	 * Checks if the transaction has at least the necessary keys to evaluate a
	 * transaction field condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @param array $transaction_data The transaction data.
	 * @return bool True if the data is valid to evaluate a transaction field condition, false otherwise.
	 */
	private function is_valid_transaction_field_data( array $transaction_data ): bool {
		return isset( $transaction_data[ $this->get_attributes()['field'] ] );
	}

	/**
	 * Get the slug for the transaction field condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The slug 'transaction_field'.
	 */
	public static function get_slug(): string {
		return 'jpcrm/condition/transaction_field';
	}

	/**
	 * Get the title for the transaction field condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The title 'Transaction Field Changed'.
	 */
	public static function get_title(): string {
		return __( 'Transaction Field', 'zero-bs-crm' );
	}

	/**
	 * Get the description for the transaction field condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The description for the condition.
	 */
	public static function get_description(): string {
		return __( 'Checks if a transaction field matches an expected value', 'zero-bs-crm' );
	}

	/**
	 * Get the data type.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The type of the step.
	 */
	public static function get_data_type(): string {
		return Data_Type_Transaction::get_slug();
	}

	/**
	 * Get the category of the transaction field condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The category 'transaction'.
	 */
	public static function get_category(): string {
		return __( 'transaction', 'zero-bs-crm' );
	}

	/**
	 * Get the allowed triggers for the transaction field condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string[] An array of allowed triggers:
	 *               - 'jpcrm/transaction_status_updated'
	 *               - 'jpcrm/transaction_updated'
	 *               - 'jpcrm/transaction_created'
	 */
	public static function get_allowed_triggers(): array {
		return array(
			'jpcrm/transaction_status_updated',
			'jpcrm/transaction_updated',
			'jpcrm/transaction_created',
		);
	}
}
