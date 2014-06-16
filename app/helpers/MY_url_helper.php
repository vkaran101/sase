<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function active_nav($link)
{
  $uri = current_url();

  if (strpos($uri,$link) !== false)
  {
    echo 'active';
  }
  else if ($link === 'home' && $uri === base_url())
  {
    echo 'active';
  }
  else
  {
    echo '';
  }
}

