<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
    <link rel="stylesheet" href="/main.css"/>
    <meta content="BPC STEM SOCIETY" property="og:title" />
    <meta content="The official website for the BPC STEM SOCIETY. Enjoy your stay!" property="og:description" />
    <meta content="https://google.com" property="og:url" />
    <meta content="https://embed.com/embedimage.png" property="og:image" />
    <meta content="#43B581" data-react-helmet="true" name="theme-color" />
    <title>BPC STEM SOCIETY</title>
  </head>
  <body class="bg-color-1 mv0">
  <div class="rainbow-bg w-100 h1"></div>
  <header class="h-100 w-100 ph4 fl pv0 mv0">
    <a href="/"><h1 class="tc TopBarTitle fredoka color-5 f1 fl">BPC STEM SOCIETY</h1></a>
    <a href="/articles"><div class="TopBarButton h-100 pa4 mw-20 bg-color-2 fr mh1 br-100 br--bottom">
      <h2 class="tab f2 fredoka pa2 tc color-5">ARTICLES</h2>
    </div></a>
    <a href="/projects"><div class="TopBarButton h-100 pa4 mw-20 bg-color-2 fr mh1 br-100 br--bottom">
      <h2 class="tab f2 fredoka pa2 tc color-5">PROJECTS</h2>
    </div></a>
    <a href="/contact"><div class="TopBarButton h-100 pa4 mw-20 bg-color-2 fr mh1 br-100 br--bottom">
      <h2 class="tab f2 fredoka pa2 tc color-5">CONTACT</h2>
    </div></a>
  </header>

<?php

function DisplayFile($filedir) {
  $path = $filedir;
  $fileContent = file_get_contents($path);
  echo $fileContent;
}

$directory = explode("/", str_replace("/index.php", '', $_SERVER['PHP_SELF']));

switch ($directory[1]) {
  case "contact":
    DisplayFile("RawHTML/contact.html");
    break;
  case "projects":
    DisplayFile("RawHTML/projects.html");
    break;
  case "articles":
    DisplayFile("RawHTML/articles.html");
    break;
  case "a":
    $articlename = preg_replace('/[^a-z0-9]/i', '', $directory[2]);
    if (strlen($articlename) > 32) {
      break;
    }
    if (!file_exists("RawHTML/Articles/" . $articlename . ".html")){
      break;
    }
    DisplayFile("RawHTML/Articles/" . $articlename . ".html");
    break;
  default:
    DisplayFile("RawHTML/mainpage.html");
    break;
}

?>

  <footer class="bt bw2 b--purple fr">
    <h3 class="arial color-5 pa5 pt4"><a class="fl" href="https://github.com/Jm15itch/BPC-STEM-WEBSITE">Want to make this website better? Find our github here: <img class="w1" alt="github logo" src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png"></img></a><a class="fr" href="/">Logos</a></h3>
  </footer>
  </body>
</html>
