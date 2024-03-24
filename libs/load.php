<?php
function load_template($name)
{
  $currentScript = $_SERVER['SCRIPT_NAME'];
  $pathParts = explode('/', $currentScript);
  $projectName = $pathParts[1];
  include $_SERVER['DOCUMENT_ROOT'] . "/$projectName/" . "_templates/_$name.php"; //not consistant.
}
