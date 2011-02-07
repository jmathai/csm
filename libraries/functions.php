<?php
function getAsset($type, $files)
{
  $uri    = sprintf('/%s/compress-%s.%s?files=%s', $type, getConfig()->get('assets')->$type, $type, implode(',', $files));
  if(getConfig()->get('assets')->minify)
  {
    $hash   = md5($uri);
    $relativePath = "/{$type}/static/{$hash}.{$type}";
    if(file_exists(getConfig()->get('paths')->docroot . $relativePath))
    {
      if(getConfig()->get('site')->mode == 'prod')
        $uri = getConfig()->get('urls')->cdn.$relativePath;
      else
        $uri = $relativePath;
    }
  }

  return $uri;
}

function img($src)
{
  return getConfig()->get('urls')->cdn . $src;
}

function validCacheInclude($parent, $child, $ext)
{
  $extLen = -1 * (int)strlen($ext);
  return substr($child, $extLen) == $ext;
}
