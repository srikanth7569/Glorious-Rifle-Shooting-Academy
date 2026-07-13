<meta property="fb:app_id" content="971732876616063"/>

<?php if (!empty($courseDetail)) {
    ?>


    <meta property="og:url"
          content="<?php echo current_url() ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?php echo $courseDetail->title ?>"/>
    <meta property="og:description" content="<?php echo $courseDetail->description ?>"/>
    <meta property="og:image"
          content="<?php echo base_url() . $courseDetail->image ?>"/>


<?php } ?>


<?php if (!empty($blogDetail)) {
    ?>

    <meta property="og:url"
          content="<?php echo current_url() ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?php echo $blogDetail->title ?>"/>
    <meta property="og:description" content="<?php echo $blogDetail->description ?>"/>
    <meta property="og:image"
          content="<?php echo $blogDetail->img ?>"/>

<?php } ?>


<?php if (!empty($newsDetail)) {
    ?>

    <meta property="og:url"
          content="<?php echo current_url() ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?php echo $newsDetail->title ?>"/>
    <meta property="og:description" content="<?php echo $newsDetail->description ?>"/>
    <meta property="og:image"
          content="<?php echo $newsDetail->img ?>"/>

<?php } ?>

<?php if (!empty($eventDetail)) {
    ?>

    <meta property="og:url"
          content="<?php echo current_url() ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?php echo $eventDetail->title ?>"/>
    <meta property="og:description" content="<?php echo $eventDetail->description ?>"/>
    <meta property="og:image"
          content="<?php echo $eventDetail->image ?>"/>

<?php } ?>
