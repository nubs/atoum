<?php

namespace mageekguy\atoum\iterators\filters\recursives\atoum;

use
	mageekguy\atoum\iterators\filters\recursives
;

class source extends recursives\dot
{
	public function accept()
	{
		switch ($this->getInnerIterator()->current()->getBasename())
		{
			case 'GPATH':
			case 'GRTAGS':
			case 'GTAGS':
				return false;

			default:
				return parent::accept();
		}
	}
}
