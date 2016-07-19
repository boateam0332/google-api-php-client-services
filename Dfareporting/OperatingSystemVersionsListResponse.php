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

class Google_Service_Dfareporting_OperatingSystemVersionsListResponse extends Google_Collection
{
  protected $collection_key = 'operatingSystemVersions';
  public $kind;
  public $operatingSystemVersions;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOperatingSystemVersions(array $operatingSystemVersions)
  {
    foreach ($operatingSystemVersions as $o) {
      if (!$o instanceof Google_Service_Dfareporting_OperatingSystemVersion) {
        throw new InvalidArgumentException('First argument to setOperatingSystemVersions must be an array of Google_Service_Dfareporting_OperatingSystemVersion');
      }
    }
    $this->operatingSystemVersions = $operatingSystemVersions;
  }
  public function getOperatingSystemVersions()
  {
    return $this->operatingSystemVersions;
  }
}
