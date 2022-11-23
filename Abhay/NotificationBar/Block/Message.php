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

namespace Abhay\NotificationBar\Block;

class Message extends \Magento\Framework\View\Element\Template
{
    protected $helper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Abhay\NotificationBar\Helper\Data $helper
    ) {
        $this->helper = $helper;
        parent::__construct($context);
    }

    /**
     * @param  $configId
     * @return mixed
     */
    public function getConfiguration($configId)
    {
        return $this->helper->getGeneralConfig($configId);
    }

}
