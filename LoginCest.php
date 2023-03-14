<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Tests\Support\Page\Acceptance\Login;

class LoginCest
{
    public function _before(Login $loginPage)
    {
        $loginPage->navigateLoginPage();
        $loginPage->enterEmail('jasmina1306@mail.ru');
        $loginPage->enterPassword('Zhasya01');
        $loginPage->clickLoginButton();
        $loginPage->checkVisibility();
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
