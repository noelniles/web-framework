<?php

$debug = true;

if($debug) {
    error_reporting(-1);
    ini_set('display_errors', 'On');
}

function tsl($path)
{
    if (substr($path, strlen($path) - 1) != '/') {
        $path .= '/';
    }
}
function get_root_path()
{
    $pos = strrpos(dirname(__FILE__), DIRECTORY_SEPARATOR . 'web-framework/src');
    $adm = substr(dirname(__FILE__), 0, $pos);
    $pos2 = strrpos($adm, DIRECTORY_SEPARATOR);
    return tsl(substr(__FILE__, 0, $pos2));
}

/**
 * Define some constants
 *
 * */
define('ROOT', get_root_path());
define('CSS', ROOT . 'src/resources/css/');
define('JS', ROOT . 'src/resources/js/');
define('PAGES', ROOT . 'src/pages/');
function get_title() {
    if (isset($_GET['page'])) {
        $page  = $_GET['page'];
        $title = preg_replace( '/[^a-z0-9.]/i', ' ' , $page);
    } else {
        $title = "Noel Niles";
    } 
    if (isset($title) && !empty($title)) {
        print $title;
    }else print ('Noel Niles | Home');

}
function get_page_content()
{
    if (isset($_GET['page'])) {
        $thisPage = htmlspecialchars($_GET['page']);
    } else {
        $thisPage = 'home';
    }
    switch ($thisPage) {
        case "Projects";
            $includeFile = PAGES . "posts/Projects.php";
            break;
        case "Github";
            $includeFile = PAGES . "posts/Github.php";
            break;
        case "Experiments";
            $includeFile = PAGES . "posts/Experiments.php";
            break;
        case "Resume";
            $includeFile = PAGES . "resume/Resume.php";
            break;
        default:
            $includeFile = PAGES . 'Home.php';
            break;
    }
    require_once($includeFile);
}

/**
 * @param $dir directory where the html files are stored
 */
function display_post_summary($dir)
{
    if ($handle = opendir($dir)) {
        while (false != ($entry = readdir($handle))) {
            if (!preg_match("/\.(swp|jpg|png|java|c|py)*$/i", $entry, $matches)) { 
            //Don't grab the root or parent directory files
                if ($entry != "." && $entry != "..") {
                    $content = file_get_contents("$dir/" . "$entry");
                    if ($content === false) {
                        echo "<h1>Something is wrong!</h1>";
                    } else {
                        echo $content;
                    }
                }
            }
        }
    }
}
