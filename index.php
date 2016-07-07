<?php
/**
 * This is my feckless expression of exasperation.
 *
 * ABOLISH. THE. POLICE.
 * DESTROY WHITENESS.
 * END WHITE SUPREMACY.
 *
 * I'm no artist (obviously), but I do code. I'm here for collaborations on any
 * #ACAB-themed projects. Contact info at https://maymay.net/
 *
 * If you're good with Teh Graphics, please feel free to improve this.
 * Your pull requests/edits/suggestions are heartily appreciated.
 */

date_default_timezone_set('America/New_York');

/**
 * Fetches the number of murders by police from the Washington Post's CSV dataset.
 *
 * @return int
 */
function number_of_police_killings () {
    $url = 'https://cdn.rawgit.com/washingtonpost/data-police-shootings/master/fatal-police-shootings-data.csv';
    return count(file($url));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>Have we disarmed the police?</title>
    <meta name="rating" content="ALL" />
    <meta name="robots" content="index,follow" />
<style>
    html, body {
        border-width: 0;
        margin: 0;
        padding: 0;
        color: #FFF;
        text-align: center;
    }
    body {
        background: #000 url("police-violence-is-not-an-accident-all-cops-are-bastards.jpg") no-repeat fixed center;
        background-size: cover;
    }
    p {
        margin-top: 0;
        padding: 0;
    }
    #page-wrapper {
        height: calc(100vh - 4em);
        padding-top: 4em;
        background: rgba(170, 170, 170, 0.5);
    }
    #question {
        font-size: 16pt;
    }
    #answer {
        font: 42pt/2em serif;
        white-space: nowrap;
        color: #000;
    }
    #count {
        font: 32pt sans-serif;
        font-weight: bold;
        color: red;
    }
    #supplementary cite {
        font-size: smaller;
    }
</style>
</head>
<body>
    <div id="page-wrapper">
        <div id="question">
            <p>Have we disarmed the police yet?</p>
        </div>
        <div id="answer">
            <p>No.</p>
        </div>
        <div id="supplementary">
            <p>Amerikkkan police officers have killed <span id="count"><?php print (int) number_of_police_killings();?></span> people between January 1, 2015 and <?php print date('F j, Y');?>.</p>
            <cite>Source: <a href="https://github.com/washingtonpost/data-police-shootings/#readme">Washington Post</a></cite>
        </div>
        <div id="colophon">
            <p><a href="https://github.com/meitar/have-we-disarmed-the-police-yet">code</a></p>
        </div>
    </div>
</body>
</html>
