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

class Google_Service_Appengine_Version extends Google_Collection
{
  protected $collection_key = 'libraries';
  public $apiConfig;
  public $automaticScaling;
  public $basicScaling;
  public $betaSettings;
  public $creationTime;
  public $defaultExpiration;
  public $deployer;
  public $deployment;
  public $diskUsageBytes;
  public $env;
  public $envVariables;
  public $errorHandlers;
  public $handlers;
  public $healthCheck;
  public $id;
  public $inboundServices;
  public $instanceClass;
  public $libraries;
  public $manualScaling;
  public $name;
  public $network;
  public $nobuildFilesRegex;
  public $resources;
  public $runtime;
  public $servingStatus;
  public $threadsafe;
  public $vm;

  public function setApiConfig(Google_Service_Appengine_ApiConfigHandler $apiConfig)
  {
    $this->apiConfig = $apiConfig;
  }
  public function getApiConfig()
  {
    return $this->apiConfig;
  }
  public function setAutomaticScaling(Google_Service_Appengine_AutomaticScaling $automaticScaling)
  {
    $this->automaticScaling = $automaticScaling;
  }
  public function getAutomaticScaling()
  {
    return $this->automaticScaling;
  }
  public function setBasicScaling(Google_Service_Appengine_BasicScaling $basicScaling)
  {
    $this->basicScaling = $basicScaling;
  }
  public function getBasicScaling()
  {
    return $this->basicScaling;
  }
  public function setBetaSettings(array $betaSettings)
  {
    $this->betaSettings = $betaSettings;
  }
  public function getBetaSettings()
  {
    return $this->betaSettings;
  }
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setDefaultExpiration($defaultExpiration)
  {
    $this->defaultExpiration = $defaultExpiration;
  }
  public function getDefaultExpiration()
  {
    return $this->defaultExpiration;
  }
  public function setDeployer($deployer)
  {
    $this->deployer = $deployer;
  }
  public function getDeployer()
  {
    return $this->deployer;
  }
  public function setDeployment(Google_Service_Appengine_Deployment $deployment)
  {
    $this->deployment = $deployment;
  }
  public function getDeployment()
  {
    return $this->deployment;
  }
  public function setDiskUsageBytes($diskUsageBytes)
  {
    $this->diskUsageBytes = $diskUsageBytes;
  }
  public function getDiskUsageBytes()
  {
    return $this->diskUsageBytes;
  }
  public function setEnv($env)
  {
    $this->env = $env;
  }
  public function getEnv()
  {
    return $this->env;
  }
  public function setEnvVariables(array $envVariables)
  {
    $this->envVariables = $envVariables;
  }
  public function getEnvVariables()
  {
    return $this->envVariables;
  }
  public function setErrorHandlers(array $errorHandlers)
  {
    foreach ($errorHandlers as $e) {
      if (!$e instanceof Google_Service_Appengine_ErrorHandler) {
        throw new InvalidArgumentException('First argument to setErrorHandlers must be an array of Google_Service_Appengine_ErrorHandler');
      }
    }
    $this->errorHandlers = $errorHandlers;
  }
  public function getErrorHandlers()
  {
    return $this->errorHandlers;
  }
  public function setHandlers(array $handlers)
  {
    foreach ($handlers as $h) {
      if (!$h instanceof Google_Service_Appengine_UrlMap) {
        throw new InvalidArgumentException('First argument to setHandlers must be an array of Google_Service_Appengine_UrlMap');
      }
    }
    $this->handlers = $handlers;
  }
  public function getHandlers()
  {
    return $this->handlers;
  }
  public function setHealthCheck(Google_Service_Appengine_HealthCheck $healthCheck)
  {
    $this->healthCheck = $healthCheck;
  }
  public function getHealthCheck()
  {
    return $this->healthCheck;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setInboundServices(array $inboundServices)
  {
    $this->inboundServices = $inboundServices;
  }
  public function getInboundServices()
  {
    return $this->inboundServices;
  }
  public function setInstanceClass($instanceClass)
  {
    $this->instanceClass = $instanceClass;
  }
  public function getInstanceClass()
  {
    return $this->instanceClass;
  }
  public function setLibraries(array $libraries)
  {
    foreach ($libraries as $l) {
      if (!$l instanceof Google_Service_Appengine_Library) {
        throw new InvalidArgumentException('First argument to setLibraries must be an array of Google_Service_Appengine_Library');
      }
    }
    $this->libraries = $libraries;
  }
  public function getLibraries()
  {
    return $this->libraries;
  }
  public function setManualScaling(Google_Service_Appengine_ManualScaling $manualScaling)
  {
    $this->manualScaling = $manualScaling;
  }
  public function getManualScaling()
  {
    return $this->manualScaling;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setNetwork(Google_Service_Appengine_Network $network)
  {
    $this->network = $network;
  }
  public function getNetwork()
  {
    return $this->network;
  }
  public function setNobuildFilesRegex($nobuildFilesRegex)
  {
    $this->nobuildFilesRegex = $nobuildFilesRegex;
  }
  public function getNobuildFilesRegex()
  {
    return $this->nobuildFilesRegex;
  }
  public function setResources(Google_Service_Appengine_Resources $resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
  public function setRuntime($runtime)
  {
    $this->runtime = $runtime;
  }
  public function getRuntime()
  {
    return $this->runtime;
  }
  public function setServingStatus($servingStatus)
  {
    $this->servingStatus = $servingStatus;
  }
  public function getServingStatus()
  {
    return $this->servingStatus;
  }
  public function setThreadsafe($threadsafe)
  {
    $this->threadsafe = $threadsafe;
  }
  public function getThreadsafe()
  {
    return $this->threadsafe;
  }
  public function setVm($vm)
  {
    $this->vm = $vm;
  }
  public function getVm()
  {
    return $this->vm;
  }
}
