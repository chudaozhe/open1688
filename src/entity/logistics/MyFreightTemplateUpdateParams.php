<?php
namespace AlibabaOpen\entity\logistics;
use AlibabaOpen\entity\BaseEntityParams;

class MyFreightTemplateUpdateParams extends BaseEntityParams{
	private $mainTemplate;
	private $expressSubTemplate;
	private $expressSubRateList;
	private $cashSubTemplate;
	private $cashSubRateList;

	public function __construct($mainTemplate, $expressSubTemplate, $expressSubRateList, $cashSubTemplate='', $cashSubRateList=''){
		$this->mainTemplate=$mainTemplate;
		$this->expressSubTemplate=$expressSubTemplate;
		$this->expressSubRateList=$expressSubRateList;
		$this->cashSubTemplate=$cashSubTemplate;
		$this->cashSubRateList=$cashSubRateList;
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