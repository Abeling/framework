<!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primaryadmin">
        <table id="personaltable">
            <tr id="hds">
              <th>ID</th>
              <th>Title</th>
              <th>Content</th>
              <th>Date</th>
              <th colspan="2">Options</th>
            </tr>
          {foreach from=$result item=oneItem}
            <tr>
              <td><p>{$oneItem.id}</p></td>
              <td><p>{$oneItem.title}</p></td>
              <td><p>{$oneItem.content|truncate:75:"...":true}</p></td>
              <td><p>{$oneItem.date_created}</p></td>
              <td><p><a href="?page=admin&cms_action=editnewsarticles&id={$oneItem.id}">edit</a></p></td>
              <td><p><a href="?page=admin&cms_action=deletenewsarticles&id={$oneItem.id}">delete</a></p></td>
            </tr>
          {/foreach}
        </table>
        <p id=insert><a href=?page=admin&cms_action=insertnewsarticles><img src="content/img/insertButton.png"></img></a></p>
      </div>
