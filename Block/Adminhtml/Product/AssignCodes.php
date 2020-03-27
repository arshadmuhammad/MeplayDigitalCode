<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/24/2020
 * Time: 2:53 PM
 */

namespace MagArs\DigitalCodes\Block\Adminhtml\Product;


use MagArs\DigitalCodes\Block\Adminhtml\Product\Tab\Codes;
use Magento\Backend\Block\Template;

class AssignCodes extends Template {

    protected $_template = 'MagArs_DigitalCodes::catalog/product/edit/assign_codes.phtml';

    /**
     * @var Codes
     */
    protected $blockGrid;

    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;

    /**
     * @var \Magento\Framework\Json\EncoderInterface
     */
    protected $jsonEncoder;


    /**
     * AssignCodes constructor.
     * @param Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Json\EncoderInterface $jsonEncoder
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->jsonEncoder = $jsonEncoder;
        parent::__construct($context, $data);
    }

    /**
     * Retrieve instance of grid block
     *
     * @return \Magento\Framework\View\Element\BlockInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getBlockGrid()
    {
        if (null === $this->blockGrid) {
            $this->blockGrid = $this->getLayout()->createBlock(
                Codes::class,
                'product.code.grid'
            );
        }
        return $this->blockGrid;
    }

    /**
     * Return HTML of grid block
     *
     * @return string
     */
    public function getGridHtml()
    {
        return $this->getBlockGrid()->toHtml();
    }

    /**
     * @return string
     */
    public function getCodesJson()
    {
        $codes = $this->getProduct()->getCodesPosition();
        if (!empty($products)) {
            return $this->jsonEncoder->encode($codes);
        }
        return '{}';
    }

    /**
     * Retrieve current category instance
     *
     * @return array|null
     */
    public function getProduct()
    {
        return $this->registry->registry('product');
    }

}
