<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Automattic\\Jetpack\\Assets' => $baseDir . '/jetpack_vendor/automattic/jetpack-assets/src/class-assets.php',
    'Automattic\\Jetpack\\Assets\\Semver' => $baseDir . '/jetpack_vendor/automattic/jetpack-assets/src/class-semver.php',
    'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
    'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
    'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
    'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => $vendorDir . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
    'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => $vendorDir . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Action' => $baseDir . '/src/automation/interface-action.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Actions\\Add_Contact_Log' => $baseDir . '/src/automation/commons/actions/contacts/class-add-contact-log.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Actions\\Add_Remove_Contact_Tag' => $baseDir . '/src/automation/commons/actions/contacts/class-add-remove-contact-tag.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Actions\\Delete_Contact' => $baseDir . '/src/automation/commons/actions/contacts/class-delete-contact.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Actions\\New_Contact' => $baseDir . '/src/automation/commons/actions/contacts/class-new-contact.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Actions\\Set_Invoice_Status' => $baseDir . '/src/automation/commons/actions/invoice/class-set-invoice-status.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Actions\\Set_Transaction_Status' => $baseDir . '/src/automation/commons/actions/transactions/class-set-transaction-status.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Actions\\Update_Contact' => $baseDir . '/src/automation/commons/actions/contacts/class-update-contact.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Actions\\Update_Contact_Status' => $baseDir . '/src/automation/commons/actions/contacts/class-update-contact-status.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Attribute_Definition' => $baseDir . '/src/automation/class-attribute-definition.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Automation_Bootstrap' => $baseDir . '/src/automation/class-automation-bootstrap.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Automation_Engine' => $baseDir . '/src/automation/class-automation-engine.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Automation_Exception' => $baseDir . '/src/automation/class-automation-exception.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Automation_Logger' => $baseDir . '/src/automation/class-automation-logger.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Automation_Workflow' => $baseDir . '/src/automation/class-automation-workflow.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Base_Action' => $baseDir . '/src/automation/class-base-action.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Base_Condition' => $baseDir . '/src/automation/class-base-condition.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Base_Step' => $baseDir . '/src/automation/class-base-step.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Base_Trigger' => $baseDir . '/src/automation/class-base-trigger.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Condition' => $baseDir . '/src/automation/interface-condition.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Conditions\\Contact_Field_Changed' => $baseDir . '/src/automation/commons/conditions/contacts/class-contact-field-changed.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Conditions\\Contact_Tag' => $baseDir . '/src/automation/commons/conditions/contacts/class-contact-tag.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Conditions\\Contact_Transitional_Status' => $baseDir . '/src/automation/commons/conditions/contacts/class-contact-transitional-status.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Conditions\\Invoice_Field_Contains' => $baseDir . '/src/automation/commons/conditions/invoices/class-invoice-field-contains.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Conditions\\Invoice_Status_Changed' => $baseDir . '/src/automation/commons/conditions/invoices/class-invoice-status-changed.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Conditions\\Quote_Status_Changed' => $baseDir . '/src/automation/commons/conditions/quotes/class-quote-status-changed.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Conditions\\Transaction_Field' => $baseDir . '/src/automation/commons/conditions/transactions/class-transaction-field.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Transformer_Exception' => $baseDir . '/src/automation/class-data-transformer-exception.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Transformers\\Data_Transformer_Base' => $baseDir . '/src/automation/data-transformers/class-data-transformer-base.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Transformers\\Data_Transformer_Invoice_To_Contact' => $baseDir . '/src/automation/data-transformers/class-data-transformer-invoice-to-contact.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Type_Exception' => $baseDir . '/src/automation/class-data-type-exception.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Types\\Data_Type_Base' => $baseDir . '/src/automation/data-types/class-data-type-base.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Types\\Data_Type_Company' => $baseDir . '/src/automation/data-types/class-data-type-company.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Types\\Data_Type_Contact' => $baseDir . '/src/automation/data-types/class-data-type-contact.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Types\\Data_Type_Event' => $baseDir . '/src/automation/data-types/class-data-type-event.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Types\\Data_Type_Invoice' => $baseDir . '/src/automation/data-types/class-data-type-invoice.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Types\\Data_Type_Quote' => $baseDir . '/src/automation/data-types/class-data-type-quote.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Data_Types\\Data_Type_Transaction' => $baseDir . '/src/automation/data-types/class-data-type-transaction.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Step' => $baseDir . '/src/automation/interface-step.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Step_Exception' => $baseDir . '/src/automation/class-step-exception.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Trigger' => $baseDir . '/src/automation/interface-trigger.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Company_Created' => $baseDir . '/src/automation/commons/triggers/companies/class-company-created.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Company_Deleted' => $baseDir . '/src/automation/commons/triggers/companies/class-company-deleted.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Company_Status_Updated' => $baseDir . '/src/automation/commons/triggers/companies/class-company-status-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Company_Updated' => $baseDir . '/src/automation/commons/triggers/companies/class-company-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Contact_Before_Deleted' => $baseDir . '/src/automation/commons/triggers/contacts/class-contact-before-deleted.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Contact_Created' => $baseDir . '/src/automation/commons/triggers/contacts/class-contact-created.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Contact_Deleted' => $baseDir . '/src/automation/commons/triggers/contacts/class-contact-deleted.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Contact_Email_Updated' => $baseDir . '/src/automation/commons/triggers/contacts/class-contact-email-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Contact_Status_Updated' => $baseDir . '/src/automation/commons/triggers/contacts/class-contact-status-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Contact_Updated' => $baseDir . '/src/automation/commons/triggers/contacts/class-contact-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Event_Created' => $baseDir . '/src/automation/commons/triggers/events/class-event-created.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Event_Deleted' => $baseDir . '/src/automation/commons/triggers/events/class-event-deleted.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Event_Updated' => $baseDir . '/src/automation/commons/triggers/events/class-event-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Invoice_Created' => $baseDir . '/src/automation/commons/triggers/invoices/class-invoice-created.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Invoice_Deleted' => $baseDir . '/src/automation/commons/triggers/invoices/class-invoice-deleted.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Invoice_Status_Updated' => $baseDir . '/src/automation/commons/triggers/invoices/class-invoice-status-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Invoice_Updated' => $baseDir . '/src/automation/commons/triggers/invoices/class-invoice-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Quote_Accepted' => $baseDir . '/src/automation/commons/triggers/quotes/class-quote-accepted.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Quote_Created' => $baseDir . '/src/automation/commons/triggers/quotes/class-quote-created.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Quote_Deleted' => $baseDir . '/src/automation/commons/triggers/quotes/class-quote-deleted.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Quote_Status_Updated' => $baseDir . '/src/automation/commons/triggers/quotes/class-quote-status-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Quote_Updated' => $baseDir . '/src/automation/commons/triggers/quotes/class-quote-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Transaction_Created' => $baseDir . '/src/automation/commons/triggers/transactions/class-transaction-created.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Triggers\\Transaction_Updated' => $baseDir . '/src/automation/commons/triggers/transactions/class-transaction-updated.php',
    'Automattic\\Jetpack\\CRM\\Automation\\Workflow_Exception' => $baseDir . '/src/automation/class-workflow-exception.php',
    'Automattic\\Jetpack\\CRM\\Entities\\Company' => $baseDir . '/src/entities/class-company.php',
    'Automattic\\Jetpack\\CRM\\Entities\\Contact' => $baseDir . '/src/entities/class-contact.php',
    'Automattic\\Jetpack\\CRM\\Entities\\Invoice' => $baseDir . '/src/entities/class-invoice.php',
    'Automattic\\Jetpack\\CRM\\Entities\\Quote' => $baseDir . '/src/entities/class-quote.php',
    'Automattic\\Jetpack\\CRM\\Entities\\Tag' => $baseDir . '/src/entities/class-tag.php',
    'Automattic\\Jetpack\\CRM\\Entities\\Task' => $baseDir . '/src/entities/class-task.php',
    'Automattic\\Jetpack\\CRM\\Entities\\Transaction' => $baseDir . '/src/entities/class-transaction.php',
    'Automattic\\Jetpack\\CRM\\Event_Manager\\Contact_Event' => $baseDir . '/src/event-manager/managers/class-contact-event.php',
    'Automattic\\Jetpack\\CRM\\Event_Manager\\Event' => $baseDir . '/src/event-manager/interface-event.php',
    'Automattic\\Jetpack\\CRM\\Event_Manager\\Events_Manager' => $baseDir . '/src/event-manager/class-events-manager.php',
    'Automattic\\Jetpack\\CRM\\Event_Manager\\Invoice_Event' => $baseDir . '/src/event-manager/managers/class-invoice-event.php',
    'Automattic\\Jetpack\\CRM\\Event_Manager\\Transaction_Event' => $baseDir . '/src/event-manager/managers/class-transaction-event.php',
    'Automattic\\Jetpack\\CRM\\REST_API\\V4\\REST_Automation_Controller' => $baseDir . '/src/rest-api/v4/class-rest-automation-controller.php',
    'Automattic\\Jetpack\\CRM\\REST_API\\V4\\REST_Base_Controller' => $baseDir . '/src/rest-api/v4/class-rest-base-controller.php',
    'Automattic\\Jetpack\\CRM\\REST_API\\V4\\REST_Base_Objects_Controller' => $baseDir . '/src/rest-api/v4/class-rest-base-objects-controller.php',
    'Automattic\\Jetpack\\CRM\\REST_API\\V4\\REST_Contacts_Controller' => $baseDir . '/src/rest-api/v4/class-rest-contacts-controller.php',
    'Automattic\\Jetpack\\Composer\\Manager' => $vendorDir . '/automattic/jetpack-composer-plugin/src/class-manager.php',
    'Automattic\\Jetpack\\Composer\\Plugin' => $vendorDir . '/automattic/jetpack-composer-plugin/src/class-plugin.php',
    'Automattic\\Jetpack\\Constants' => $baseDir . '/jetpack_vendor/automattic/jetpack-constants/src/class-constants.php',
    'Automattic\\Jetpack_CRM\\Onboarding_Wizard\\Bootstrap' => $baseDir . '/src/onboarding-wizard/class-bootstrap.php',
    'Automattic\\WooCommerce\\Client' => $vendorDir . '/automattic/woocommerce/src/WooCommerce/Client.php',
    'Automattic\\WooCommerce\\HttpClient\\BasicAuth' => $vendorDir . '/automattic/woocommerce/src/WooCommerce/HttpClient/BasicAuth.php',
    'Automattic\\WooCommerce\\HttpClient\\HttpClient' => $vendorDir . '/automattic/woocommerce/src/WooCommerce/HttpClient/HttpClient.php',
    'Automattic\\WooCommerce\\HttpClient\\HttpClientException' => $vendorDir . '/automattic/woocommerce/src/WooCommerce/HttpClient/HttpClientException.php',
    'Automattic\\WooCommerce\\HttpClient\\OAuth' => $vendorDir . '/automattic/woocommerce/src/WooCommerce/HttpClient/OAuth.php',
    'Automattic\\WooCommerce\\HttpClient\\Options' => $vendorDir . '/automattic/woocommerce/src/WooCommerce/HttpClient/Options.php',
    'Automattic\\WooCommerce\\HttpClient\\Request' => $vendorDir . '/automattic/woocommerce/src/WooCommerce/HttpClient/Request.php',
    'Automattic\\WooCommerce\\HttpClient\\Response' => $vendorDir . '/automattic/woocommerce/src/WooCommerce/HttpClient/Response.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Dompdf\\Adapter\\CPDF' => $vendorDir . '/dompdf/dompdf/src/Adapter/CPDF.php',
    'Dompdf\\Adapter\\GD' => $vendorDir . '/dompdf/dompdf/src/Adapter/GD.php',
    'Dompdf\\Adapter\\PDFLib' => $vendorDir . '/dompdf/dompdf/src/Adapter/PDFLib.php',
    'Dompdf\\Canvas' => $vendorDir . '/dompdf/dompdf/src/Canvas.php',
    'Dompdf\\CanvasFactory' => $vendorDir . '/dompdf/dompdf/src/CanvasFactory.php',
    'Dompdf\\Cellmap' => $vendorDir . '/dompdf/dompdf/src/Cellmap.php',
    'Dompdf\\Cpdf' => $vendorDir . '/dompdf/dompdf/lib/Cpdf.php',
    'Dompdf\\Css\\AttributeTranslator' => $vendorDir . '/dompdf/dompdf/src/Css/AttributeTranslator.php',
    'Dompdf\\Css\\Color' => $vendorDir . '/dompdf/dompdf/src/Css/Color.php',
    'Dompdf\\Css\\Style' => $vendorDir . '/dompdf/dompdf/src/Css/Style.php',
    'Dompdf\\Css\\Stylesheet' => $vendorDir . '/dompdf/dompdf/src/Css/Stylesheet.php',
    'Dompdf\\Dompdf' => $vendorDir . '/dompdf/dompdf/src/Dompdf.php',
    'Dompdf\\Exception' => $vendorDir . '/dompdf/dompdf/src/Exception.php',
    'Dompdf\\Exception\\ImageException' => $vendorDir . '/dompdf/dompdf/src/Exception/ImageException.php',
    'Dompdf\\FontMetrics' => $vendorDir . '/dompdf/dompdf/src/FontMetrics.php',
    'Dompdf\\Frame' => $vendorDir . '/dompdf/dompdf/src/Frame.php',
    'Dompdf\\FrameDecorator\\AbstractFrameDecorator' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/AbstractFrameDecorator.php',
    'Dompdf\\FrameDecorator\\Block' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/Block.php',
    'Dompdf\\FrameDecorator\\Image' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/Image.php',
    'Dompdf\\FrameDecorator\\Inline' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/Inline.php',
    'Dompdf\\FrameDecorator\\ListBullet' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/ListBullet.php',
    'Dompdf\\FrameDecorator\\ListBulletImage' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/ListBulletImage.php',
    'Dompdf\\FrameDecorator\\NullFrameDecorator' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/NullFrameDecorator.php',
    'Dompdf\\FrameDecorator\\Page' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/Page.php',
    'Dompdf\\FrameDecorator\\Table' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/Table.php',
    'Dompdf\\FrameDecorator\\TableCell' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/TableCell.php',
    'Dompdf\\FrameDecorator\\TableRow' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/TableRow.php',
    'Dompdf\\FrameDecorator\\TableRowGroup' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/TableRowGroup.php',
    'Dompdf\\FrameDecorator\\Text' => $vendorDir . '/dompdf/dompdf/src/FrameDecorator/Text.php',
    'Dompdf\\FrameReflower\\AbstractFrameReflower' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/AbstractFrameReflower.php',
    'Dompdf\\FrameReflower\\Block' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/Block.php',
    'Dompdf\\FrameReflower\\Image' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/Image.php',
    'Dompdf\\FrameReflower\\Inline' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/Inline.php',
    'Dompdf\\FrameReflower\\ListBullet' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/ListBullet.php',
    'Dompdf\\FrameReflower\\NullFrameReflower' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/NullFrameReflower.php',
    'Dompdf\\FrameReflower\\Page' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/Page.php',
    'Dompdf\\FrameReflower\\Table' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/Table.php',
    'Dompdf\\FrameReflower\\TableCell' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/TableCell.php',
    'Dompdf\\FrameReflower\\TableRow' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/TableRow.php',
    'Dompdf\\FrameReflower\\TableRowGroup' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/TableRowGroup.php',
    'Dompdf\\FrameReflower\\Text' => $vendorDir . '/dompdf/dompdf/src/FrameReflower/Text.php',
    'Dompdf\\Frame\\Factory' => $vendorDir . '/dompdf/dompdf/src/Frame/Factory.php',
    'Dompdf\\Frame\\FrameListIterator' => $vendorDir . '/dompdf/dompdf/src/Frame/FrameListIterator.php',
    'Dompdf\\Frame\\FrameTree' => $vendorDir . '/dompdf/dompdf/src/Frame/FrameTree.php',
    'Dompdf\\Frame\\FrameTreeIterator' => $vendorDir . '/dompdf/dompdf/src/Frame/FrameTreeIterator.php',
    'Dompdf\\Helpers' => $vendorDir . '/dompdf/dompdf/src/Helpers.php',
    'Dompdf\\Image\\Cache' => $vendorDir . '/dompdf/dompdf/src/Image/Cache.php',
    'Dompdf\\JavascriptEmbedder' => $vendorDir . '/dompdf/dompdf/src/JavascriptEmbedder.php',
    'Dompdf\\LineBox' => $vendorDir . '/dompdf/dompdf/src/LineBox.php',
    'Dompdf\\Options' => $vendorDir . '/dompdf/dompdf/src/Options.php',
    'Dompdf\\PhpEvaluator' => $vendorDir . '/dompdf/dompdf/src/PhpEvaluator.php',
    'Dompdf\\Positioner\\Absolute' => $vendorDir . '/dompdf/dompdf/src/Positioner/Absolute.php',
    'Dompdf\\Positioner\\AbstractPositioner' => $vendorDir . '/dompdf/dompdf/src/Positioner/AbstractPositioner.php',
    'Dompdf\\Positioner\\Block' => $vendorDir . '/dompdf/dompdf/src/Positioner/Block.php',
    'Dompdf\\Positioner\\Fixed' => $vendorDir . '/dompdf/dompdf/src/Positioner/Fixed.php',
    'Dompdf\\Positioner\\Inline' => $vendorDir . '/dompdf/dompdf/src/Positioner/Inline.php',
    'Dompdf\\Positioner\\ListBullet' => $vendorDir . '/dompdf/dompdf/src/Positioner/ListBullet.php',
    'Dompdf\\Positioner\\NullPositioner' => $vendorDir . '/dompdf/dompdf/src/Positioner/NullPositioner.php',
    'Dompdf\\Positioner\\TableCell' => $vendorDir . '/dompdf/dompdf/src/Positioner/TableCell.php',
    'Dompdf\\Positioner\\TableRow' => $vendorDir . '/dompdf/dompdf/src/Positioner/TableRow.php',
    'Dompdf\\Renderer' => $vendorDir . '/dompdf/dompdf/src/Renderer.php',
    'Dompdf\\Renderer\\AbstractRenderer' => $vendorDir . '/dompdf/dompdf/src/Renderer/AbstractRenderer.php',
    'Dompdf\\Renderer\\Block' => $vendorDir . '/dompdf/dompdf/src/Renderer/Block.php',
    'Dompdf\\Renderer\\Image' => $vendorDir . '/dompdf/dompdf/src/Renderer/Image.php',
    'Dompdf\\Renderer\\Inline' => $vendorDir . '/dompdf/dompdf/src/Renderer/Inline.php',
    'Dompdf\\Renderer\\ListBullet' => $vendorDir . '/dompdf/dompdf/src/Renderer/ListBullet.php',
    'Dompdf\\Renderer\\TableCell' => $vendorDir . '/dompdf/dompdf/src/Renderer/TableCell.php',
    'Dompdf\\Renderer\\TableRowGroup' => $vendorDir . '/dompdf/dompdf/src/Renderer/TableRowGroup.php',
    'Dompdf\\Renderer\\Text' => $vendorDir . '/dompdf/dompdf/src/Renderer/Text.php',
    'FontLib\\AdobeFontMetrics' => $vendorDir . '/phenx/php-font-lib/src/FontLib/AdobeFontMetrics.php',
    'FontLib\\Autoloader' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Autoloader.php',
    'FontLib\\BinaryStream' => $vendorDir . '/phenx/php-font-lib/src/FontLib/BinaryStream.php',
    'FontLib\\EOT\\File' => $vendorDir . '/phenx/php-font-lib/src/FontLib/EOT/File.php',
    'FontLib\\EOT\\Header' => $vendorDir . '/phenx/php-font-lib/src/FontLib/EOT/Header.php',
    'FontLib\\EncodingMap' => $vendorDir . '/phenx/php-font-lib/src/FontLib/EncodingMap.php',
    'FontLib\\Exception\\FontNotFoundException' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Exception/FontNotFoundException.php',
    'FontLib\\Font' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Font.php',
    'FontLib\\Glyph\\Outline' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Glyph/Outline.php',
    'FontLib\\Glyph\\OutlineComponent' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineComponent.php',
    'FontLib\\Glyph\\OutlineComposite' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineComposite.php',
    'FontLib\\Glyph\\OutlineSimple' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineSimple.php',
    'FontLib\\Header' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Header.php',
    'FontLib\\OpenType\\File' => $vendorDir . '/phenx/php-font-lib/src/FontLib/OpenType/File.php',
    'FontLib\\OpenType\\TableDirectoryEntry' => $vendorDir . '/phenx/php-font-lib/src/FontLib/OpenType/TableDirectoryEntry.php',
    'FontLib\\Table\\DirectoryEntry' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/DirectoryEntry.php',
    'FontLib\\Table\\Table' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Table.php',
    'FontLib\\Table\\Type\\cmap' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/cmap.php',
    'FontLib\\Table\\Type\\glyf' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/glyf.php',
    'FontLib\\Table\\Type\\head' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/head.php',
    'FontLib\\Table\\Type\\hhea' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/hhea.php',
    'FontLib\\Table\\Type\\hmtx' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/hmtx.php',
    'FontLib\\Table\\Type\\kern' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/kern.php',
    'FontLib\\Table\\Type\\loca' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/loca.php',
    'FontLib\\Table\\Type\\maxp' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/maxp.php',
    'FontLib\\Table\\Type\\name' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/name.php',
    'FontLib\\Table\\Type\\nameRecord' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/nameRecord.php',
    'FontLib\\Table\\Type\\os2' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/os2.php',
    'FontLib\\Table\\Type\\post' => $vendorDir . '/phenx/php-font-lib/src/FontLib/Table/Type/post.php',
    'FontLib\\TrueType\\Collection' => $vendorDir . '/phenx/php-font-lib/src/FontLib/TrueType/Collection.php',
    'FontLib\\TrueType\\File' => $vendorDir . '/phenx/php-font-lib/src/FontLib/TrueType/File.php',
    'FontLib\\TrueType\\Header' => $vendorDir . '/phenx/php-font-lib/src/FontLib/TrueType/Header.php',
    'FontLib\\TrueType\\TableDirectoryEntry' => $vendorDir . '/phenx/php-font-lib/src/FontLib/TrueType/TableDirectoryEntry.php',
    'FontLib\\WOFF\\File' => $vendorDir . '/phenx/php-font-lib/src/FontLib/WOFF/File.php',
    'FontLib\\WOFF\\Header' => $vendorDir . '/phenx/php-font-lib/src/FontLib/WOFF/Header.php',
    'FontLib\\WOFF\\TableDirectoryEntry' => $vendorDir . '/phenx/php-font-lib/src/FontLib/WOFF/TableDirectoryEntry.php',
    'Masterminds\\HTML5' => $vendorDir . '/masterminds/html5/src/HTML5.php',
    'Masterminds\\HTML5\\Elements' => $vendorDir . '/masterminds/html5/src/HTML5/Elements.php',
    'Masterminds\\HTML5\\Entities' => $vendorDir . '/masterminds/html5/src/HTML5/Entities.php',
    'Masterminds\\HTML5\\Exception' => $vendorDir . '/masterminds/html5/src/HTML5/Exception.php',
    'Masterminds\\HTML5\\InstructionProcessor' => $vendorDir . '/masterminds/html5/src/HTML5/InstructionProcessor.php',
    'Masterminds\\HTML5\\Parser\\CharacterReference' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/CharacterReference.php',
    'Masterminds\\HTML5\\Parser\\DOMTreeBuilder' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/DOMTreeBuilder.php',
    'Masterminds\\HTML5\\Parser\\EventHandler' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/EventHandler.php',
    'Masterminds\\HTML5\\Parser\\FileInputStream' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/FileInputStream.php',
    'Masterminds\\HTML5\\Parser\\InputStream' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/InputStream.php',
    'Masterminds\\HTML5\\Parser\\ParseError' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/ParseError.php',
    'Masterminds\\HTML5\\Parser\\Scanner' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/Scanner.php',
    'Masterminds\\HTML5\\Parser\\StringInputStream' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/StringInputStream.php',
    'Masterminds\\HTML5\\Parser\\Tokenizer' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/Tokenizer.php',
    'Masterminds\\HTML5\\Parser\\TreeBuildingRules' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/TreeBuildingRules.php',
    'Masterminds\\HTML5\\Parser\\UTF8Utils' => $vendorDir . '/masterminds/html5/src/HTML5/Parser/UTF8Utils.php',
    'Masterminds\\HTML5\\Serializer\\HTML5Entities' => $vendorDir . '/masterminds/html5/src/HTML5/Serializer/HTML5Entities.php',
    'Masterminds\\HTML5\\Serializer\\OutputRules' => $vendorDir . '/masterminds/html5/src/HTML5/Serializer/OutputRules.php',
    'Masterminds\\HTML5\\Serializer\\RulesInterface' => $vendorDir . '/masterminds/html5/src/HTML5/Serializer/RulesInterface.php',
    'Masterminds\\HTML5\\Serializer\\Traverser' => $vendorDir . '/masterminds/html5/src/HTML5/Serializer/Traverser.php',
    'Sabberworm\\CSS\\CSSList\\AtRuleBlockList' => $vendorDir . '/sabberworm/php-css-parser/src/CSSList/AtRuleBlockList.php',
    'Sabberworm\\CSS\\CSSList\\CSSBlockList' => $vendorDir . '/sabberworm/php-css-parser/src/CSSList/CSSBlockList.php',
    'Sabberworm\\CSS\\CSSList\\CSSList' => $vendorDir . '/sabberworm/php-css-parser/src/CSSList/CSSList.php',
    'Sabberworm\\CSS\\CSSList\\Document' => $vendorDir . '/sabberworm/php-css-parser/src/CSSList/Document.php',
    'Sabberworm\\CSS\\CSSList\\KeyFrame' => $vendorDir . '/sabberworm/php-css-parser/src/CSSList/KeyFrame.php',
    'Sabberworm\\CSS\\Comment\\Comment' => $vendorDir . '/sabberworm/php-css-parser/src/Comment/Comment.php',
    'Sabberworm\\CSS\\Comment\\Commentable' => $vendorDir . '/sabberworm/php-css-parser/src/Comment/Commentable.php',
    'Sabberworm\\CSS\\OutputFormat' => $vendorDir . '/sabberworm/php-css-parser/src/OutputFormat.php',
    'Sabberworm\\CSS\\OutputFormatter' => $vendorDir . '/sabberworm/php-css-parser/src/OutputFormatter.php',
    'Sabberworm\\CSS\\Parser' => $vendorDir . '/sabberworm/php-css-parser/src/Parser.php',
    'Sabberworm\\CSS\\Parsing\\OutputException' => $vendorDir . '/sabberworm/php-css-parser/src/Parsing/OutputException.php',
    'Sabberworm\\CSS\\Parsing\\ParserState' => $vendorDir . '/sabberworm/php-css-parser/src/Parsing/ParserState.php',
    'Sabberworm\\CSS\\Parsing\\SourceException' => $vendorDir . '/sabberworm/php-css-parser/src/Parsing/SourceException.php',
    'Sabberworm\\CSS\\Parsing\\UnexpectedEOFException' => $vendorDir . '/sabberworm/php-css-parser/src/Parsing/UnexpectedEOFException.php',
    'Sabberworm\\CSS\\Parsing\\UnexpectedTokenException' => $vendorDir . '/sabberworm/php-css-parser/src/Parsing/UnexpectedTokenException.php',
    'Sabberworm\\CSS\\Property\\AtRule' => $vendorDir . '/sabberworm/php-css-parser/src/Property/AtRule.php',
    'Sabberworm\\CSS\\Property\\CSSNamespace' => $vendorDir . '/sabberworm/php-css-parser/src/Property/CSSNamespace.php',
    'Sabberworm\\CSS\\Property\\Charset' => $vendorDir . '/sabberworm/php-css-parser/src/Property/Charset.php',
    'Sabberworm\\CSS\\Property\\Import' => $vendorDir . '/sabberworm/php-css-parser/src/Property/Import.php',
    'Sabberworm\\CSS\\Property\\KeyframeSelector' => $vendorDir . '/sabberworm/php-css-parser/src/Property/KeyframeSelector.php',
    'Sabberworm\\CSS\\Property\\Selector' => $vendorDir . '/sabberworm/php-css-parser/src/Property/Selector.php',
    'Sabberworm\\CSS\\Renderable' => $vendorDir . '/sabberworm/php-css-parser/src/Renderable.php',
    'Sabberworm\\CSS\\RuleSet\\AtRuleSet' => $vendorDir . '/sabberworm/php-css-parser/src/RuleSet/AtRuleSet.php',
    'Sabberworm\\CSS\\RuleSet\\DeclarationBlock' => $vendorDir . '/sabberworm/php-css-parser/src/RuleSet/DeclarationBlock.php',
    'Sabberworm\\CSS\\RuleSet\\RuleSet' => $vendorDir . '/sabberworm/php-css-parser/src/RuleSet/RuleSet.php',
    'Sabberworm\\CSS\\Rule\\Rule' => $vendorDir . '/sabberworm/php-css-parser/src/Rule/Rule.php',
    'Sabberworm\\CSS\\Settings' => $vendorDir . '/sabberworm/php-css-parser/src/Settings.php',
    'Sabberworm\\CSS\\Value\\CSSFunction' => $vendorDir . '/sabberworm/php-css-parser/src/Value/CSSFunction.php',
    'Sabberworm\\CSS\\Value\\CSSString' => $vendorDir . '/sabberworm/php-css-parser/src/Value/CSSString.php',
    'Sabberworm\\CSS\\Value\\CalcFunction' => $vendorDir . '/sabberworm/php-css-parser/src/Value/CalcFunction.php',
    'Sabberworm\\CSS\\Value\\CalcRuleValueList' => $vendorDir . '/sabberworm/php-css-parser/src/Value/CalcRuleValueList.php',
    'Sabberworm\\CSS\\Value\\Color' => $vendorDir . '/sabberworm/php-css-parser/src/Value/Color.php',
    'Sabberworm\\CSS\\Value\\LineName' => $vendorDir . '/sabberworm/php-css-parser/src/Value/LineName.php',
    'Sabberworm\\CSS\\Value\\PrimitiveValue' => $vendorDir . '/sabberworm/php-css-parser/src/Value/PrimitiveValue.php',
    'Sabberworm\\CSS\\Value\\RuleValueList' => $vendorDir . '/sabberworm/php-css-parser/src/Value/RuleValueList.php',
    'Sabberworm\\CSS\\Value\\Size' => $vendorDir . '/sabberworm/php-css-parser/src/Value/Size.php',
    'Sabberworm\\CSS\\Value\\URL' => $vendorDir . '/sabberworm/php-css-parser/src/Value/URL.php',
    'Sabberworm\\CSS\\Value\\Value' => $vendorDir . '/sabberworm/php-css-parser/src/Value/Value.php',
    'Sabberworm\\CSS\\Value\\ValueList' => $vendorDir . '/sabberworm/php-css-parser/src/Value/ValueList.php',
    'Svg\\CssLength' => $vendorDir . '/phenx/php-svg-lib/src/Svg/CssLength.php',
    'Svg\\DefaultStyle' => $vendorDir . '/phenx/php-svg-lib/src/Svg/DefaultStyle.php',
    'Svg\\Document' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Document.php',
    'Svg\\Gradient\\Stop' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Gradient/Stop.php',
    'Svg\\Style' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Style.php',
    'Svg\\Surface\\CPdf' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Surface/CPdf.php',
    'Svg\\Surface\\SurfaceCpdf' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Surface/SurfaceCpdf.php',
    'Svg\\Surface\\SurfaceInterface' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Surface/SurfaceInterface.php',
    'Svg\\Surface\\SurfacePDFLib' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Surface/SurfacePDFLib.php',
    'Svg\\Tag\\AbstractTag' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/AbstractTag.php',
    'Svg\\Tag\\Anchor' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Anchor.php',
    'Svg\\Tag\\Circle' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Circle.php',
    'Svg\\Tag\\ClipPath' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/ClipPath.php',
    'Svg\\Tag\\Ellipse' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Ellipse.php',
    'Svg\\Tag\\Group' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Group.php',
    'Svg\\Tag\\Image' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Image.php',
    'Svg\\Tag\\Line' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Line.php',
    'Svg\\Tag\\LinearGradient' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/LinearGradient.php',
    'Svg\\Tag\\Path' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Path.php',
    'Svg\\Tag\\Polygon' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Polygon.php',
    'Svg\\Tag\\Polyline' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Polyline.php',
    'Svg\\Tag\\RadialGradient' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/RadialGradient.php',
    'Svg\\Tag\\Rect' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Rect.php',
    'Svg\\Tag\\Shape' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Shape.php',
    'Svg\\Tag\\Stop' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Stop.php',
    'Svg\\Tag\\StyleTag' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/StyleTag.php',
    'Svg\\Tag\\Text' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/Text.php',
    'Svg\\Tag\\UseTag' => $vendorDir . '/phenx/php-svg-lib/src/Svg/Tag/UseTag.php',
);
