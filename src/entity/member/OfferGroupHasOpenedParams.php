<?php
namespace AlibabaOpen\entity\member;

use AlibabaOpen\entity\BaseEntityParams;

class OfferGroupHasOpenedParams extends BaseEntityParams{
	private $memberId;

	public function __construct($memberId){
		$this->memberId = $memberId;
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
