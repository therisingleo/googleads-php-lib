<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductTemplateMarketplaceInfo
{

    /**
     * @var string $adExchangeEnvironment
     */
    protected $adExchangeEnvironment = null;

    /**
     * @var string $additionalTerms
     */
    protected $additionalTerms = null;

    /**
     * @param string $adExchangeEnvironment
     * @param string $additionalTerms
     */
    public function __construct($adExchangeEnvironment = null, $additionalTerms = null)
    {
      $this->adExchangeEnvironment = $adExchangeEnvironment;
      $this->additionalTerms = $additionalTerms;
    }

    /**
     * @return string
     */
    public function getAdExchangeEnvironment()
    {
      return $this->adExchangeEnvironment;
    }

    /**
     * @param string $adExchangeEnvironment
     * @return \Google\AdsApi\AdManager\v201805\ProductTemplateMarketplaceInfo
     */
    public function setAdExchangeEnvironment($adExchangeEnvironment)
    {
      $this->adExchangeEnvironment = $adExchangeEnvironment;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalTerms()
    {
      return $this->additionalTerms;
    }

    /**
     * @param string $additionalTerms
     * @return \Google\AdsApi\AdManager\v201805\ProductTemplateMarketplaceInfo
     */
    public function setAdditionalTerms($additionalTerms)
    {
      $this->additionalTerms = $additionalTerms;
      return $this;
    }

}
