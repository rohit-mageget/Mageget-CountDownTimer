<?php

namespace Mageget\Countdown\Block\Salesrule;

class Rule extends \Magento\Framework\View\Element\Template
{

  protected $ruleCollectionFactory; 
  protected $_timezoneInterface; 


  public function __construct(

        \Magento\SalesRule\Model\ResourceModel\Rule\CollectionFactory $ruleCollectionFactory,
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezoneInterface
        

    ) {


        $this->ruleCollectionFactory = $ruleCollectionFactory;
        $this->_timezoneInterface = $timezoneInterface;
        // // $data = $this->rule->create()->load('1');
        // var_dump($this->date->gmtDate());
        // echo "<br>";
        // var_dump($this->_timezoneInterface->date()->format('d-m-Y'));
        // echo "<br>";
        // var_dump($this->_timezoneInterface->date()->format('Y/m/d H:i:s'));
        // die("rohit");

    }
    public function getAllActiveCartRule()
    {
        $cartActiveRule = $this->ruleCollectionFactory->create()->addFieldToFilter('is_active', 1);

        return $cartActiveRule;
    }

    public function getTimeAccordingToTimeZone()
    {
        // for get current time according to time zone
        $today = $this->_timezoneInterface->date()->format('Y/m/d H:i:s');
        return $today;
    }

    public function getCurruntDate()
    {
        $date = $this->_timezoneInterface->date()->format('d-m-Y');
        return $date;
    }

    
 }