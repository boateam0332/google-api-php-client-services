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

class Google_Service_Directory_Role extends Google_Collection
{
  protected $collection_key = 'rolePrivileges';
  public $etag;
  public $isSuperAdminRole;
  public $isSystemRole;
  public $kind;
  public $roleDescription;
  public $roleId;
  public $roleName;
  public $rolePrivileges;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setIsSuperAdminRole($isSuperAdminRole)
  {
    $this->isSuperAdminRole = $isSuperAdminRole;
  }
  public function getIsSuperAdminRole()
  {
    return $this->isSuperAdminRole;
  }
  public function setIsSystemRole($isSystemRole)
  {
    $this->isSystemRole = $isSystemRole;
  }
  public function getIsSystemRole()
  {
    return $this->isSystemRole;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRoleDescription($roleDescription)
  {
    $this->roleDescription = $roleDescription;
  }
  public function getRoleDescription()
  {
    return $this->roleDescription;
  }
  public function setRoleId($roleId)
  {
    $this->roleId = $roleId;
  }
  public function getRoleId()
  {
    return $this->roleId;
  }
  public function setRoleName($roleName)
  {
    $this->roleName = $roleName;
  }
  public function getRoleName()
  {
    return $this->roleName;
  }
  public function setRolePrivileges(array $rolePrivileges)
  {
    foreach ($rolePrivileges as $r) {
      if (!$r instanceof Google_Service_Directory_RoleRolePrivileges) {
        throw new InvalidArgumentException('First argument to setRolePrivileges must be an array of Google_Service_Directory_RoleRolePrivileges');
      }
    }
    $this->rolePrivileges = $rolePrivileges;
  }
  public function getRolePrivileges()
  {
    return $this->rolePrivileges;
  }
}
