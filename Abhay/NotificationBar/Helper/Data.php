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
namespace Abhay\NotificationBar\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_NOTIFICATION_BAR = 'notification_bar/';

    /**
     * [getConfigValue to get the configuration fields value]
     *
     * @param  string $field   [Field Id]
     * @param  null   $storeId
     * @return string [configuration field selected value]
     */
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    /**
     * @param  $code
     * @param  null $storeId
     * @return mixed
     */
    public function getGeneralConfig($code, $storeId = null)
    {
        return $this->getConfigValue(
            self::XML_PATH_NOTIFICATION_BAR .'general/'. $code, 
            $storeId
        );
    }

}
