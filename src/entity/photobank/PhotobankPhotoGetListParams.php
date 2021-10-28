<?php
namespace AlibabaOpen\entity\photobank;

use AlibabaOpen\entity\BaseEntityParams;

class PhotobankPhotoGetListParams extends BaseEntityParams{

	private $albumID;
	private $pageNo;
	private $pageSize;
	private $webSite;

	/**
	 * PhotobankPhotoGetListParams constructor.
	 * @param $webSite
	 */
	public function __construct($albumID, $pageNo=1, $pageSize=30, $webSite=1688){
		$this->albumID=$albumID;
		$this->pageNo=$pageNo;
		$this->pageSize=$pageSize;
		$this->webSite = $webSite;
	}

	/**
	 * @param $albumID
	 * @return $this
	 */
	public function setAlbumID($albumID){
		$this->albumID = $albumID;
		return $this;
	}

	/**
	 * @param $pageNo
	 * @return $this
	 */
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
		return $this;
	}

	/**
	 * @param $pageSize
	 * @return $this
	 */
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
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