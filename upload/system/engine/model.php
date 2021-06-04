<?php
/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* Model class
*/
namespace Opencart\System\Engine;
class Model {
	protected $registry;

	public function __construct(\Opencart\System\Engine\Registry $registry) {
		$this->registry = $registry;
	}

	public function __get(string $key): object {
		return $this->registry->get($key);
	}

	public function __set(string $key, object $value): void {
		$this->registry->set($key, $value);
	}
}