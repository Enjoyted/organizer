<?php

namespace Organizer\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OrganizerUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
