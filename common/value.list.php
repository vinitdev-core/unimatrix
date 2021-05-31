<?php

if (!defined('OK_LOADME')) {
    die('o o p s !');
}

// ----------------
// Array of Payment Options
// ----------------
$avalpaymentopt_array = array(
    'creditcard' => 'Credit Card',
    'bitcoin' => 'Bitcoin',
    'paypal' => 'Paypal',
    'bank' => 'Bank Transfer',
    'cash' => 'Cash',
    'system' => 'System',
    'other' => 'Other'
);

// ----------------
// Array of Withdraw Options
// ----------------
$avalwithdrawgate_array = array(
    'manualpayipn' => 'manualpayname',
);

// ----------------
// Array of Admin Pages
// ----------------
$avaladminpage_array = array(
    'dashboard' => 1,
    'userlist' => 1,
    'getuser' => 1,
    'historylist' => 1,
    'withdrawlist' => 1,
    'genealogylist' => 1,
    'digifile' => 1,
    'digicontent' => 1,
    'getstart' => 1,
    'termscon' => 1,
    'notifylist' => 1,
    'generalcfg' => 1,
    'payplancfg' => 1,
    'paymentopt' => 1,
    'languagelist' => 1,
    'updates' => 1
);

// ----------------
// Array of Member Pages
// ----------------
$avalmemberpage_array = array(
    'dashboard' => 1,
    'getstarted' => 1,
    'planreg' => 1,
    'planpay' => 1,
    'userlist' => 1,
    'getuser' => 1,
    'historylist' => 1,
    'withdrawreq' => 1,
    'genealogyview' => 1,
    'digiload' => 1,
    'digiview' => 1,
    'accountcfg' => 1,
    'feedback' => 1
);

// ----------------
// Array of Country
// ----------------
$country_array = array(
    'AF' => 'AFGHANISTAN',
    'AL' => 'ALBANIA',
    'DZ' => 'ALGERIA',
    'AS' => 'AMERICAN SAMOA',
    'AD' => 'ANDORRA',
    'AO' => 'ANGOLA',
    'AR' => 'ARGENTINA',
    'AM' => 'ARMENIA',
    'AW' => 'ARUBA',
    'AU' => 'AUSTRALIA',
    'AT' => 'AUSTRIA',
    'AZ' => 'AZERBAIJAN',
    'BS' => 'BAHAMAS',
    'BH' => 'BAHRAIN',
    'BD' => 'BANGLADESH',
    'BB' => 'BARBADOS',
    'BY' => 'BELARUS',
    'BE' => 'BELGIUM',
    'BO' => 'BOLIVIA',
    'BA' => 'BOSNIA AND HERZEGOVINA',
    'BW' => 'BOTSWANA',
    'BR' => 'BRAZIL',
    'BN' => 'BRUNEI DARUSSALAM',
    'BG' => 'BULGARIA',
    'BI' => 'BURUNDI',
    'KH' => 'CAMBODIA',
    'CM' => 'CAMEROON',
    'CA' => 'CANADA',
    'KY' => 'CAYMAN ISLANDS',
    'CF' => 'CENTRAL AFRICAN REPUBLIC',
    'CL' => 'CHILE',
    'CC' => 'COCOS KEELING ISLANDS',
    'CO' => 'COLOMBIA',
    'KM' => 'COMOROS',
    'CG' => 'CONGO',
    'CK' => 'COOK ISLANDS',
    'CR' => 'COSTA RICA',
    'CI' => 'COTE D IVOIRE',
    'HR' => 'CROATIA',
    'CU' => 'CUBA',
    'CY' => 'CYPRUS',
    'CZ' => 'CZECH REPUBLIC',
    'DK' => 'DENMARK',
    'DM' => 'DOMINICA',
    'EC' => 'ECUADOR',
    'EG' => 'EGYPT',
    'SV' => 'EL SALVADOR',
    'EE' => 'ESTONIA',
    'ET' => 'ETHIOPIA',
    'FJ' => 'FIJI',
    'FI' => 'FINLAND',
    'FR' => 'FRANCE',
    'GA' => 'GABON',
    'GM' => 'GAMBIA',
    'GE' => 'GEORGIA',
    'DE' => 'GERMANY',
    'GH' => 'GHANA',
    'GI' => 'GIBRALTAR',
    'GR' => 'GREECE',
    'GT' => 'GUATEMALA',
    'HT' => 'HAITI',
    'HK' => 'HONGKONG',
    'HU' => 'HUNGARY',
    'IS' => 'ICELAND',
    'IN' => 'INDIA',
    'ID' => 'INDONESIA',
    'IR' => 'IRAN',
    'IQ' => 'IRAQ',
    'IE' => 'IRELAND',
    'IT' => 'ITALY',
    'JM' => 'JAMAICA',
    'JP' => 'JAPAN',
    'JO' => 'JORDAN',
    'KZ' => 'KAZAKSTAN',
    'KE' => 'KENYA',
    'KP' => 'KOREA NORTH',
    'KR' => 'KOREA SOUTH',
    'KW' => 'KUWAIT',
    'KG' => 'KYRGYZSTAN',
    'LV' => 'LATVIA',
    'LB' => 'LEBANON',
    'LR' => 'LIBERIA',
    'LY' => 'LIBYA',
    'LT' => 'LITHUANIA',
    'LU' => 'LUXEMBOURG',
    'MO' => 'MACAU',
    'MK' => 'MACEDONIA',
    'MG' => 'MADAGASCAR',
    'MW' => 'MALAWI',
    'MY' => 'MALAYSIA',
    'MV' => 'MALDIVES',
    'MX' => 'MEXICO',
    'MD' => 'MOLDOVA',
    'MC' => 'MONACO',
    'MA' => 'MOROCCO',
    'MZ' => 'MOZAMBIQUE',
    'NA' => 'NAMIBIA',
    'NP' => 'NEPAL',
    'NL' => 'NETHERLANDS',
    'NZ' => 'NEW ZEALAND',
    'NI' => 'NICARAGUA',
    'NG' => 'NIGERIA',
    'NO' => 'NORWAY',
    'OM' => 'OMAN',
    'PK' => 'PAKISTAN',
    'PS' => 'PALESTINE',
    'PA' => 'PANAMA',
    'PG' => 'PAPUA NEW GUINEA',
    'PY' => 'PARAGUAY',
    'PE' => 'PERU',
    'PH' => 'PHILIPPINES',
    'PL' => 'POLAND',
    'PT' => 'PORTUGAL',
    'PR' => 'PUERTO RICO',
    'QA' => 'QATAR',
    'RO' => 'ROMANIA',
    'RU' => 'RUSSIAN FEDERATION',
    'RW' => 'RWANDA',
    'WS' => 'SAMOA',
    'SA' => 'SAUDI ARABIA',
    'SN' => 'SENEGAL',
    'SC' => 'SEYCHELLES',
    'SL' => 'SIERRA LEONE',
    'SG' => 'SINGAPORE',
    'SK' => 'SLOVAKIA',
    'SI' => 'SLOVENIA',
    'SB' => 'SOLOMON ISLANDS',
    'SO' => 'SOMALIA',
    'ZA' => 'SOUTH AFRICA',
    'GS' => 'SOUTH GEORGIA',
    'ES' => 'SPAIN',
    'LK' => 'SRI LANKA',
    'SD' => 'SUDAN',
    'SR' => 'SURINAME',
    'SZ' => 'SWAZILAND',
    'SE' => 'SWEDEN',
    'CH' => 'SWITZERLAND',
    'SY' => 'SYRIA',
    'TW' => 'TAIWAN',
    'TJ' => 'TAJIKISTAN',
    'TZ' => 'TANZANIA',
    'TH' => 'THAILAND',
    'TG' => 'TOGO',
    'TK' => 'TOKELAU',
    'TO' => 'TONGA',
    'TT' => 'TRINIDAD AND TOBAGO',
    'TN' => 'TUNISIA',
    'TR' => 'TURKEY',
    'TM' => 'TURKMENISTAN',
    'TV' => 'TUVALU',
    'UG' => 'UGANDA',
    'UA' => 'UKRAINE',
    'AE' => 'UNITED ARAB EMIRATES',
    'GB' => 'UNITED KINGDOM',
    'US' => 'UNITED STATES',
    'UY' => 'URUGUAY',
    'UZ' => 'UZBEKISTAN',
    'VU' => 'VANUATU',
    'VE' => 'VENEZUELA',
    'VN' => 'VIETNAM',
    'YE' => 'YEMEN',
    'YU' => 'YUGOSLAVIA',
    'ZM' => 'ZAMBIA',
    'ZW' => 'ZIMBABWE',
    '' => 'OTHER'
);

// ----------------------------
// Array of Website Category
// ----------------------------
$webcategory_array = array(
    'Business General' => 'Business General',
    'Affiliate and Reseller Programs' => 'Affiliate and Reseller Programs',
    'Domain and Hosting' => 'Domain and Hosting',
    'Business and Finance' => 'Business and Finance',
    'Directories and Search Engines' => 'Directories and Search Engines',
    'MLM Related Programs' => 'MLM Related Programs',
    'Career and Education' => 'Career and Education',
    'Marketing and Advertising' => 'Marketing and Advertising',
    'Computers and Technology' => 'Computers and Technology',
    'Health and Sports' => 'Health and Sports',
    'Shopping and Merchants' => 'Shopping and Merchants',
    'Home and Lifestyle' => 'Home and Lifestyle',
    'Entertainment' => 'Entertainment',
    'Charity and Donations' => 'Charity and Donations',
    'Other' => 'Other'
);