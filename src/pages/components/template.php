<?php require_once 'head.php'; ?>
<body>
<div class="container">
  <ul id="nav-mobile" class="side-nav fixed">
    <li><a href="home">Home</a></li>
    <li><a href="projects">Projects</a></li>
    <li><a href="github">Github</a></li>
    <li><a href="experiments">Experiments</a></li>
    <li><a href="resume">Resume</a></li>
  </ul>
<main>
<div class="section no-pad-bot">
<div class="container">
<div class="row center">
<div class="col s12 m8 offset-m2">
<?php get_page_content(); ?>
</div>
</div>
</div>
</div>
</main>
<?php require_once 'foot.php'; ?>
</div>
