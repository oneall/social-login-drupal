<?php

namespace Drupal\social_login\Event;

use Drupal\user\Entity\User;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class SocialLoginUserLoginEvent.
 */

class SocialLoginUserLoginEvent extends Event
{
    // The name of this event.
    const EVENT_NAME = 'social_login_user_login';

    /**
     * The Drupal user account that has linked the social network account.
     */
    public $account;

    /**
     * The retrieved social network profile data.
     */
    public $social_network_profile_data;

    /**
     * Constructor.
     */
    public function __construct(User $account, $social_network_profile_data)
    {
        $this->set_account($account);
        $this->set_social_network_profile_data($social_network_profile_data);
    }

    /**
     * Sets the social network profile data.
     */
    public function set_social_network_profile_data($social_network_profile_data)
    {
        $this->social_network_profile_data = $social_network_profile_data;
    }

    /**
     * Returns the social network profile data.
     */
    public function get_social_network_profile_data()
    {
        return $this->social_network_profile_data;
    }

    /**
     * Sets the user account.
     */
    public function set_account(User $account)
    {
        $this->account = $account;
    }

    /**
     * Returns the user account.
     */
    public function get_account()
    {
        return $this->account;
    }
}