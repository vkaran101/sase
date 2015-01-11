<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function active_nav($link)
{
  $uri = current_url();
  if (strpos($uri, $link) !== false)
  {
    echo 'active';
  }
  elseif ($link === 'home' && $uri === base_url())
  {
    echo 'active';
  }
  else
  {
    echo '';
  }
}

function admin_nav($link)
{
  $uri = current_url();
  if (strpos($uri, $link) !== false)
  {
    echo 'active';
  }
  elseif ($link === 'home')
  {
    if ($uri === base_url().'admin' || $uri === base_url().'admin/')
    {
      echo 'active';
    }
  }
  else
  {
    echo '';
  }
}
