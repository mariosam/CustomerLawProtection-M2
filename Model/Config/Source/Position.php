<?php
/**
 * Class Position
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2020/10
 * @copyright   Blog do Mario SAM
 * 
 * Give the new options value to config the system module.
 */
namespace MarioSAM\CustomerLawProtection\Model\Config\Source;

class Position implements \Magento\Framework\Option\ArrayInterface
{ 
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            'bottom'    => __('Bottom Line'),
            'top'       => __('Header Line')
        ];
    }
}
