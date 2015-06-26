<?php

namespace Zz\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ZzUserBundle extends Bundle
{
	public function getParent ()
	{
		return 'FOSUserBundle';
	}
}
