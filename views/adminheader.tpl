<!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primaryadmin">
        <h1>Admin Home</h1>
        <div id="header">
          <nav>
            <ul>
              <li>{if $pagedinges == "showpersonal"}
                    <a id="home" href="?page=admin&cms_action=showpersonal" style="font-weight:bold;">PERSONAL</a>
                  {elseif empty($pageding)}
                    <a id="home" href="?page=admin&cms_action=showpersonal" style="font-weight:bold;">PERSONAL</a>
                  {else}
                    <a id="home" href="?page=admin&cms_action=showpersonal">PERSONAL</a>
                  {/if}</li>

              <li>{if $pagedinges == "showevents"}
                    <a href="?page=admin&cms_action=showevents" style="font-weight:bold;">EVENTS</a>
                  {else}
                    <a href="?page=admin&cms_action=showevents">EVENTS</a>
                  {/if}</li>

              <li>{if $pagedinges == "showdjs"}
                    <a href="?page=admin&cms_action=showdjs" style="font-weight:bold;">DJ's</a>
                  {else}
                    <a href="?page=admin&cms_action=showdjs">DJ's</a>
                  {/if}</li>

              <li>{if $pagedinges == "shownewsarticles"}
                    <a href="?page=admin&cms_action=shownewsarticles" style="font-weight:bold;">NEWS</a>
                  {else}
                      <a href="?page=admin&cms_action=shownewsarticles">NEWS</a>
                  {/if}</li>

              <li style="float:right"><a id="last" href="?page=home">EXIT</a></li>
            </ul>
          </nav>
        </div>
      </div>
