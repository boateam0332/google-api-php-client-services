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

class Google_Service_Books_Discoveryclusters extends Google_Collection
{
  protected $collection_key = 'clusters';
  public $clusters;
  public $kind;
  public $totalClusters;

  public function setClusters(array $clusters)
  {
    foreach ($clusters as $c) {
      if (!$c instanceof Google_Service_Books_DiscoveryclustersClusters) {
        throw new InvalidArgumentException('First argument to setClusters must be an array of Google_Service_Books_DiscoveryclustersClusters');
      }
    }
    $this->clusters = $clusters;
  }
  public function getClusters()
  {
    return $this->clusters;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setTotalClusters($totalClusters)
  {
    $this->totalClusters = $totalClusters;
  }
  public function getTotalClusters()
  {
    return $this->totalClusters;
  }
}
