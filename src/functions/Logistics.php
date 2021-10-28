<?php

namespace AlibabaOpen\functions;

use AlibabaOpen\core\BaseClient;
use AlibabaOpen\entity\logistics\{
FreightTemplateGetListParams,
MyFreightTemplateCreateParams,
MyFreightTemplateListGetParams,
MyFreightTemplateUpdateParams,
MySendGoodsAddressListGetParams

};

/**
 * 物流模块
 * @package AlibabaOpen\functions
 */
class Logistics extends BaseClient
{
	/**
	 * 我的发货地址列表
	 * @param \AlibabaOpen\entity\logistics\MySendGoodsAddressListGetParams $mySendGoodsAddressListGetParams
	 * @return $this
	 */
	public function mySendGoodsAddressListGet(MySendGoodsAddressListGetParams $mySendGoodsAddressListGetParams):Logistics{
		$this->app->params = $mySendGoodsAddressListGetParams->build();
		$this->url_info    = 'com.alibaba.logistics:alibaba.logistics.mySendGoodsAddress.list.get-1';
		return $this;
	}
	/**
	 * 创建我的运费模板
	 * @param \AlibabaOpen\entity\logistics\MyFreightTemplateCreateParams $myFreightTemplateCreateParams
	 * @return $this
	 */
	public function myFreightTemplateCreate(MyFreightTemplateCreateParams $myFreightTemplateCreateParams):Logistics{
		$this->app->params = $myFreightTemplateCreateParams->build();
		$this->url_info    = 'com.alibaba.logistics:alibaba.logistics.myFreightTemplate.create-1';
		return $this;
	}
	/**
	 * 修改我的运费模板
	 * @param \AlibabaOpen\entity\logistics\MyFreightTemplateUpdateParams $myFreightTemplateUpdateParams
	 * @return $this
	 */
	public function myFreightTemplateUpdate(MyFreightTemplateUpdateParams $myFreightTemplateUpdateParams):Logistics{
		$this->app->params = $myFreightTemplateUpdateParams->build();
		$this->url_info    = 'com.alibaba.logistics:alibaba.logistics.myFreightTemplate.update-1';
		return $this;
	}
	/**
	 * 获取物流模板详情
	 * @param \AlibabaOpen\entity\logistics\MyFreightTemplateListGetParams $myFreightTemplateListGetParams
	 * @return $this
	 */
	public function myFreightTemplateListGet(MyFreightTemplateListGetParams $myFreightTemplateListGetParams):Logistics{
		$this->app->params = $myFreightTemplateListGetParams->build();
		$this->url_info    = 'com.alibaba.logistics:alibaba.logistics.myFreightTemplate.list.get-1';
		return $this;
	}
	/**
	 * 获取运费模板列表
	 * @param \AlibabaOpen\entity\logistics\FreightTemplateGetListParams $freightTemplateGetListParams
	 * @return $this
	 */
	public function freightTemplateGetList(FreightTemplateGetListParams $freightTemplateGetListParams):Logistics{
		$this->app->params = $freightTemplateGetListParams->build();
		$this->url_info    = 'com.alibaba.logistics:alibaba.logistics.freightTemplate.getList-1';
		return $this;
	}
}