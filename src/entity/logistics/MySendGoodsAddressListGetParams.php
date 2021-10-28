<?php
namespace AlibabaOpen\entity\logistics;
use AlibabaOpen\entity\BaseEntityParams;

class MySendGoodsAddressListGetParams extends BaseEntityParams{

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
