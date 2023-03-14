<?php

declare(strict_types=1);

namespace Tests\Support\Page\Acceptance;

class Login
{
    public static $url = 'https://account.documentolog.com';

    private static $signinButton = '//button//span[contains(text(), "Войти")]';
    private static $emailField = 'input[name="email"][type="email"]';
    private static $passwordField = '//label[text()="Password"]/following-sibling::div//input';
    private static $loginButton = "(//button[text()='Log in'])[1]";
    private static $checkDoc = '//h6[contains(text(), "Документы")]';
    private static $checkName = 'Жасмина';
    protected $acceptanceTester;

    public function __construct(\Tests\Support\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
        // you can inject other page objects here as well
    }

    public function navigateLoginPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage("/");
        $I->waitForElementVisible(self::$signinButton);
        $I->click(self::$signinButton);
        $I->waitForElementVisible(self::$emailField, 15);
    }

    public function enterEmail($email)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$emailField, $email);
    }

    public function enterPassword($password)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$passwordField, $password);
    }

    public function clickLoginButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$loginButton);
        $I->waitForElementVisible(self::$checkDoc);
    }

    public function checkVisibility()
    {
        $I = $this->acceptanceTester;
        $I->see(self::$checkName);
    }

}
