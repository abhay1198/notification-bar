<?php 
/**
 * Abhay
 * 
 * PHP version 7
 * 
 * @category  Abhay
 * @package   Abhay_NotificationBar
 * @author    Abhay Agrawal <abhay@gmail.com>
 * @copyright 2022 Copyright © Abhay
 * @license   See COPYING.txt for license details.
 * @link      https://github.com/abhay1198/notification-bar
 */
namespace Abhay\NotificationBar\Model\Config\Source;

class NotificationPosition
{
     /**
      * Options getter.
      *
      * @return array
      */
    public function toOptionArray()
    {
        return [
            ['value' => 'header', 'label' => __('Header (Default)')],
            ['value' => 'footer', 'label' => __('Footer')]
        ];
    }
}
