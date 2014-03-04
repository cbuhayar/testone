<?php
/**
 *
 * Miscellaneous functions used throughout this specific site
 *
 * All rights reserved. For license information, contact Synotac Design at
 * http://www.synotac.com
 *
 * @package Core
 * @copyright Copyright 2008 by Synotac Design LLC
 * @version $Id: general.php 53 2008-03-13 18:44:19Z bill $
 *
 */

  /** do not allow direct access */
  defined('_VALID_INCLUDE') || trigger_error('direct call not allowed', E_USER_ERROR);

  /**
   * Build associative array of months used in dropdown menus
   *
   * @return array associative array of month names keyed by month number
   */
  function get_months() {
    $months = array();
    for ($i = 1; $i < 13; $i++) {
      $months[sprintf('%02d', $i)] = strftime('%B',mktime(0,0,0,$i,1,2000));
    }
    return $months;
  }

  /**
   * Build associative array of $num_years years used in dropdown menus
   *
   * @param int number of year entries to generate; default is 10
   * @return array associative array of years keyed by short year ('08', '09', etc)
   */
  function get_years($num_years = 10) {
    $today = getdate();
    $years = array();
    for ($i = $today['year']; $i < $today['year'] + $num_years; $i++) {
      $years[strftime('%y',mktime(0,0,0,1,1,$i))] = strftime('%Y',mktime(0,0,0,1,1,$i));
    }
    return $years;
  }

  /**
   * Build associative array of state names used in dropdown menus
   *
   * @return array associative array of state names keyed by USPS state abbreviations
   */
  function get_states() {
    return array(
      '  ' => 'Select State',
      'AL' => 'Alabama',
      'AK' => 'Alaska',
      'AZ' => 'Arizona',
      'AR' => 'Arkansas',
      'CA' => 'California',
      'CO' => 'Colorado',
      'CT' => 'Connecticut',
      'DE' => 'Delaware',
      'DC' => 'Dist. of Columbia',
      'FL' => 'Florida',
      'GA' => 'Georgia',
      'GU' => 'Guam',
      'HI' => 'Hawaii',
      'ID' => 'Idaho',
      'IL' => 'Illinois',
      'IN' => 'Indiana',
      'IA' => 'Iowa',
      'KS' => 'Kansas',
      'KY' => 'Kentucky',
      'LA' => 'Louisiana',
      'ME' => 'Maine',
      'MD' => 'Maryland',
      'MA' => 'Massachusetts',
      'MI' => 'Michigan',
      'MN' => 'Minnesota',
      'MS' => 'Mississippi',
      'MO' => 'Missouri',
      'MT' => 'Montana',
      'NE' => 'Nebraska',
      'NV' => 'Nevada',
      'NH' => 'New Hampshire',
      'NJ' => 'New Jersey',
      'NM' => 'New Mexico',
      'NY' => 'New York',
      'NC' => 'North Carolina',
      'ND' => 'North Dakota',
      'OH' => 'Ohio',
      'OK' => 'Oklahoma',
      'OR' => 'Oregon',
      'PA' => 'Pennsylvania',
      'PR' => 'Puerto Rico',
      'RI' => 'Rhode Island',
      'SC' => 'South Carolina',
      'SD' => 'South Dakota',
      'TN' => 'Tennessee',
      'TX' => 'Texas',
      'UT' => 'Utah',
      'VT' => 'Vermont',
      'VA' => 'Virginia',
      'VI' => 'Virgin Islands',
      'WA' => 'Washington',
      'WV' => 'West Virginia',
      'WI' => 'Wisconsin',
      'WY' => 'Wyoming');
  }

  /**
   * Get file name extension from filename
   *
   * @param string file name
   * @return string extension
   */
  function get_extension($filename) {
    return (count($tmp = explode('.', basename($filename))) > 1) ? strtolower(array_pop($tmp)) : '';
  }  // end get_extension()

?>