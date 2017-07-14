<?php

namespace PadelSchedule\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PadelScheduleUserBundle extends Bundle
{
        public function getParent()
    {
        return 'FOSUserBundle';
    }
}
