<?php
/**
 * Jetpack CRM Automation Company_Deleted trigger.
 *
 * @package automattic/jetpack-crm
 * @since 6.2.0-alpha
 */

namespace Automattic\Jetpack\CRM\Automation\Triggers;

use Automattic\Jetpack\CRM\Automation\Base_Trigger;
use Automattic\Jetpack\CRM\Automation\Data_Types\Company_Data;

/**
 * Adds the Company_Deleted class.
 *
 * @since 6.2.0-alpha
 */
class Company_Deleted extends Base_Trigger {

	/**
	 * Get the slug name of the trigger.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string The slug name of the trigger.
	 */
	public static function get_slug(): string {
		return 'jpcrm/company_delete';
	}

	/**
	 * Get the title of the trigger.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string|null The title of the trigger.
	 */
	public static function get_title(): ?string {
		return __( 'Company Deleted', 'zero-bs-crm' );
	}

	/**
	 * Get the description of the trigger.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string|null The description of the trigger.
	 */
	public static function get_description(): ?string {
		return __( 'Triggered when a CRM company is deleted', 'zero-bs-crm' );
	}

	/**
	 * Get the category of the trigger.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return string|null The category of the trigger.
	 */
	public static function get_category(): ?string {
		return __( 'Company', 'zero-bs-crm' );
	}

	/**
	 * Get the date type.
	 *
	 * @return string The type of the step
	 */
	public static function get_data_type(): string {
		return Company_Data::class;
	}

	/**
	 * Listen to the desired event.
	 *
	 * @since 6.2.0-alpha
	 *
	 * @return void
	 */
	protected function listen_to_event(): void {
		$this->listen_to_wp_action( 'jpcrm_company_deleted' );
	}
}
