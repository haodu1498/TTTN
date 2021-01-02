<?php
namespace Page\Acceptance;

/**
 * Class UpdateProductPage
 * @package Page\Acceptance
 */
class UpdateProductPage extends AbstractPage
{
	/**
	 * @var string
	 */
	public static $urlProduct = "admin/product";

    /**
     * @var string
     */
    public static $buttonEdit = "//tr[1]//td[6]//a[1]//span[1]";

    /**
     * @var string
     */
    public static $checkbox = "//tr[1]//td[1]//input[1]";

    /**
     * @var string
     */
    public static $buttonDelete = "//button[@id='submit-del']";

    /**
     * @var string
     */
    public static $buttonAdd = "//a[@class='btn btn-info']";

    /**
     * @var string
     */
    public static $textProductEdit = "Chỉnh sửa thông tin sản phẩm";
    public static $textProductAdd = "Thêm sản phẩm";

	/**
 * @var string
 */
    public static $fieldName = "//div[@class='panel panel-info']//div[1]//div[1]//input[1]";

    /**
     * @var string
     */
    public static $fieldDescribe = "//textarea[@class='cke_source cke_reset cke_enable_context_menu cke_editable cke_editable_themed cke_contents_ltr']";

    /**
     * @var string
     */
    public static $fieldEditPrice = "//div[6]//div[1]//input[1]";
    public static $fieldPrice = "//div[5]//div[1]//input[1]";

    /**
     * @var string
     */
    public static $fieldEditDiscount = "//div[7]//div[1]//input[1]";
    public static $fieldDiscount = "//div[6]//div[1]//input[1]";

	/**
	 * @var string
	 */
	public static $buttonSave = "//button[@class='btn btn-primary']";

    /**
     * @var string
     */
    public static $buttonHtml = "//span[@id='cke_33_label']";

	/**
 * @var string
 */
    public static $textSuccess = "Thay đổi sản phẩm thành công";

    /**
     * @var string
     */
    public static $PDNameBlank = "Tên sản phẩm không được bỏ trống";

    /**
     * @var string
     */
    public static $PriceBlank = "Giá sản phẩm không được bỏ trống";

    /**
     * @var string
     */
    public static $textDelSuccess = "Xóa1sản phẩm thành công";

    /**
     * @var string
     */
    public static $textAddSuccess = "Thêm sản phẩm thành công";

    /**
     * @var string
     */
    public static $image = "//input[@id='image']";

    /**
     * @var string
     */
    public static $secondaryImage = "//input[@id='list_image']";

    /**
     * @var string
     */
    public static $catalog = "//select[@name='catalog_id']";

    /**
     * @var string
     */
    public static $catalogOption = "//option[contains(text(),'n Jeans')]";


}
