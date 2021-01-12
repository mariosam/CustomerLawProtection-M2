<?php
/**
 * Class ConsentPopupViewModel
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2020/10
 * @copyright   Blog do Mario SAM
 * 
 * This class collect the data to show them in frontend.
 */
namespace MarioSAM\CustomerLawProtection\ViewModel;

class ConsentPopupViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    protected $_scopeConfig;
    protected $_cookieManager;
    
    /**
     * ConsentPopupViewModel constructor.
     *
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager,
        \Magento\Framework\View\Element\Template\Context $context
    )
    {
        $this->_scopeConfig = $scopeConfig;
        $this->_cookieManager = $cookieManager;

        //parent::__construct($context);
    }

    /**
     * 
     * 
     * @return text
     */
    public function getEnabled()
    {
        return $this->_scopeConfig->getValue('customerlawprotection/frontend_message/enabled', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    
    /**
     * Get cookie session and send to frontend.
     * 
     * @return cookie session
     */
    public function getCookieManager()
    {
        return $this->_cookieManager;
    }

    /**
     * Get position configuration of module and send to frontend.
     * 
     * @return text
     */
    public function getPosition()
    {
        return $this->_scopeConfig->getValue('customerlawprotection/frontend_message/position', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get message configuration of module and send to frontend.
     * 
     * @return text
     */
    public function getMessage()
    {
        return $this->_scopeConfig->getValue('customerlawprotection/frontend_message/message', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get cookietime configuration of module and send to frontend.
     * 
     * @return int
     */
    public function getCookieTime()
    {
        return $this->_scopeConfig->getValue('customerlawprotection/frontend_message/cookietime', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    
    /**
     * Get possible CSS code customized.
     * 
     * @return int
     */
    public function getCssCustom()
    {
        return $this->_scopeConfig->getValue('customerlawprotection/frontend_message/css', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    
    /**
     * Get possible JS code customized.
     * 
     * @return int
     */
    public function getJsCustom()
    {
        return $this->_scopeConfig->getValue('customerlawprotection/frontend_message/js', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
