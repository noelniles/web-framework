<?php require_once 'head.php'; ?>
<body>
<div class="container">
    <div class="row">
    <div class="col s2">
    <ul id="nav-mobile" class="side-nav fixed">
        <li><a class="active" href="Home">Home</a></li>
        <li><a href="Projects">Projects</a></li>
        <li class=""><a href="Github">Github</a></li>
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
<script>
$(".side-nav li a").on('click', function(){
  $(".side-nav li a").removeClass("active");
  $(this).addClass("active");
});
</script>
<?php require_once 'foot.php'; ?>
