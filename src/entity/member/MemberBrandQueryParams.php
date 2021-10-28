<?php
namespace AlibabaOpen\entity\member;

use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class MemberBrandQueryParams
 * @package AlibabaOpen\entity\member
 */
class MemberBrandQueryParams extends BaseEntityParams{

	private $leafCatIds;
	/**
	 * MemberBrandQueryParams constructor.
	 * @param $leafCatIds
	 */
	public function __construct($leafCatIds){
		$this->leafCatIds = $leafCatIds;
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