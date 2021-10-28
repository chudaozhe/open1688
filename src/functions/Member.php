<?php

namespace AlibabaOpen\functions;

use AlibabaOpen\core\BaseClient;
use AlibabaOpen\entity\member\{MemberBrandQueryParams, OfferGroupSetParams, OfferGroupHasOpenedParams};

/**
 * 会员模块
 * @package AlibabaOpen\functions
 */
class Member extends BaseClient
{
	/**
	 * 获取商家的授权品牌信息
	 * @param \AlibabaOpen\entity\member\MemberBrandQueryParams $memberBrandQueryParams
	 * @return $this
	 */
	public function memberBrandQuery(MemberBrandQueryParams $memberBrandQueryParams):Member{
		$this->app->params = $memberBrandQueryParams->build();
		$this->url_info    = 'com.alibaba.member:alibaba.member.brand.query-1';
		return $this;
	}
	/**
	 * 开启或关闭自定义分类(阿里巴巴中国网站会员开启或关闭自定义分类功能
	 * @param \AlibabaOpen\entity\member\OfferGroupSetParams $offerGroupSetParams
	 * @return $this
	 */
	public function offerGroupSet(OfferGroupSetParams $offerGroupSetParams):Member{
		$this->app->params = $offerGroupSetParams->build();
		$this->url_info    = 'cn.alibaba.open:offerGroup.set-1';
		return $this;
	}
	/**
	 * 获取用户是否开启自定义分类
	 * @param \AlibabaOpen\entity\member\OfferGroupHasOpenedParams $offerGroupHasOpenedParams
	 * @return $this
	 */
	public function offerGroupHasOpened(OfferGroupHasOpenedParams $offerGroupHasOpenedParams):Member{
		$this->app->params = $offerGroupHasOpenedParams->build();
		$this->url_info    = 'cn.alibaba.open:offerGroup.hasOpened-1';
		return $this;
	}
	
}