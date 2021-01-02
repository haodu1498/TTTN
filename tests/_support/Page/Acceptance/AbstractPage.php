<?php

namespace Page\Acceptance;


class AbstractPage
{
	/**
	 * @var string
	 */
	public static $urlLogin = "admin/login";

	/**
	 * @var string
	 */
	public static $fieldEmail = "//input[@placeholder='E-mail']";

	/**
	 * @var string
	 */
	public static $fieldPassWord = '//input[@placeholder=\'Mật khẩu\']';

	/**
	 * @var string
	 */
	public static $btnLogin = "//button[@class='btn btn-primary']";

	/**
 * @var string
 */
    public static $textAdminPage = 'Trang quản trị';

    /**
     * @var string
     */
    public static $textLoginFail = 'Đăng nhập thất bại';

    /**
     * @var string
     */
    public static $textEmailBlank = 'Đăng nhập thất bại';

    /**
     * @var string
     */
    public static $textPasswordBlank = 'đăng nhập không được bỏ trống.';

	/**
	 * @var string
	 */
	public static $btnSearch = "//button[@class='btn hasTooltip']";

	/**
	 * @var string
	 */
	public static $filedSearch = "//input[@id='filter_search']";

    /**
     * @var string
     */
    public static $checkboxAll = "//input[@name='checkall-toggle']";

    /**
     * @var string
     */
    public static $btnUnpublish = ".button-unpublish";

    /**
     * @var string
     */
    public static $btnTrash = '//button[@class=\'btn btn-small button-trash\']';

    /**
     * @var string
     */
    public static $buttonEmptyTrash = "#toolbar-delete";

    /**
     * @var string
     */
    public static $filterTrashed = "//li[contains(text(),'Trashed')]";

    /**
     * @var string
     */
    public static $buttonSearchTools = "//button[@class='btn hasTooltip js-stools-btn-filter']";

    /**
     * @var string
     */
    public static $buttonClear = "//button[@class='btn hasTooltip js-stools-btn-clear']";

    /**
     * @var string
     */
    public static $msgUnpublish = "1 menu item unpublished.";

    /**
     * @var string
     */
    public static $btnPublish = ".button-publish";

    /**
     * @var string
     */
    public static $msgPublish = "1 menu item published.";

    /**
     * @var string
     */
    public static $btnCheckin = ".button-checkin";

    /**
     * @var string
     */
    public static $msgCheckin = "1 menu item checked in.";

    /**
     * @var string
     */
    public static $btnHome = ".button-default";

    /**
     * @var string
     */
    public static $msgHome = "1 menu item set to home.";

    /**
     * @var string
     */
    public static $btnRebuild = ".button-refresh";

    /**
     * @var string
     */
    public static $msgRebuild = "Menu items list rebuilt.";

    /**
     * @var string
     */
    public static $btnBatch = "#toolbar-batch";

    /**
     * @var string
     */
    public static $msgBatch = "Batch process completed.";

    /**
     * @var string
     */
    public static $urlMenus = "administrator/index.php?option=com_menus&view=menus";

    /**
     * @var string
     */
    public static $btnNew = "//button[@class='btn btn-small button-new btn-success']";

    /**
     * @var string
     */
    public static $textNewMenu = "Menus: Add";

    /**
     * @var string
     */
    public static $fieldTitle = "#jform_title";

    /**
     * @var string
     */
    public static $fieldMenuType = "#jform_menutype";

    /**
     * @var string
     */
    public static $btnSave = ".button-save";

    /**
     * @var string
     */
    public static $messageSaveSuccess = "Menu saved";

    /**
     * @var string
     */
    public static $btnAddModule = "//button[@class='btn btn-small btn-primary']";

    /**
     * @var string
     */
    public static $positionList = "//a[@class='chzn-single chzn-default']";

    /**
     * @var string
     */
    public static $positionSelect = "//li[39]";

    /**
     * @var string
     */
    public static $btnSaveModule = "//div[@id='moduleAddModal']//button[@class='btn btn-primary'][contains(text(),'Save & Close')]";

    /**
     * @var string
     */
    public static $btnDelete = "#toolbar-delete";

    /**
     * @var string
     */
    public static $messageDelete = "Menu type deleted.";

    /**
     * @var string
     */
    public static $titleMenus = "Menus";
}