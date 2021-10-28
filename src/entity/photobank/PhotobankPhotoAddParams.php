<?php
namespace AlibabaOpen\entity\photobank;

use AlibabaOpen\entity\BaseEntityParams;

class PhotobankPhotoAddParams extends BaseEntityParams{

	private $albumID;
	private $name;
	private $description;
	private $drawTxt;
	private $imageBytes;
	private $webSite;

	/**
	 * PhotobankPhotoAddParams constructor.
	 * @param $name
	 * @param $webSite
	 */
	public function __construct($name, $albumID, $imageBytes, $description='', $drawTxt=false, $webSite='1688'){
		$this->name = $name;
		$this->albumID = $albumID;
		$this->description = $description;
		$this->drawTxt = $drawTxt;
		$this->imageBytes = $imageBytes;
		$this->webSite = $webSite;
	}

	/**
	 * @param $name
	 * @param $arguments
	 * @return $this
	 */
	public function __call($name, $arguments){
		$string = ltrim($name , 'set');
		$field = lcfirst($string);
		$this->$field = $arguments[0];
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