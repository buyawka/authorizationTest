<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Tests\Support\Login;

class SigninCest
{
    public function signInSuccessfully(Login $loginPage)
    {
        $loginPage->navigateLoginPage();
        $loginPage->enterEmail('jasmina1306@mail.ru');
        $loginPage->enterPassword('Zhasya01');
        $loginPage->clickLoginButton();
        $loginPage->checkVisibility();
    }

    // tests
   // public function tryToTest(AcceptanceTester $I)
   // {
   // }
}
