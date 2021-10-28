<?php
namespace AlibabaOpen\entity\member;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class OfferGroupSetParams
 * @package AlibabaOpen\entity\member
 */
class OfferGroupSetParams extends BaseEntityParams{

	private $switchType;
	/**
	 * OfferGroupSetParams constructor.
	 * @param $switchType
	 */
	public function __construct($switchType){
		$this->switchType = $switchType;
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