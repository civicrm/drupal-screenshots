<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.6                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2015                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 * $Id$
 *
 */
/*
 * Settings metadata file
 */
return array(
  'userFrameworkResourceURL' => array(
    'group' => 'url',
    'group_name' => 'URL Preferences',
    'name' => 'userFrameworkResourceURL',
    'title' => 'Script and CSS Resources URL',
    'type' => 'String',
    'default' => NULL,
    'add' => '4.1',
    'prefetch' => 1,
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'CiviCRM Resource URL',
    'help_text' => NULL,
    'validate_callback' => 'CRM_Utils_Rule::url',
  ),
  'imageUploadURL' => array(
    'group' => 'url',
    'group_name' => 'URL Preferences',
    'title' => 'Image URL Prefix',
    'name' => 'imageUploadURL',
    'type' => 'String',
    'default' => NULL,
    'add' => '4.1',
    'prefetch' => 1,
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Image Upload URL',
    'help_text' => NULL,
    'validate_callback' => 'CRM_Utils_Rule::url',
  ),
  'customCSSURL' => array(
    'group' => 'url',
    'group_name' => 'URL Preferences',
    'name' => 'customCSSURL',
    'title' => 'Custom CSS',
    'type' => 'String',
    'default' => NULL,
    'add' => '4.1',
    'prefetch' => 1,
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Custom CiviCRM CSS URL',
    'help_text' => NULL,
    'validate_callback' => 'CRM_Utils_Rule::url',
  ),

);
