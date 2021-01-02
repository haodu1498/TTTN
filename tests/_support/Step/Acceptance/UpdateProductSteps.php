<?php

namespace Step\Acceptance;

use Page\Acceptance\UpdateProductPage;

/**
 * Class UpdateProductSteps
 * @package Step\Acceptance
 */
class UpdateProductSteps extends AbstractSteps
{
    /**
     * @param $productName
     * @param $price
     * @param $discount
     * @throws \Exception
     */
	public function updateProduct($productName, $describe, $price, $discount)
	{
		$I = $this;
		$I->amOnPage(UpdateProductPage::$urlProduct);
        $I->waitForElementVisible(UpdateProductPage::$buttonEdit,30);
        $I->click(UpdateProductPage::$buttonEdit);
		$I->waitForText(UpdateProductPage::$textProductEdit, 10);
		$I->waitForElementVisible(UpdateProductPage::$fieldName,30);
		$I->fillField(UpdateProductPage::$fieldName, $productName);
        $I->attachFile(UpdateProductPage::$image, 'img2.jpg');
        $I->attachFile(UpdateProductPage::$secondaryImage, 'img2.jpg');
        $I->wait(2);
        $I->waitForElementVisible(UpdateProductPage::$buttonHtml,30);
        $I->click(UpdateProductPage::$buttonHtml);
        $I->waitForElementVisible(UpdateProductPage::$fieldDescribe,30);
        $I->fillField(UpdateProductPage::$fieldDescribe, $describe);
        $I->waitForElementVisible(UpdateProductPage::$catalogOption,30);
        $I->click(UpdateProductPage::$catalogOption);
        $I->waitForElementVisible(UpdateProductPage::$catalog,30);
        $I->click(UpdateProductPage::$catalog);
        $I->waitForElementVisible(UpdateProductPage::$fieldEditPrice,30);
        $I->fillField(UpdateProductPage::$fieldEditPrice, $price);
        $I->waitForElementVisible(UpdateProductPage::$fieldEditDiscount,30);
        $I->fillField(UpdateProductPage::$fieldEditDiscount, $discount);
        $I->wait(2);
        $I->waitForElementVisible(UpdateProductPage::$buttonSave,30);
		$I->click(UpdateProductPage::$buttonSave);
		$I->waitForText(UpdateProductPage::$textSuccess, 10);
		$I->wait(2);
		$I->makeScreenshot();
	}

    /**
     * @param $productName
     * @param $price
     * @param $discount
     * @throws \Exception
     */
    public function updateProductWithbPDNamelank($productName, $describe, $price, $discount)
    {
        $I = $this;
        $I->amOnPage(UpdateProductPage::$urlProduct);
        $I->waitForElementVisible(UpdateProductPage::$buttonEdit,30);
        $I->click(UpdateProductPage::$buttonEdit);
        $I->waitForText(UpdateProductPage::$textProductEdit, 10);
        $I->waitForElementVisible(UpdateProductPage::$fieldName,30);
        $I->clearField(UpdateProductPage::$fieldName);
        $I->attachFile(UpdateProductPage::$image, 'img2.jpg');
        $I->attachFile(UpdateProductPage::$secondaryImage, 'img2.jpg');
        $I->wait(2);
        $I->waitForElementVisible(UpdateProductPage::$buttonHtml,30);
        $I->click(UpdateProductPage::$buttonHtml);
        $I->waitForElementVisible(UpdateProductPage::$fieldDescribe,30);
        $I->fillField(UpdateProductPage::$fieldDescribe, $describe);
        $I->waitForElementVisible(UpdateProductPage::$catalogOption,30);
        $I->click(UpdateProductPage::$catalogOption);
        $I->waitForElementVisible(UpdateProductPage::$catalog,30);
        $I->click(UpdateProductPage::$catalog);
        $I->waitForElementVisible(UpdateProductPage::$fieldEditPrice,30);
        $I->fillField(UpdateProductPage::$fieldEditPrice, $price);
        $I->waitForElementVisible(UpdateProductPage::$fieldEditDiscount,30);
        $I->fillField(UpdateProductPage::$fieldEditDiscount, $discount);
        $I->wait(2);
        $I->waitForElementVisible(UpdateProductPage::$buttonSave,30);
        $I->click(UpdateProductPage::$buttonSave);
        $I->waitForText(UpdateProductPage::$PDNameBlank, 10);
        $I->wait(2);
        $I->makeScreenshot();
    }

    /**
     * @param $productName
     * @param $price
     * @param $discount
     * @throws \Exception
     */
    public function updateProductWithPriceBlank($productName, $describe, $price, $discount)
    {
        $I = $this;
        $I->amOnPage(UpdateProductPage::$urlProduct);
        $I->waitForElementVisible(UpdateProductPage::$buttonEdit,30);
        $I->click(UpdateProductPage::$buttonEdit);
        $I->waitForText(UpdateProductPage::$textProductEdit, 10);
        $I->waitForElementVisible(UpdateProductPage::$fieldName,30);
        $I->fillField(UpdateProductPage::$fieldName, $productName);
        $I->attachFile(UpdateProductPage::$image, 'img2.jpg');
        $I->attachFile(UpdateProductPage::$secondaryImage, 'img2.jpg');
        $I->wait(2);
        $I->waitForElementVisible(UpdateProductPage::$buttonHtml,30);
        $I->click(UpdateProductPage::$buttonHtml);
        $I->waitForElementVisible(UpdateProductPage::$fieldDescribe,30);
        $I->fillField(UpdateProductPage::$fieldDescribe, $describe);
        $I->waitForElementVisible(UpdateProductPage::$catalogOption,30);
        $I->click(UpdateProductPage::$catalogOption);
        $I->waitForElementVisible(UpdateProductPage::$catalog,30);
        $I->click(UpdateProductPage::$catalog);
        $I->waitForElementVisible(UpdateProductPage::$fieldEditPrice,30);
        $I->clearField(UpdateProductPage::$fieldEditPrice);
        $I->waitForElementVisible(UpdateProductPage::$fieldEditDiscount,30);
        $I->fillField(UpdateProductPage::$fieldEditDiscount, $discount);
        $I->wait(2);
        $I->waitForElementVisible(UpdateProductPage::$buttonSave,30);
        $I->click(UpdateProductPage::$buttonSave);
        $I->waitForText(UpdateProductPage::$PriceBlank, 10);
        $I->wait(2);
        $I->makeScreenshot();
    }

    /**
     * @param $productName
     * @param $price
     * @param $discount
     * @throws \Exception
     */
    public function updateProductWithPDandPriceBlank($productName, $describe, $price, $discount)
    {
        $I = $this;
        $I->amOnPage(UpdateProductPage::$urlProduct);
        $I->waitForElementVisible(UpdateProductPage::$buttonEdit,30);
        $I->click(UpdateProductPage::$buttonEdit);
        $I->waitForText(UpdateProductPage::$textProductEdit, 10);
        $I->waitForElementVisible(UpdateProductPage::$fieldName,30);
        $I->clearField(UpdateProductPage::$fieldName);
        $I->attachFile(UpdateProductPage::$image, 'img2.jpg');
        $I->attachFile(UpdateProductPage::$secondaryImage, 'img2.jpg');
        $I->wait(2);
        $I->waitForElementVisible(UpdateProductPage::$buttonHtml,30);
        $I->click(UpdateProductPage::$buttonHtml);
        $I->waitForElementVisible(UpdateProductPage::$fieldDescribe,30);
        $I->fillField(UpdateProductPage::$fieldDescribe, $describe);
        $I->waitForElementVisible(UpdateProductPage::$catalogOption,30);
        $I->click(UpdateProductPage::$catalogOption);
        $I->waitForElementVisible(UpdateProductPage::$catalog,30);
        $I->click(UpdateProductPage::$catalog);
        $I->waitForElementVisible(UpdateProductPage::$fieldEditPrice,30);
        $I->clearField(UpdateProductPage::$fieldEditPrice);
        $I->waitForElementVisible(UpdateProductPage::$fieldEditDiscount,30);
        $I->fillField(UpdateProductPage::$fieldEditDiscount, $discount);
        $I->wait(2);
        $I->waitForElementVisible(UpdateProductPage::$buttonSave,30);
        $I->click(UpdateProductPage::$buttonSave);
        $I->waitForText(UpdateProductPage::$PDNameBlank, 10);
        $I->waitForText(UpdateProductPage::$PriceBlank, 10);
        $I->wait(2);
        $I->makeScreenshot();
    }

    /**
     * @throws \Exception
     */
    public function deleteProduct()
    {
        $I = $this;
        $I->amOnPage(UpdateProductPage::$urlProduct);
        $I->waitForElementVisible(UpdateProductPage::$checkbox,30);
        $I->click(UpdateProductPage::$checkbox);
        $I->waitForElementVisible(UpdateProductPage::$buttonDelete,30);
        $I->click(UpdateProductPage::$buttonDelete);
        $I->acceptPopup();
        $I->waitForText(UpdateProductPage::$textDelSuccess, 10);
        $I->wait(2);
        $I->makeScreenshot();
    }
}