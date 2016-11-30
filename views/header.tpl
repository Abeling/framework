<!DOCTYPE html>
<div id="header">
  <h1><a href="?action=home">{$result.0.h1}</a></h1>
  <h2>{$result.0.h2}</h2>
  <nav>
    <ul>
      <li>{if $pageding == "home"}
            <a id="home" href="?action=home" style="font-weight:bold;">HOME</a>
          {elseif empty($pageding)}
            <a id="home" href="?action=home" style="font-weight:bold;">HOME</a>
          {else}
            <a id="home" href="?action=home">HOME</a>
          {/if}</li>

      <li style="float:right">{if $pageding == "admin"}
            <a id="last" href="?action=admin&cms_action=adminhome" style="font-weight:bold;">ADMIN</a>
          {else}
            <a id="last" href="?action=admin&cms_action=adminhome">ADMIN</a>
          {/if}</li>
    </ul>
  </nav>



</div>
