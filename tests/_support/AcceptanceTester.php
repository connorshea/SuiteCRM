<?php

use Faker\Factory;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;
    /**
     * Define custom actions here
     */

    /**
     * @return \Faker\Generator
     */
    public function getFaker()
    {
        return Factory::create();
    }

    /**
     * @param string $username
     * @param string $password
     */
    public function login($username, $password)
    {
        $I = $this;

        // TODO: Make this work when the user is logged in as a different user.
        // Go to the root of the SuiteCRM instance.
        $I->amOnUrl($I->getInstanceURL());
        // User is not logged in.
        if ($I->canSeeElement('#loginform')) {
            $I->fillField('#user_name', $username);
            $I->fillField('#username_password', $password);
            $I->click('Log In');
            $I->waitForElementNotVisible('#loginform', 120);
        // User is logged in.
        } else {
            // Can see their own username in the header.
            $I->seeElement('#globalLinks .user-menu-button', ['title' => $username]);
        }
    }

    public function loginAsAdmin()
    {
        $I = $this;

        $I->login(
            $I->getAdminUser(),
            $I->getAdminPassword()
        );
    }

    /**
     * Clicks the logout link in the users menu
     */
    public function logout()
    {
        $I = $this;
        $I->clickUserMenuItem('#logout_link');
    }

    public function dontSeeMissingLabels()
    {
        $I = $this;
        $I->dontSee('LBL_');
    }

    public function dontSeeErrors()
    {
        $I = $this;
        $I->dontSee('Warning');
        $I->dontSee('Notice');
        $I->dontSee('Error');
        $I->dontSee('error');
        $I->dontSee('PHP');
    }
}
