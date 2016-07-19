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

class Google_Service_Safebrowsing_ListThreatListsResponse extends Google_Collection
{
  protected $collection_key = 'threatLists';
  public $threatLists;

  public function setThreatLists(array $threatLists)
  {
    foreach ($threatLists as $t) {
      if (!$t instanceof Google_Service_Safebrowsing_ThreatListDescriptor) {
        throw new InvalidArgumentException('First argument to setThreatLists must be an array of Google_Service_Safebrowsing_ThreatListDescriptor');
      }
    }
    $this->threatLists = $threatLists;
  }
  public function getThreatLists()
  {
    return $this->threatLists;
  }
}
