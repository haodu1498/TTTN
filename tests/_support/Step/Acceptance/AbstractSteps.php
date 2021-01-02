<?php

namespace Step\Acceptance;

use Page\Acceptance\AbstractPage;


class AbstractSteps extends \AcceptanceTester
{
	/**
	 * @param $email
	 * @param $passWord
	 * @throws \Exception
	 */
	public function login($email, $passWord)
	{
		$I = $this;
		$I->amOnPage(AbstractPage::$urlLogin);
		$I->waitForElementVisible(AbstractPage::$fieldEmail, '30');
		$I->fillField(AbstractPage::$fieldEmail, $email);
		$I->waitForElementVisible(AbstractPage::$fieldPassWord, '30');
		$I->fillField(AbstractPage::$fieldPassWord, $passWord);
		$I->waitForElementVisible(AbstractPage::$btnLogin, '30');
        $I->wait(3);
        $I->click(AbstractPage::$btnLogin);
		$I->waitForText(AbstractPage::$textAdminPage, '10');
		$I->see(AbstractPage::$textAdminPage);
        $I->wait(3);
	}
    /**
     * @param $email
     * @param $passWord
     * @throws \Exception
     */
    public function badcaseLogin($email, $passWord)
    {
        $I = $this;
        $I->amOnPage(AbstractPage::$urlLogin);
        $I->waitForElementVisible(AbstractPage::$fieldEmail, '30');
        $I->fillField(AbstractPage::$fieldEmail, $email);
        $I->waitForElementVisible(AbstractPage::$fieldPassWord, '30');
        $I->fillField(AbstractPage::$fieldPassWord, $passWord);
        $I->waitForElementVisible(AbstractPage::$btnLogin, '30');
        $I->click(AbstractPage::$btnLogin);
        $I->wait(3);
        $I->see(AbstractPage::$textLoginFail);
        $I->wait(3);
    }

    /**
     * @throws \Exception
     */
    public function loginBlank()
    {
        $I = $this;
        $I->amOnPage(AbstractPage::$urlLogin);
        $I->waitForElementVisible(AbstractPage::$btnLogin, '30');
        $I->wait(3);
        $I->click(AbstractPage::$btnLogin);
        $I->see(AbstractPage::$textEmailBlank);
        $I->see(AbstractPage::$textPasswordBlank);
        $I->wait(3);
    }
}