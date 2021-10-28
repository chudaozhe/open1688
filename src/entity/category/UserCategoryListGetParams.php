<?php
namespace AlibabaOpen\entity\category;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class UserCategoryListGetParams
 * @package AlibabaOpen\entity\category
 */
class UserCategoryListGetParams extends BaseEntityParams{

	/**
	 * UserCategoryListGetParams constructor.
	 */
	public function __construct(){
	}

	/**
	 * @inheritDoc
	 */
	public function build()
	{
		return array_filter(get_object_vars($this), function ($val) {
			return !is_null($val);
		});
	}

}