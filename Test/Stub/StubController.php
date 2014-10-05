<?php
/**
 * Part of Windwalker project. 
 *
 * @copyright  Copyright (C) 2014 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace Windwalker\Controller\Test\Stub;

use Windwalker\Controller\AbstractController;

/**
 * The StubController class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class StubController extends AbstractController
{
	/**
	 * Execute the controller.
	 *
	 * @return  mixed Return executed result.
	 *
	 * @throws  \LogicException
	 * @throws  \RuntimeException
	 */
	public function execute()
	{
		return 'Sakura';
	}
}
