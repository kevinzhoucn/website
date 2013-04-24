<?php
class UserAds {
	public $mADSDaily;
	public $mADSFixed;
	
	public function __construct() {
		$this->mADSDaily = array();
		$this->mADSFixed = array();
	}
	
	public function init() {
		$this->mADSDaily = HomeList::GetUserADSDaily();
		$this->mADSFixed = HomeList::GetUserADSFixed();
	}
}