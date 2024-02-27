<?php

namespace Kanboard\Plugin\Notifyplus;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Notification\NotificationInterface;
//

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->setTemplateOverride('header', 'NotifyPlus:header');
        //$this->template->hook->attach('template:web_notification:show', 'Notifyplus:web_notification/show3');
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.0.35';
    }
}