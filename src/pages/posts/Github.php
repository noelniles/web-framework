<table class="bordered hoverable">
  <thead>
  <tr>
      <th data-field="repo-name">Repo Name</th>
      <th data-field="language">Language</th>
      <th data-field="repo-description">Description</th>
  </tr>
  </thead>

<tbody class="github">
</tbody>
</table>

<script>
$.getJSON('https://api.github.com/users/shakabra/repos?callback=?', 
function(d) {
  var data = d.data;
  var repoHTML = '';
  $.each(data, function(i, repo) {
    repoHTML += '<tr>';
    repoHTML += '<td><a href="'+repo.html_url+'">'+repo.name+'</a>'+'</td>';
    repoHTML += '<td>'+repo.language+'</td>';
    repoHTML += '<td>' + repo.description + '</td>';
    repoHTML += '</tr>';
    });// End each
    $('.github').append(repoHTML);
});
</script>
