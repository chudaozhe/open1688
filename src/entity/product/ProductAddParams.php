<?php
namespace AlibabaOpen\entity\product;
use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductAddParams
 * @package AlibabaOpen\entity\product
 */
class ProductAddParams extends BaseEntityParams{

	private $productType;
	private $categoryID;
	private $attributes;
	private $groupID;
	private $subject;
	private $description;
	private $language;
	private $periodOfValidity;
	private $bizType;
	private $pictureAuth;
	private $image;
	private $skuInfos;
	private $saleInfo;
	private $shippingInfo;
	private $internationalTradeInfo;
	private $webSite;
	private $extendInfos;

	public function __construct($params){
		if($params){
			foreach($params as $field=>$param){
				$this->$field = $param;
			}
		}
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