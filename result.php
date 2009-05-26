<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Coin Toss :: Waking Ideas</title>
        <meta name="Robots" content="index,all" />
        <meta name="Keywords" content="coin, toss, waking ideas, probability" />
        <meta name="Description" content="Waking Ideas 10,000 trial coin toss" />
        <?php if (stristr($_SERVER['HTTP_USER_AGENT'], "iPhone")) { ?>
		<meta name="viewport" content="width=320; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;"/>
		<link rel="stylesheet" href="iphone.css" type="text/css" media="screen" />
		<?php } else { ?>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<?php } ?>
    </head>


    <body>
        <div id="wrapper">
			<?php include 'toss.php'; ?>
            <div id="result" <?php if($tie) { ?>class="tie"<?php } ?>>
            	<?php echo $result; ?>
            </div>
            <span class="button"><a href="/">Return.</a> | <a href="result.php">Flip again.</a></span>
            <div id="resultCount">
                <span class="heads"><span class="text">Heads:</span> <?=$heads ?></span>
                <span class="tails"><span class="text">Tails:</span> <?=$tails ?></span>
            </span>
            
        </div>
    </body>
</html>