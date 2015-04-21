<div id="my-github-projects"></div>
<script src="<?php echo JS . 'github.js'; ?>"></script>
<table>
    <thead>
    <tr>
        <th data-field="id">Repo Name</th>
        <th data-field="name">Language</th>
        <th data-field="price">Description</th>
    </tr>
    </thead>
<script type="text/javascript">
    $(function() {
        $("#my-github-projects").loadRepositories("shakabra");
    });
</script>
