<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Advanced',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 currency code',
    'DEFAULT_CURRENCY_NAME' => 'Currency name',
    'DEFAULT_CURRENCY_SYMBOL' => 'Currency symbol',
    'DEFAULT_DATE_FORMAT' => 'Default date format',
    'DEFAULT_DECIMAL_SEP' => 'Decimal symbol',
    'DEFAULT_LANGUAGE' => 'Default language',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Default time format',

    'DISPLAY_RESPONSE_TIME' => 'Display server response times',

    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => 'Allow users to hide tabs',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'View Log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'Mail Merge',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh Interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'This is the minimum value one can choose to have dashlets auto-refresh. Setting to \'Never\' disables auto-refreshing of dashlets entirely.',
    'LBL_MODULE_FAVICON' => 'Display module icon as favicon',
    'LBL_MODULE_FAVICON_HELP' => 'If you are in a module with an icon, use the module\'s icon as the favicon, instead of the theme\'s favicon, in the browser tab.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Configurator',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Configure proxy server address and authentication settings',
    'LBL_PROXY_ON' => 'Use proxy server?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_SKYPEOUT_ON_DESC' => 'Allows users to click on phone numbers to call using the phone dialer on your mobile device, or a telephony app on your computer (SkypeOut&reg;, etc.). The numbers must be formatted properly to make use of this feature. That is, it must be "+"  "The Country Code" "The Number", like +1 (555) 555-1234.',
    'LBL_SKYPEOUT_ON' => 'Enable click-to-call for phone numbers',
    'LBL_SKYPEOUT_TITLE' => 'Click-To-Call',
    'LBL_USE_REAL_NAMES' => 'Show Full Names',
    'LBL_USE_REAL_NAMES_DESC' => 'Display users\' full names instead of their User Names in assignment fields.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disable convert lead action for converted leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'If a lead has already been converted, enabling this option will remove the convert lead action.',
    'LBL_ENABLE_ACTION_MENU' => 'Display actions within menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Listview items per page',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Subpanel items per page',
    'LOG_MEMORY_USAGE' => 'Log memory usage',
    'LOG_SLOW_QUERIES' => 'Log slow queries',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the left-hand corner of the footer of the SuiteCRM application.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Slow query time threshold (msec)',
    'STACK_TRACE_ERRORS' => 'Display stack trace of errors',
    'UPLOAD_MAX_SIZE' => 'Maximum upload size',
    'VERIFY_CLIENT_IP' => 'Validate user IP address',
    'LOCK_HOMEPAGE' => 'Prevent user customizable Homepage layout',
    'LOCK_SUBPANELS' => 'Prevent user customizable subpanel layout',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'System Name:',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'LDAP Authentication Support',
    'LBL_LDAP_ENABLE' => 'Enable LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'User Name:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Auto Create Users:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Group DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'User Filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Group Membership:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Example: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Developer Mode',

    'SHOW_DOWNLOADS_TAB' => 'Display Downloads Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'For SOAP authentication when using LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'The php_mcrypt extension must be enabled in your php.ini file.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Mark Point',
    'LBL_NEXT_' => 'Next>>',
    'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
    'LBL_SEARCH' => 'Search:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignore Self:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marking Where To Start Logging From',
    'LBL_DISPLAYING_LOG' => 'Displaying Log',
    'LBL_YOUR_PROCESS_ID' => 'Your process ID',
    'LBL_YOUR_IP_ADDRESS' => 'Your IP Address is',
    'LBL_IT_WILL_BE_IGNORED' => ' It will be ignored ',
    'LBL_LOG_NOT_CHANGED' => 'Log has not changed',
    'LBL_ALERT_JPG_IMAGE' => 'The file format of the image must be JPEG. Upload a new file with the file extension .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'The file format of the image must be JPEG or PNG. Upload a new file with the file extension .jpg or .png.',
    'LBL_ALERT_SIZE_RATIO' => 'The aspect ratio of the image should be between 1:1 and 10:1. The image will be resized.',
    'ERR_ALERT_FILE_UPLOAD' => 'Error during the upload of the image.',
    'LBL_LOGGER' => 'Logger Settings',
    'LBL_LOGGER_FILENAME' => 'Log File Name',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extension',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximum log size',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Log Level',
    'LBL_LEAD_CONV_OPTION' => 'Lead Conversion Options',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Enable or disable the use of the AJAX UI for specific modules.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximum number of logs (before rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Append after filename',
    'LBL_SENTRY' => 'Sentry Settings',
    'LBL_SENTRY_ENABLED' => 'Enable Sentry',
    'LBL_SENTRY_DSN' => 'Sentry DSN',
    'LBL_VCAL_PERIOD' => 'vCal Updates Time Period:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maximum Number of Rows:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specify how many rows are allowed within import files.<br>If the number of rows in an import file exceeds this number, the user will be alerted.<br>If no number is entered, an unlimited number of rows are allowed.',
    'vCAL_HELP' => 'Use this setting to determine the number of months in advance of the current date that Free/Busy information for calls and meetings is published.<BR>To turn Free/Busy publishing off, enter "0". The minimum is 1 month; the maximum is 12 months.',
    'LBL_PDFMODULE_NAME' => 'PDF Settings',
    'SUITEPDF_BASIC_SETTINGS' => 'Document Properties',
    'SUITEPDF_ADVANCED_SETTINGS' => 'Advanced Settings',
    'SUITEPDF_LOGO_SETTINGS' => 'Images',

    'PDF_AUTHOR' => 'Author',
    'PDF_AUTHOR_INFO' => 'The Author appears in the document properties.',

    'PDF_HEADER_LOGO' => 'For Quotes PDF Documents',
    'PDF_HEADER_LOGO_INFO' => 'This image appears in the default Header in Quotes PDF Documents.',

    'PDF_NEW_HEADER_LOGO' => 'Select New Image for Quotes',
    'PDF_NEW_HEADER_LOGO_INFO' => 'The file format can be either .jpg or .png. (Only .jpg for EZPDF)<BR>The recommended size is 867x60 px.',

    'PDF_SMALL_HEADER_LOGO' => 'For Reports PDF Documents',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'This image appears in the default Header in Reports PDF Documents.<br> This image also appears in the top left-hand corner of the SuiteCRM application.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Select New Image for Reports',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'The file format can be either .jpg or .png. (Only .jpg for EZPDF)<BR>The recommended size is 212x40 px.',

    'PDF_FILENAME' => 'Default Filename',
    'PDF_FILENAME_INFO' => 'Default filename for the generated PDF files',

    'PDF_TITLE' => 'Title',
    'PDF_TITLE_INFO' => 'The Title appears in the document properties.',

    'PDF_SUBJECT' => 'Subject',
    'PDF_SUBJECT_INFO' => 'The Subject appears in the document properties.',

    'PDF_KEYWORDS' => 'Keyword(s)',
    'PDF_KEYWORDS_INFO' => 'Associate Keywords with the document, generally in the form "keyword1 keyword2..."',

    'PDF_COMPRESSION' => 'Compression',
    'PDF_COMPRESSION_INFO' => 'Activates or deactivates page compression. <br>When activated, the internal representation of each page is compressed, which leads to a compression ratio of about 2 for the resulting document.',

    'PDF_JPEG_QUALITY' => 'JPEG Quality (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Set the default JPEG compression quality (1-100)',

    'PDF_PDF_VERSION' => 'PDF Version',
    'PDF_PDF_VERSION_INFO' => 'Set the PDF version (check PDF reference for valid values).',

    'PDF_PROTECTION' => 'Document Protection',
    'PDF_PROTECTION_INFO' => 'Set document protection<br>- copy: copy text and images to the clipboard<br>- print: print the document<br>- modify: modify it (except for annotations and forms)<br>- annot-forms: add annotations and forms<br>Note: the protection against modification is for people who have the full Acrobat product.',

    'PDF_USER_PASSWORD' => 'User Password',
    'PDF_USER_PASSWORD_INFO' => 'If you don\\\'t set any password, the document will open as usual. <br>If you set a user password, the PDF viewer will ask for it before displaying the document. <br>The master password, if different from the user one, can be used to get full access.',

    'PDF_OWNER_PASSWORD' => 'Owner Password',
    'PDF_OWNER_PASSWORD_INFO' => 'If you don\\\'t set any password, the document will open as usual. <br>If you set a user password, the PDF viewer will ask for it before displaying the document. <br>The master password, if different from the user one, can be used to get full access.',

    'PDF_ACL_ACCESS' => 'Access Control',
    'PDF_ACL_ACCESS_INFO' => 'Default Access Control for the PDF generation.',

    'K_CELL_HEIGHT_RATIO' => 'Cell Height Ratio',
    'K_CELL_HEIGHT_RATIO_INFO' => 'If the height of a cell is smaller than (Font Height x Cell Height Ratio), then (Font Height x Cell Height Ratio) is used as the cell height.<br>(Font Height x Cell Height Ratio) is also used as the height of the cell when no height is define.',

    'K_SMALL_RATIO' => 'Small Font Factor',
    'K_SMALL_RATIO_INFO' => 'Reduction factor for small font.',

    'PDF_IMAGE_SCALE_RATIO' => 'Image scale ratio',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Ratio used to scale the images',

    'PDF_UNIT' => 'Unit',
    'PDF_UNIT_INFO' => 'document unit of measure',
    'PDF_GD_WARNING' => 'You do not have the GD library installed for PHP. Without the GD library installed, only JPEG logos can be displayed in PDF documents.',
    'ERR_EZPDF_DISABLE' => 'Warning : The EZPDF class is disabled from the config table and it set as the PDF class. Please "Save" this form to set TCPDF as the PDF Class and return in a stable state.',
    'LBL_IMG_RESIZED' => "(resized for display)",


    'LBL_FONTMANAGER_BUTTON' => 'PDF Font Manager',
    'LBL_FONTMANAGER_TITLE' => 'PDF Font Manager',
    'LBL_FONT_BOLD' => 'Bold',
    'LBL_FONT_ITALIC' => 'Italic',
    'LBL_FONT_BOLDITALIC' => 'Bold/Italic',
    'LBL_FONT_REGULAR' => 'Regular',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Core',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Name',
    'LBL_FONT_LIST_FILENAME' => 'Filename',
    'LBL_FONT_LIST_TYPE' => 'Type',
    'LBL_FONT_LIST_STYLE' => 'Style',
    'LBL_FONT_LIST_STYLE_INFO' => 'Style of the font',
    'LBL_FONT_LIST_ENC' => 'Encoding',
    'LBL_FONT_LIST_EMBEDDED' => 'Embedded',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Check to embed the font into the PDF file',
    'LBL_FONT_LIST_CIDINFO' => 'CID Information',
    'LBL_FONT_LIST_CIDINFO_INFO' => 'Examples :
<ul><li>.
Chinese Traditional :<br>.
<pre>\$enc=\'UniCNS-UTF16-H\';<br>.
\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'CNS1\',\'Supplement\'=>0);<br>.
include(\'include/tcpdf/fonts/uni2cid_ac15.php\');</pre>.
</li><li>.
Chinese Simplified :<br>.
<pre>\$enc=\'UniGB-UTF16-H\';<br>.
\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'GB1\',\'Supplement\'=>2);<br>.
include(\'include/tcpdf/fonts/uni2cid_ag15.php\');</pre>.
</li><li>.
Korean :<br>.
<pre>\$enc=\'UniKS-UTF16-H\';<br>.
\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Korea1\',\'Supplement\'=>0);<br>.
include(\'include/tcpdf/fonts/uni2cid_ak12.php\');</pre>.
</li><li>.
Japanese :<br>.
<pre>\$enc=\'UniJIS-UTF16-H\';<br>.
\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Japan1\',\'Supplement\'=>5);<br>.
include(\'include/tcpdf/fonts/uni2cid_aj16.php\');</pre>.
</li></ul>.
More help : www.tcpdf.org',
    'LBL_FONT_LIST_FILESIZE' => 'Font Size (KB)',
    'LBL_ADD_FONT' => 'Add a font',
    'LBL_BACK' => 'Back',
    'LBL_REMOVE' => 'Remove',
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Are you sure that you want to delete this font?',

    'LBL_ADDFONT_TITLE' => 'Add a PDF Font',
    'LBL_PDF_ENCODING_TABLE' => 'Encoding Table',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Name of the encoding table.<br>This option is ignored for TrueType Unicode, OpenType Unicode and symbolic fonts.<br>The encoding defines the association between a code (from 0 to 255) and a character contained in the font.<br>The first 128 are fixed and correspond to ASCII.',
    'LBL_PDF_FONT_FILE' => 'Font File',
    'LBL_PDF_FONT_FILE_INFO' => '.ttf or .otf or .pfb file',
    'LBL_PDF_METRIC_FILE' => 'Metric File',
    'LBL_PDF_METRIC_FILE_INFO' => '.afm or .ufm file',
    'LBL_ADD_FONT_BUTTON' => 'Add',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'This file do not have a good file extension.',

    'ERR_MISSING_CIDINFO' => 'The field CID Information cannot be empty.',
    'LBL_ADDFONTRESULT_TITLE' => 'Result of the add font process',
    'LBL_STATUS_FONT_SUCCESS' => 'SUCCESS : The font has been added to SuiteCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ERROR : The font has not been added. Look at the log below.',

// Font manager
    'ERR_PDF_NO_UPLOAD' => 'Error during the upload of the font or metric file.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Your Scenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Admin Wizard',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Welcome to SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Next >',
    'LBL_WIZARD_BACK_BUTTON' => '< Back',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continue',
    'LBL_WIZARD_FINISH_TITLE' => 'Basic system configuration is complete',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Loading...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',

);
