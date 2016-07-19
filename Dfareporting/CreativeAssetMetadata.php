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

class Google_Service_Dfareporting_CreativeAssetMetadata extends Google_Collection
{
  protected $collection_key = 'warnedValidationRules';
  public $assetIdentifier;
  public $clickTags;
  public $detectedFeatures;
  public $kind;
  public $warnedValidationRules;

  public function setAssetIdentifier(Google_Service_Dfareporting_CreativeAssetId $assetIdentifier)
  {
    $this->assetIdentifier = $assetIdentifier;
  }
  public function getAssetIdentifier()
  {
    return $this->assetIdentifier;
  }
  public function setClickTags(array $clickTags)
  {
    foreach ($clickTags as $c) {
      if (!$c instanceof Google_Service_Dfareporting_ClickTag) {
        throw new InvalidArgumentException('First argument to setClickTags must be an array of Google_Service_Dfareporting_ClickTag');
      }
    }
    $this->clickTags = $clickTags;
  }
  public function getClickTags()
  {
    return $this->clickTags;
  }
  public function setDetectedFeatures(array $detectedFeatures)
  {
    $this->detectedFeatures = $detectedFeatures;
  }
  public function getDetectedFeatures()
  {
    return $this->detectedFeatures;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setWarnedValidationRules(array $warnedValidationRules)
  {
    $this->warnedValidationRules = $warnedValidationRules;
  }
  public function getWarnedValidationRules()
  {
    return $this->warnedValidationRules;
  }
}
