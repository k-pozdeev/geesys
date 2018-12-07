<?php

namespace GeesysPdfWriter;

class SourceData
{
    private $invoiceNumber;
    private $orderNumber;
    private $date;
    private $customerName;
    private $customerINN;
    private $customerKPP;
    private $customerAddress;
    private $agentName;
    private $agentINN;
    private $agentKPP;
    private $agentAddress;
    private $carrierName;
    private $carrierINN;
    private $carrierKPP;
    private $carrierAddress;

    /**
     * SourceData constructor.
     * @param $invoiceNumber
     * @param $orderNumber
     * @param $date
     * @param $customerName
     * @param $customerINN
     * @param $customerKPP
     * @param $customerAddress
     * @param $agentName
     * @param $agentINN
     * @param $agentKPP
     * @param $agentAddress
     * @param $carrierName
     * @param $carrierINN
     * @param $carrierKPP
     * @param $carrierAddress
     */
    public function __construct($invoiceNumber, $orderNumber, $date, $customerName, $customerINN, $customerKPP, $customerAddress, $agentName, $agentINN, $agentKPP, $agentAddress, $carrierName, $carrierINN, $carrierKPP, $carrierAddress)
    {
        $this->invoiceNumber = $invoiceNumber;
        $this->orderNumber = $orderNumber;
        $this->date = $date;
        $this->customerName = $customerName;
        $this->customerINN = $customerINN;
        $this->customerKPP = $customerKPP;
        $this->customerAddress = $customerAddress;
        $this->agentName = $agentName;
        $this->agentINN = $agentINN;
        $this->agentKPP = $agentKPP;
        $this->agentAddress = $agentAddress;
        $this->carrierName = $carrierName;
        $this->carrierINN = $carrierINN;
        $this->carrierKPP = $carrierKPP;
        $this->carrierAddress = $carrierAddress;
    }

    /**
     * @return mixed
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @return mixed
     */
    public function getCustomerINN()
    {
        return $this->customerINN;
    }

    /**
     * @return mixed
     */
    public function getCustomerKPP()
    {
        return $this->customerKPP;
    }

    /**
     * @return mixed
     */
    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    /**
     * @return mixed
     */
    public function getAgentName()
    {
        return $this->agentName;
    }

    /**
     * @return mixed
     */
    public function getAgentINN()
    {
        return $this->agentINN;
    }

    /**
     * @return mixed
     */
    public function getAgentKPP()
    {
        return $this->agentKPP;
    }

    /**
     * @return mixed
     */
    public function getAgentAddress()
    {
        return $this->agentAddress;
    }

    /**
     * @return mixed
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * @return mixed
     */
    public function getCarrierINN()
    {
        return $this->carrierINN;
    }

    /**
     * @return mixed
     */
    public function getCarrierKPP()
    {
        return $this->carrierKPP;
    }

    /**
     * @return mixed
     */
    public function getCarrierAddress()
    {
        return $this->carrierAddress;
    }
}