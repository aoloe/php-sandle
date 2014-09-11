<!doctype html>
<html lang="<?= isset($language) ? $language : 'en' ?>">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<title><?= isset($title) ? $title.' - ' : '' ?><?= isset($site_title) ? $site_title : ''?></title>

<?php if (isset($favicon)) : ?>
<link rel="shortcut icon" href="<?= $favicon ?>" />
<?php endif;
?>
<?php if (isset($fonts)) : foreach ($fonts as $value) : ?>
<link rel="stylesheet" href="<?= $value ?>" type="text/css" />
<?php endforeach;
endif;
?>

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<?php if (isset($css)) : foreach ($css as $value) : ?>
<link rel="stylesheet" href="<?= is_array($value) ? $value['href'] : $value ?>" type="text/css" media="<?= is_array($value) && array_key_exists('media', $value) ? $value['media'] : 'all' ?>" />
<?php endforeach;
endif;
?>

<?php if (isset($js)) : foreach ($js as $value) : ?>
<script type="text/javascript" src="<?= $value ?>"></script>
<?php endforeach;
endif;
?>

</head>
<body>
<div id="header">
<?php if (isset($header_navigation)) : ?>
<?= $header_navigation ?>
<?php endif; ?>
<?php if (isset($header_logo)) : ?>
<p id="header_logo"><a href="/"><img src="<?= $path ?><?= $header_logo ?>"></a></p>
<?php endif; ?>
<?php if (isset($site_title) || isset($header_title)) : ?>
<p id="header_title"><a href="/"><?= isset($header_title) ? $header_title : $site_title ?></a></p>
<?php endif; ?>
</div>

<div id ="navigation">
<?php if (isset($navigation)) :?>
<?= $navigation ?>
<?php endif; ?>
</div>

<div id="content">
<?php if (isset($content)) : ?>
<?= $content ?>
<?php endif; ?>
</div>

</body>
</html>
