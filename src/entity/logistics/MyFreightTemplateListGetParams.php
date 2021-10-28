<?php
namespace AlibabaOpen\entity\logistics;
use AlibabaOpen\entity\BaseEntityParams;

class MyFreightTemplateListGetParams extends BaseEntityParams{
	private $templateId;
	private $querySubTemplate;
	private $queryRate;

	public function __construct($templateId='', $querySubTemplate=false, $queryRate=false){
		$this->templateId=$templateId;
		$this->querySubTemplate=$querySubTemplate;
		$this->queryRate=$queryRate;
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