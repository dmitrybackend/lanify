<?php

  $request = str_replace('/~dsakki/lanify','',$_SERVER['REQUEST_URI']);
  $request = strtok($request, '?');

  
  if ($request === '/' || $request === '/tapahtumat') {
    echo '<h1>Kaikki tapahtumat</h1>';
  } else if ($request === '/tapahtuma') {
    echo '<h1>Yksittäisen tapahtuman tiedot</h1>';
  } else {
    echo '<h1>Pyydettyä sivua ei löytynyt :(</h1>';
  }

?> 