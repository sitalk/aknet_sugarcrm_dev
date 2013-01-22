<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-12-05 15:02:20
$dictionary["Aknet_Street"]["fields"]["aknet_house_aknet_street"] = array (
  'name' => 'aknet_house_aknet_street',
  'type' => 'link',
  'relationship' => 'aknet_house_aknet_street',
  'source' => 'non-db',
  'vname' => 'LBL_AKNET_HOUSE_AKNET_STREET_FROM_AKNET_HOUSE_TITLE',
  'id_name' => 'aknet_house_aknet_streetaknet_house_ida',
);
$dictionary["Aknet_Street"]["fields"]["aknet_house_aknet_street_name"] = array (
  'name' => 'aknet_house_aknet_street_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AKNET_HOUSE_AKNET_STREET_FROM_AKNET_HOUSE_TITLE',
  'save' => true,
  'id_name' => 'aknet_house_aknet_streetaknet_house_ida',
  'link' => 'aknet_house_aknet_street',
  'table' => 'aknet_house',
  'module' => 'Aknet_House',
  'rname' => 'name',
);
$dictionary["Aknet_Street"]["fields"]["aknet_house_aknet_streetaknet_house_ida"] = array (
  'name' => 'aknet_house_aknet_streetaknet_house_ida',
  'type' => 'link',
  'relationship' => 'aknet_house_aknet_street',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AKNET_HOUSE_AKNET_STREET_FROM_AKNET_STREET_TITLE',
);

?>