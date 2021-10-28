<?php
namespace AlibabaOpen\entity\product;
use AlibabaOpen\entity\BaseEntityParams;

/**
 * Class ProductGetParams
 * @package AlibabaOpen\entity\product
 */
class ProductGetParams extends BaseEntityParams{

	private $productID;
	private $webSite;
	private $scene;

	/**
	 * ProductGetParams constructor.
	 * @param $productID
	 * @param $webSite
	 * @param $scene
	 */
	public function __construct($productID, $webSite='1688', $scene='1688'){
		$this->productID = $productID;
		$this->webSite=$webSite;
		$this->scene=$scene;
	}

	/**
	 * @param $webSite
	 * @return $this
	 */
	public function setWebSite($webSite){
		$this->webSite = $webSite;
		return $this;
	}

	/**
	 * @param $scene
	 * @return $this
	 */
	public function setScene($scene){
		$this->scene = $scene;
		return $this;
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