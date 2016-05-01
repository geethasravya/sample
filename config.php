<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle_2.7_lms';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://localhost/sample';
$CFG->dataroot  = 'D:\Workspace\moodledata';
$CFG->admin     = 'admin';

$CFG->phpunit_prefix = 'phpu_';
$CFG->phpunit_dataroot = 'D:\Workspace\moodletestdata';

$CFG->directorypermissions = 0777;

