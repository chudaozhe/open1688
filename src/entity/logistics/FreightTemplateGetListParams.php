<?php
namespace AlibabaOpen\entity\logistics;
use AlibabaOpen\entity\BaseEntityParams;

class FreightTemplateGetListParams extends BaseEntityParams{
	private $webSite;

	public function __construct($webSite='1688'){
		$this->webSite=$webSite;
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
