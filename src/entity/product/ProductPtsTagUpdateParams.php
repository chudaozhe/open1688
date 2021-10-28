<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

class ProductPtsTagUpdateParams extends BaseEntityParams{
	private $offerId;
	private $subCategoryId;
	private $guardService;
	private $groupService;

	public function __construct($subCategoryId, $offerId, $guardService=[], $groupService=[]){
		$this->subCategoryId=$subCategoryId;
		$this->offerId=$offerId;
		$this->guardService=$guardService;
		$this->groupService=$groupService;
	}
	/**
	 * @inheritDoc
	 */
	public function build(){
		return array_filter(get_object_vars($this), function($val){
			return !is_null($val);
		});
	}
}