<!DOCTYPE html>
<html lang="en">
<head>
<meta name="msvalidate.01" content="1D36512A9BDA241273B640F61C6222BF" />
<title>
	<?php echo $title; ?>
</title>
<meta charset="utf-8">
<meta name="description" content="<?php if(isset($description)) echo $description;?>">
<meta name="author" content="<?php if(isset($author)) echo $author;?>">
<meta name="keywords" content="<?php if(isset($keywords)) echo $keywords;?>">
<meta name="viewport" content="'width=device-width">
<?php if(isset($og_title)): ?>
<meta property="og:site_name" content="<?php echo $og_site_name?>" />
<meta property="og:title" content="<?php echo $og_title?>" />
<meta property="og:type" content="<?php echo $og_type?>" />
<meta property="og:url" content="<?php echo $og_url?>"/>
<meta property="og:description" content="<?php echo $og_description?>"/>
<meta property="og:image" content="<?php echo $og_image_c; ?>"/>
<meta property="og:image:type" content="<?php echo $og_image_type?>"/>
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="600">
<meta property="fb:app_id" content="2045961785629891">
<?php endif ?>
<?php if(isset($og_title)): ?>
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="<?php echo $og_site_name?>">
<meta name="twitter:title" content="<?php echo $og_title?>">
<meta name="twitter:description" content="<?php echo $og_description?>">
<meta name="twitter:image" content="<?php echo $og_image_c?>">
<meta name="twitter:url" content="<?php echo $og_url?>">	
<?php endif;?>
<?php if(isset($og_title)): ?>
<meta itemprop="name" content="<?php echo $og_title?>">
<meta itemprop="description" content="<?php echo $og_description;?>">
<meta itemprop="image" content="<?php echo $og_image_c;?>">	
<?php endif;?>
<?php if(isset($og_image)): ?>
<meta property="og:image" content="<?php echo $og_image?>"/>
<?php endif;?>