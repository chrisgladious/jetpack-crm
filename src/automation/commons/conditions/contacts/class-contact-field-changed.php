<?php
/**
 * Jetpack CRM Automation Contact_Field_Changed condition.
 *
 * @package automattic/jetpack-crm
 * @since 6.2.0-alpha
 */

namespace Automattic\Jetpack\CRM\Automation\Conditions;

use Automattic\Jetpack\CRM\Automation\Automation_Exception;
use Automattic\Jetpack\CRM\Automation\Base_Condition;
use Automattic\Jetpack\CRM\Automation\Data_Types\Data_Type_Contact;

/**
 * Contact_Field_Changed condition class.
 *
 * @since 6.2.0-alpha
 */
class Contact_Field_Changed extends Base_Condition {

	/**
	 * All valid operators for this condition.
	 *
	 * @since 6.2.0-alpha
	 * @var string[] $valid_operators Valid operators.
	 */
	protected $valid_operators = array(
		'is',
		'is_not',
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
		if ( ! $this->is_valid_contact_field_changed_data( $data ) ) {
			$this->logger->log( 'Invalid contact field changed data' );
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
				return;

			case 'is_not':
				$this->condition_met = ( $data[ $field ] !== $value );
				$this->logger->log( 'Condition met?: ' . ( $this->condition_met ? 'true' : 'false' ) );
				return;

			default:
				$this->condition_met = false;
				throw new Automation_Exception(
				/* Translators: %s is the unimplemented operator. */
					sprintf( __( 'Valid but unimplemented operator: %s', 'zero-bs-crm' ), $operator ),
					Automation_Exception::CONDITION_OPERATOR_NOT_IMPLEMENTED
				);
		}
	}

	/**
	 * Checks if the contact has at least the necessary keys to detect a field
	 * change.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @param array $contact_data The contact data.
	 * @return bool True if the data is valid to detect a field change, false otherwise
	 */
	private function is_valid_contact_field_changed_data( array $contact_data ): bool {
		return isset( $contact_data[ $this->get_attributes()['field'] ] );
	}

	/**
	 * Get the slug for the contact field changed condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The slug 'contact_field_changed'.
	 */
	public static function get_slug(): string {
		return 'jpcrm/condition/contact_field_changed';
	}

	/**
	 * Get the title for the contact field changed condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The title 'Contact Field Changed'.
	 */
	public static function get_title(): string {
		return __( 'Contact Field Changed', 'zero-bs-crm' );
	}

	/**
	 * Get the description for the contact field changed condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The description for the condition.
	 */
	public static function get_description(): string {
		return __( 'Checks if a contact field change matches an expected value', 'zero-bs-crm' );
	}

	/**
	 * Get the category of the contact field changed condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The category 'jpcrm/contact_condition'.
	 */
	public static function get_category(): string {
		return __( 'contact', 'zero-bs-crm' );
	}

	/**
	 * Get the data type.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The type of the step.
	 */
	public static function get_data_type(): string {
		return Data_Type_Contact::get_slug();
	}

	/**
	 * Get the allowed triggers for the contact field changed condition.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string[] An array of allowed triggers:
	 *               - 'jpcrm/contact_status_updated'
	 *               - 'jpcrm/contact_updated'
	 */
	public static function get_allowed_triggers(): array {
		return array(
			'jpcrm/contact_status_updated',
			'jpcrm/contact_updated',
		);
	}
}
