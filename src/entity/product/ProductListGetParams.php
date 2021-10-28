<?php
namespace AlibabaOpen\entity\product;

use AlibabaOpen\entity\BaseEntityParams;

class ProductListGetParams extends BaseEntityParams{

	private $signs;
	private $pageNo;
	private $pageSize;
	private $statusList;
	private $categoryId;
	private $startModifyTime;
	private $endModifyTime;
	private $subjectKey;
	private $cargoNumber;
	private $productIds;
	private $beginStar;
	private $endStar;
	private $groupIds;
	private $startPublishTime;
	private $endPublishTime;
	private $startExpiredTime;
	private $endExpiredTime;
	private $priceStart;
	private $priceEnd;
	private $orderByCondition;
	private $orderByType;
	private $supportOnlineTrade;
	private $privateOffer;
	private $needDetail;
	private $needFreight;
	private $needUserCategoryInfo;

	/**
	 * ProductListGetParams constructor.
	 * @param $pageNo
	 * @param $pageSize
	 */
	public function __construct($pageNo=1, $pageSize=20, $signs=[], $statusList=[], $categoryId=0, $startModifyTime='', $endModifyTime='', $subjectKey='', $cargoNumber='', $productIds=[], $beginStar=-1, $endStar=-1, $groupIds=0, $startPublishTime='', $endPublishTime='', $startExpiredTime='', $endExpiredTime='', $priceStart=0, $priceEnd=0, $orderByCondition='', $orderByType=0, $supportOnlineTrade=true, $privateOffer=false, $needDetail=false, $needFreight=false, $needUserCategoryInfo=false){
		$this->pageNo = $pageNo;
		$this->pageSize = $pageSize;
        if (is_array($signs) && count($signs)>0) $this->signs=$signs;
        if (is_array($statusList) && count($statusList)>0) $this->statusList=$statusList;
        if ($categoryId>0) $this->categoryId=$categoryId;
        if (!empty($startModifyTime)) $this->startModifyTime=$startModifyTime;
        if (!empty($endModifyTime)) $this->endModifyTime=$endModifyTime;
        if (!empty($subjectKey)) $this->subjectKey=$subjectKey;
        if (!empty($cargoNumber)) $this->cargoNumber=$cargoNumber;
        if (is_array($productIds) && count($productIds)>0) $this->productIds=$productIds;
        if ($beginStar>-1) $this->beginStar=$beginStar;
        if ($endStar>-1) $this->endStar=$endStar;
        if ($groupIds>0) $this->groupIds=$groupIds;
        if (!empty($startPublishTime)) $this->startPublishTime=$startPublishTime;
        if (!empty($endPublishTime)) $this->endPublishTime=$endPublishTime;
        if (!empty($startExpiredTime)) $this->startExpiredTime=$startExpiredTime;
        if (!empty($endExpiredTime)) $this->endExpiredTime=$endExpiredTime;
        if ($priceStart>0) $this->priceStart=$priceStart;
        if ($priceEnd>0) $this->priceEnd=$priceEnd;
        if (!empty($orderByCondition)) $this->orderByCondition=$orderByCondition;
        $this->orderByType=$orderByType==0?'ASC':'DESC';
        $this->supportOnlineTrade=$supportOnlineTrade;
        $this->privateOffer=$privateOffer;
        $this->needDetail=$needDetail;
        $this->needFreight=$needFreight;
        $this->needUserCategoryInfo=$needUserCategoryInfo;
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

	/**P
	 * @inheritDoc
	 */
	public function build()
	{
		return array_filter(get_object_vars($this), function ($val) {
			return !is_null($val);
		});
	}
}