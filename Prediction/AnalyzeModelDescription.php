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

class Google_Service_Prediction_AnalyzeModelDescription extends Google_Model
{
  public $confusionMatrix;
  public $confusionMatrixRowTotals;
  public $modelinfo;

  public function setConfusionMatrix(array $confusionMatrix)
  {
    $this->confusionMatrix = $confusionMatrix;
  }
  public function getConfusionMatrix()
  {
    return $this->confusionMatrix;
  }
  public function setConfusionMatrixRowTotals(array $confusionMatrixRowTotals)
  {
    $this->confusionMatrixRowTotals = $confusionMatrixRowTotals;
  }
  public function getConfusionMatrixRowTotals()
  {
    return $this->confusionMatrixRowTotals;
  }
  public function setModelinfo(Google_Service_Prediction_Insert2 $modelinfo)
  {
    $this->modelinfo = $modelinfo;
  }
  public function getModelinfo()
  {
    return $this->modelinfo;
  }
}
