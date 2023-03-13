<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Codeception\Util\Locator;

class SigninCest
{
    public function signInSuccessfully(AcceptanceTester $I)
    {
        // //button//span[contains(text(), "keyboard_arrow_down")]
        // //p[contains(text(), "english")]
        // //button//span[contains(text(), "Log in")]
//        $I->waitForElementVisible('//button//span[contains(text(), "keyboard_arrow_down")]');
//        $I->click('//button//span[contains(text(), "keyboard_arrow_down")]');
//        $I->click('//p[contains(text(), "english")]');
        $I->waitForElementVisible('//button//span[contains(text(), "Войти")]');
        $I->click('//button//span[contains(text(), "Войти")]');
        $I->waitForElementVisible('//input[@id=":r0:"]', 15);
        $I->fillField('//input[@id=":r0:"]', 'jasmina1306@mail.ru');
        $I->fillField('//input[@id=":r1:"]', 'Zhasya01');
        $I->click('//button[@id=":r2:"]');
        $I->waitForElementVisible('//h6[contains(text(), "Документы")]');
        $I->see('Жасмина');


    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
