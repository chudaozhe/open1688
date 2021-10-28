<?php
namespace AlibabaOpen\entity\product;
use AlibabaOpen\entity\BaseEntityParams;


class SendGoodsAddressCreateParams extends BaseEntityParams{
	private $province;
	private $city;
	private $area;
	private $town;
	private $address;
	private $contactor;
	private $mobile;
	private $phone;
	private $post;

	public function __construct($province, $city, $area, $address, $contactor, $mobile='', $phone='', $post='', $town=''){
		$this->province = $province;
		$this->city = $city;
		$this->area = $area;
		$this->address = $address;
		$this->contactor = $contactor;
		$this->mobile = $mobile;
		$this->phone = $phone;
		$this->post = $post;
		$this->town = $town;
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