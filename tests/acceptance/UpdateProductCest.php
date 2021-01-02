<?php

use Step\Acceptance\AbstractSteps;
use Step\Acceptance\UpdateProductSteps;

/**
 * Class UpdateProductCest
 */
class UpdateProductCest
{
    /**
     * @var
     */
    protected $email;

    /**
     * @var
     */
    protected $emailHeadBlank;

    /**
     * @var
     */
    protected $emailTailBlank;

    /**
     * @var
     */
    protected $emailInvalid;

    /**
     * @var
     */
    protected $password;

    /**
     * @var
     */
    protected $productName;
    protected $productNameEdit;

    /**
     * @var
     */
    protected $price;
    protected $priceEdit;

    /**
     * @var string
     */
    protected $discount;
    protected $discountEdit;

    /**
     * @var string
     */
    protected $describe;

    /**
     * UpdateProductCest constructor.
     */
    public function __construct()
    {
        $this->email = "admin@gmail.com";
        $this->emailHeadBlank = "   admin@gmail.com";
        $this->emailTailBlank = "admin@gmail.com   ";
        $this->emailInvalid = "admin123@gmail.com";
        $this->password = "1234";
        $this->productName = "QUẦN KAKI NAM JOGGER";
        $this->productNameEdit = "QUẦN KAKI NAM JOGGER 2020";
        $this->price = "250,000";
        $this->priceEdit = "200,000";
        $this->discount = "100,000";
        $this->discountEdit = "50,000";
        $this->describe = "Product's descreibe";
    }

    /**
     * @param AbstractSteps $I
     * @throws Exception
     */
    public function login(AbstractSteps $I)
    {
        $I->comment("Login on admin page");
        $I->login($this ->email, $this->password);
    }

    /**
     * @param AbstractSteps $I
     * @throws Exception
     */
    public function loginWithHeadblank(AbstractSteps $I)
    {
        $I->comment("Login on admin page With email Headblank");
        $I->login($this ->emailHeadBlank, $this->password);
    }

    /**
     * @param AbstractSteps $I
     * @throws Exception
     */
    public function loginWithTailblank(AbstractSteps $I)
    {
        $I->comment("Login on admin page with email tail blank");
        $I->login($this ->emailTailBlank, $this->password);
    }

    /**
     * @param AbstractSteps $I
     * @throws Exception
     */
    public function badcaselogin(AbstractSteps $I)
    {
        $I->comment("Login on admin page invalid email");
        $I->badcaseLogin($this ->emailInvalid, $this->password);
    }

    /**
     * @param AbstractSteps $I
     * @throws Exception
     */
    public function loginBlank(AbstractSteps $I)
    {
        $I->comment("Login on admin page blank email password");
        $I->loginBlank();
    }

    /**
     * @param UpdateProductSteps $I
     * @throws Exception
     */
    public function updateProduct(UpdateProductSteps $I)
    {
        $I->comment("Login on admin page");
        $I->login($this ->email, $this->password);
        $I->comment("Update product");
        $I->updateProduct($this->productNameEdit, $this->describe, $this->priceEdit, $this->discountEdit);
    }

    /**
     * @param UpdateProductSteps $I
     * @throws Exception
     */
    public function updateProductWithbPDNamelank(UpdateProductSteps $I)
    {
        $I->comment("Login on admin page");
        $I->login($this ->email, $this->password);
        $I->comment("Update product with pruduct name blank");
        $I->updateProductWithbPDNamelank($this->productNameEdit, $this->describe, $this->priceEdit, $this->discountEdit);
    }

    /**
     * @param UpdateProductSteps $I
     * @throws Exception
     */
    public function updateProductWithPriceBlank(UpdateProductSteps $I)
    {
        $I->comment("Login on admin page");
        $I->login($this ->email, $this->password);
        $I->comment("Update product with price blank");
        $I->updateProductWithPriceBlank($this->productNameEdit, $this->describe, $this->priceEdit, $this->discountEdit);
    }

    /**
     * @param UpdateProductSteps $I
     * @throws Exception
     */
    public function updateProductWithPDandPriceBlank(UpdateProductSteps $I)
    {
        $I->comment("Login on admin page");
        $I->login($this ->email, $this->password);
        $I->comment("Update product with product name and price blank");
        $I->updateProductWithPDandPriceBlank($this->productNameEdit, $this->describe, $this->priceEdit, $this->discountEdit);
    }

    /**
     * @param UpdateProductSteps $I
     * @throws Exception
     */
    public function deleteProduct(UpdateProductSteps $I)
    {
        $I->comment("Login on admin page");
        $I->login($this ->email, $this->password);
        $I->comment("Delete product");
        $I->deleteProduct();
    }
}
