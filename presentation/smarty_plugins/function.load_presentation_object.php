<?php
// Plug-in functions inside plug-in files must be named: smarty_type_name
function smarty_function_load_presentation_object($params, $smarty)
{ 
  require_once PRESENTATION_SOURCE_DIR . $params['filename'] . '.php';
  
  $filename = explode("/", $params['filename']);
  $filename = end($filename);

  $className = str_replace(' ', '',
                           ucfirst(str_replace('_', ' ',
                                               $filename)));

  // Create presentation object
  $obj = new $className();

  if (method_exists($obj, 'init'))
  {
    $obj->init();
  }

  // Assign template variable
  $smarty->assign($params['assign'], $obj);
}
?>
