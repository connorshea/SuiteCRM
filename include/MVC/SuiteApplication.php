<?php

/**
 * SuiteCRM application
 */
class SuiteApplication
{
    /**
     * Builds a URL for use with the CRM, to make it easier to create
     * consistent URLs. One of the parameters must be provided or the
     * function with throw an exception. `null` values are ignored.
     *
     * @param string|null $module
     * @param string|null $action
     * @param string|null $return_module
     * @param string|null $return_action
     * @return string The string returned will be a SuiteCRM URL in the
     *    format 'index.php?module=Foo&action=bar', depending on what is
     *    provided to the function.
     */
    static function route($module = null, $action = null, $return_module = null, $return_action = null)
    {
        if (
            is_null($module)
            && is_null($action)
            && is_null($return_module)
            && is_null($return_action)
        ) {
            throw new Exception('Attempted to build an invalid SuiteCRM URL with no parameters.');
        }

        $urlParts = [];

        if (!is_null($module)) {
            $urlParts[] = "module={$module}";
        }

        if (!is_null($action)) {
            $urlParts[] = "action={$action}";
        }

        if (!is_null($return_module)) {
            $urlParts[] = "return_module={$return_module}";
        }

        if (!is_null($return_action)) {
            $urlParts[] = "return_action={$return_action}";
        }

        $joinedUrlParts = implode("&", $urlParts);

        return "index.php?{$joinedUrlParts}";
    }
}
