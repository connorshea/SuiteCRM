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
namespace SuiteCRM\Robo\Plugin\Commands;

use SuiteCRM\Utility\OperatingSystem;

class DiagnosticsCommands extends \Robo\Tasks
{
    use \SuiteCRM\Robo\Traits\RoboTrait;

    /**
     * Print diagnostic information about SuiteCRM.
     */
    public function diagnostics() {
        $this->io()->title('SuiteCRM Diagnostics');

        $this->io()->section('Versions');

        $versionsList = [];
        $listing = [];

        $versionsList["Operating System"] = $this->getOperatingSystem();
        $versionsList["SuiteCRM"] = $this->getSuiteCrmVersion();
        $versionsList["PHP"] = $this->getPhpVersion();
        $versionsList["Composer"] = $this->getComposerVersion();
        $versionsList["Apache"] = $this->getApacheVersion();
        $versionsList["Database"] = $this->getDatabaseVersion();

        foreach ($versionsList as $key => $value) {
            $listing[] = "{$key}: {$value}";
        }
        
        $this->io()->listing($listing);

        $this->say('Diagnostics Complete');
    }

    /**
     * Returns the current operating system.
     * @return String
     */
    protected function getOperatingSystem() {
        $os = new OperatingSystem();
        if ($os->isOsWindows()) {
            return 'Windows';
        } elseif ($os->isOsLinux()) {
            return 'Linux';
        } elseif ($os->isOsMacOSX()) {
            return 'macOS';
        } elseif ($os->isOsBSD()) {
            return 'BSD';
        } elseif ($os->isOsSolaris()) {
            return 'Solaris';
        } elseif ($os->isOsUnknown()) {
            return 'Unknown operating system';
        } else {
            return 'Unable to detect operating system';
        }
    }

    /**
     * Returns the current SuiteCRM version.
     * @return String
     */
    protected function getSuiteCrmVersion() {
        return 'Not implemented.';
    }

    /**
     * Returns the current PHP version.
     * TODO: Make sure this returns the PHP version of the CRM and not the PHP CLI version.
     * @return String
     */
    protected function getPhpVersion() {
        return phpversion();
    }

    /**
     * Returns the current Composer version.
     * @return String
     */
    protected function getComposerVersion() {
        return 'Not implemented.';
    }

    /**
     * Returns the current Apache version.
     * @return String
     */
    protected function getApacheVersion() {
        return 'Not implemented.';
    }

    /**
     * Returns the current database type and version.
     * @return String
     */
    protected function getDatabaseVersion() {
        return 'Not implemented.';
    }
}