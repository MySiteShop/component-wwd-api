<?php

namespace BWC\Component\WWDAPI;

class OrderServiceRenewals
{

  /**
   *
   * @var string $sCLTRID
   * @access public
   */
  public $sCLTRID = null;

  /**
   *
   * @var Credential $credential
   * @access public
   */
  public $credential = null;

  /**
   *
   * @var Shopper $shopper
   * @access public
   */
  public $shopper = null;

  /**
   *
   * @var ServiceRenewal[] $items
   * @access public
   */
  public $items = null;

  /**
   *
   * @var string $sROID
   * @access public
   */
  public $sROID = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param Shopper $shopper
   * @param ServiceRenewal[] $items
   * @param string $sROID
   * @access public
   */
  public function __construct($sCLTRID, $credential, $shopper, $items, $sROID)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->shopper = $shopper;
    $this->items = $items;
    $this->sROID = $sROID;
  }

}
