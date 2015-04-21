<?php require_once 'head.php'; ?>
<body>
<div class="container">
    <div class="row">
    <div class="col s2">
    <ul id="nav-mobile" class="side-nav fixed">
        <li><a href="Home">Home</a></li>
        <li><a href="Projects">Projects</a></li>
        <li class="active"><a href="Github">Github</a></li>
        <li><a href="Experiments">Experiments</a></li>
        <li><a href="Resume">Resume</a></li>
    </ul>
    </div>
    <div class="row">
        <div class="col s9 offset-s2">
            <?php get_page_content(); ?>
        </div>
    </div>
</div>
<?php require_once 'foot.php'; ?>
