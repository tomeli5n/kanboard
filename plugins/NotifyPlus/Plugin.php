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
        $this->template->setTemplateOverride('web_notification/show', 'NotifyPlus:web_notification/show');
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.0.35';
    }

    /**
     * Mark a notification as read
     *
     * @access public
     */
    public function remove()
    {
        $this->checkReusableGETCSRFParam();
        $user_id = $this->getUserId();
        $notification_id = $this->request->getIntegerParam('notification_id');
        //$this->userUnreadNotificationModel->markAsRead($user_id, $notification_id);
        //$this->show();
    }
}