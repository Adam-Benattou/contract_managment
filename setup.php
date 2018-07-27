
<?php

// ----------------------------------------------------------------------
// Original Author of file: Adam Benattou   
// Purpose of file: Managment of time spent on contract on glpi
// ----------------------------------------------------------------------
function plugin_version_contract_managment() {
   return [
      'name'           => 'Plugin contract_managment',
      'version'        => '1.0.0',
      'author'         => 'Adam Benattou',
      'license'        => 'GPLv2+',
      'homepage'       => 'https://github.com/pluginsGLPI/example',
      'requirements'   => [
         'glpi' => [
            'min' => '9.2.4',
            //'dev' => true
         ]
      ]
   ];
}
function plugin_example_check_prerequisites() {

   $version = rtrim(GLPI_VERSION, '-dev');
   if (version_compare($version, '9.2.4')< 0) {
      echo "This plugin requires at least GLPI 9.2.4";
      return false;
   }

   return true;
}