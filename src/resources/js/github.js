$.getJSON('https://api.github.com/users/shakabra/repos?callback=?', 
    function(data) {
        var repoHTML = '';
        $.each(data, function(i, repo) {
            repoHTML += '<tr>';
            repoHTML += '<td><a class="grey-text text-darken-4" href="'+data.html_url+'>'+data.name+'</a>'+'</td>';
            repoHTML += '<td>' + data.language + '</td>';
            repoHTML += '<td class="truncate">' + data.description + '</td>';
            repoHTML += '</tr>';
        });// End each
        $.('.github').append(repoHTML);
});
