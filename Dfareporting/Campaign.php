<?php
/*
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Dfareporting_Campaign extends Google_Collection
{
  protected $collection_key = 'traffickerEmails';
  public $accountId;
  public $additionalCreativeOptimizationConfigurations;
  public $advertiserGroupId;
  public $advertiserId;
  public $advertiserIdDimensionValue;
  public $archived;
  public $audienceSegmentGroups;
  public $billingInvoiceCode;
  public $clickThroughUrlSuffixProperties;
  public $comment;
  public $comscoreVceEnabled;
  public $createInfo;
  public $creativeGroupIds;
  public $creativeOptimizationConfiguration;
  public $defaultClickThroughEventTagProperties;
  public $endDate;
  public $eventTagOverrides;
  public $externalId;
  public $id;
  public $idDimensionValue;
  public $kind;
  public $lastModifiedInfo;
  public $lookbackConfiguration;
  public $name;
  public $nielsenOcrEnabled;
  public $startDate;
  public $subaccountId;
  public $traffickerEmails;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  public function getAccountId()
  {
    return $this->accountId;
  }
  public function setAdditionalCreativeOptimizationConfigurations(array $additionalCreativeOptimizationConfigurations)
  {
    foreach ($additionalCreativeOptimizationConfigurations as $a) {
      if (!$a instanceof Google_Service_Dfareporting_CreativeOptimizationConfiguration) {
        throw new InvalidArgumentException('First argument to setAdditionalCreativeOptimizationConfigurations must be an array of Google_Service_Dfareporting_CreativeOptimizationConfiguration');
      }
    }
    $this->additionalCreativeOptimizationConfigurations = $additionalCreativeOptimizationConfigurations;
  }
  public function getAdditionalCreativeOptimizationConfigurations()
  {
    return $this->additionalCreativeOptimizationConfigurations;
  }
  public function setAdvertiserGroupId($advertiserGroupId)
  {
    $this->advertiserGroupId = $advertiserGroupId;
  }
  public function getAdvertiserGroupId()
  {
    return $this->advertiserGroupId;
  }
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  public function setAdvertiserIdDimensionValue(Google_Service_Dfareporting_DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  public function setArchived($archived)
  {
    $this->archived = $archived;
  }
  public function getArchived()
  {
    return $this->archived;
  }
  public function setAudienceSegmentGroups(array $audienceSegmentGroups)
  {
    foreach ($audienceSegmentGroups as $a) {
      if (!$a instanceof Google_Service_Dfareporting_AudienceSegmentGroup) {
        throw new InvalidArgumentException('First argument to setAudienceSegmentGroups must be an array of Google_Service_Dfareporting_AudienceSegmentGroup');
      }
    }
    $this->audienceSegmentGroups = $audienceSegmentGroups;
  }
  public function getAudienceSegmentGroups()
  {
    return $this->audienceSegmentGroups;
  }
  public function setBillingInvoiceCode($billingInvoiceCode)
  {
    $this->billingInvoiceCode = $billingInvoiceCode;
  }
  public function getBillingInvoiceCode()
  {
    return $this->billingInvoiceCode;
  }
  public function setClickThroughUrlSuffixProperties(Google_Service_Dfareporting_ClickThroughUrlSuffixProperties $clickThroughUrlSuffixProperties)
  {
    $this->clickThroughUrlSuffixProperties = $clickThroughUrlSuffixProperties;
  }
  public function getClickThroughUrlSuffixProperties()
  {
    return $this->clickThroughUrlSuffixProperties;
  }
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  public function getComment()
  {
    return $this->comment;
  }
  public function setComscoreVceEnabled($comscoreVceEnabled)
  {
    $this->comscoreVceEnabled = $comscoreVceEnabled;
  }
  public function getComscoreVceEnabled()
  {
    return $this->comscoreVceEnabled;
  }
  public function setCreateInfo(Google_Service_Dfareporting_LastModifiedInfo $createInfo)
  {
    $this->createInfo = $createInfo;
  }
  public function getCreateInfo()
  {
    return $this->createInfo;
  }
  public function setCreativeGroupIds(array $creativeGroupIds)
  {
    $this->creativeGroupIds = $creativeGroupIds;
  }
  public function getCreativeGroupIds()
  {
    return $this->creativeGroupIds;
  }
  public function setCreativeOptimizationConfiguration(Google_Service_Dfareporting_CreativeOptimizationConfiguration $creativeOptimizationConfiguration)
  {
    $this->creativeOptimizationConfiguration = $creativeOptimizationConfiguration;
  }
  public function getCreativeOptimizationConfiguration()
  {
    return $this->creativeOptimizationConfiguration;
  }
  public function setDefaultClickThroughEventTagProperties(Google_Service_Dfareporting_DefaultClickThroughEventTagProperties $defaultClickThroughEventTagProperties)
  {
    $this->defaultClickThroughEventTagProperties = $defaultClickThroughEventTagProperties;
  }
  public function getDefaultClickThroughEventTagProperties()
  {
    return $this->defaultClickThroughEventTagProperties;
  }
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setEventTagOverrides(array $eventTagOverrides)
  {
    foreach ($eventTagOverrides as $e) {
      if (!$e instanceof Google_Service_Dfareporting_EventTagOverride) {
        throw new InvalidArgumentException('First argument to setEventTagOverrides must be an array of Google_Service_Dfareporting_EventTagOverride');
      }
    }
    $this->eventTagOverrides = $eventTagOverrides;
  }
  public function getEventTagOverrides()
  {
    return $this->eventTagOverrides;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIdDimensionValue(Google_Service_Dfareporting_DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLastModifiedInfo(Google_Service_Dfareporting_LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
  }
  public function setLookbackConfiguration(Google_Service_Dfareporting_LookbackConfiguration $lookbackConfiguration)
  {
    $this->lookbackConfiguration = $lookbackConfiguration;
  }
  public function getLookbackConfiguration()
  {
    return $this->lookbackConfiguration;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setNielsenOcrEnabled($nielsenOcrEnabled)
  {
    $this->nielsenOcrEnabled = $nielsenOcrEnabled;
  }
  public function getNielsenOcrEnabled()
  {
    return $this->nielsenOcrEnabled;
  }
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  public function setTraffickerEmails(array $traffickerEmails)
  {
    $this->traffickerEmails = $traffickerEmails;
  }
  public function getTraffickerEmails()
  {
    return $this->traffickerEmails;
  }
}
