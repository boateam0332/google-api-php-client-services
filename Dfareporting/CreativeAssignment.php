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

class Google_Service_Dfareporting_CreativeAssignment extends Google_Collection
{
  protected $collection_key = 'richMediaExitOverrides';
  public $active;
  public $applyEventTags;
  public $clickThroughUrl;
  public $companionCreativeOverrides;
  public $creativeGroupAssignments;
  public $creativeId;
  public $creativeIdDimensionValue;
  public $endTime;
  public $richMediaExitOverrides;
  public $sequence;
  public $sslCompliant;
  public $startTime;
  public $weight;

  public function setActive($active)
  {
    $this->active = $active;
  }
  public function getActive()
  {
    return $this->active;
  }
  public function setApplyEventTags($applyEventTags)
  {
    $this->applyEventTags = $applyEventTags;
  }
  public function getApplyEventTags()
  {
    return $this->applyEventTags;
  }
  public function setClickThroughUrl(Google_Service_Dfareporting_ClickThroughUrl $clickThroughUrl)
  {
    $this->clickThroughUrl = $clickThroughUrl;
  }
  public function getClickThroughUrl()
  {
    return $this->clickThroughUrl;
  }
  public function setCompanionCreativeOverrides(array $companionCreativeOverrides)
  {
    foreach ($companionCreativeOverrides as $c) {
      if (!$c instanceof Google_Service_Dfareporting_CompanionClickThroughOverride) {
        throw new InvalidArgumentException('First argument to setCompanionCreativeOverrides must be an array of Google_Service_Dfareporting_CompanionClickThroughOverride');
      }
    }
    $this->companionCreativeOverrides = $companionCreativeOverrides;
  }
  public function getCompanionCreativeOverrides()
  {
    return $this->companionCreativeOverrides;
  }
  public function setCreativeGroupAssignments(array $creativeGroupAssignments)
  {
    foreach ($creativeGroupAssignments as $c) {
      if (!$c instanceof Google_Service_Dfareporting_CreativeGroupAssignment) {
        throw new InvalidArgumentException('First argument to setCreativeGroupAssignments must be an array of Google_Service_Dfareporting_CreativeGroupAssignment');
      }
    }
    $this->creativeGroupAssignments = $creativeGroupAssignments;
  }
  public function getCreativeGroupAssignments()
  {
    return $this->creativeGroupAssignments;
  }
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  public function getCreativeId()
  {
    return $this->creativeId;
  }
  public function setCreativeIdDimensionValue(Google_Service_Dfareporting_DimensionValue $creativeIdDimensionValue)
  {
    $this->creativeIdDimensionValue = $creativeIdDimensionValue;
  }
  public function getCreativeIdDimensionValue()
  {
    return $this->creativeIdDimensionValue;
  }
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setRichMediaExitOverrides(array $richMediaExitOverrides)
  {
    foreach ($richMediaExitOverrides as $r) {
      if (!$r instanceof Google_Service_Dfareporting_RichMediaExitOverride) {
        throw new InvalidArgumentException('First argument to setRichMediaExitOverrides must be an array of Google_Service_Dfareporting_RichMediaExitOverride');
      }
    }
    $this->richMediaExitOverrides = $richMediaExitOverrides;
  }
  public function getRichMediaExitOverrides()
  {
    return $this->richMediaExitOverrides;
  }
  public function setSequence($sequence)
  {
    $this->sequence = $sequence;
  }
  public function getSequence()
  {
    return $this->sequence;
  }
  public function setSslCompliant($sslCompliant)
  {
    $this->sslCompliant = $sslCompliant;
  }
  public function getSslCompliant()
  {
    return $this->sslCompliant;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
  public function setWeight($weight)
  {
    $this->weight = $weight;
  }
  public function getWeight()
  {
    return $this->weight;
  }
}
