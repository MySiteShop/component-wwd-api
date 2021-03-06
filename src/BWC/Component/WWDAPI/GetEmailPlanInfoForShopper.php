<?php

namespace BWC\Component\WWDAPI;

class GetEmailPlanInfoForShopper
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
   * @var ReturnConfig $returnCfg
   * @access public
   */
  public $returnCfg = null;

  /**
   *
   * @var string $sShopper
   * @access public
   */
  public $sShopper = null;

  /**
   *
   * @var string $sResourceID
   * @access public
   */
  public $sResourceID = null;

  /**
   *
   * @var int $nType
   * @access public
   */
  public $nType = null;

  /**
   *
   * @var int $nDynamicData
   * @access public
   */
  public $nDynamicData = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param ReturnConfig $returnCfg
   * @param string $sShopper
   * @param string $sResourceID
   * @param int $nType
   * @param int $nDynamicData
   * @access public
   */
  public function __construct($sCLTRID, $credential, $returnCfg, $sShopper, $sResourceID, $nType, $nDynamicData)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->returnCfg = $returnCfg;
    $this->sShopper = $sShopper;
    $this->sResourceID = $sResourceID;
    $this->nType = $nType;
    $this->nDynamicData = $nDynamicData;
  }

}
