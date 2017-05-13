<?php 
namespace Sagar\ClassOverride\Model;

class Customer extends \Magento\Customer\Model\Customer {
	public function __construct(){
		die('model override');
	}
}
?>