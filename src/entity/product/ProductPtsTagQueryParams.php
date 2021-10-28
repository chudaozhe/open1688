<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

class ProductPtsTagQueryParams extends BaseEntityParams{
	private $offerId;
	private $subCategoryId;

	public function __construct($subCategoryId, $offerId=''){
		$this->subCategoryId=$subCategoryId;
		if (!empty($offerId)) $this->offerId=$offerId;
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