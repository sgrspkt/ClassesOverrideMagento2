<?php 
namespace Sagar\ClassOverride\Helper;

class Address extends \Magento\Customer\Helper\Address
{
	function __construct()
	{
		die('helper overridden');
		
	}
}
?>