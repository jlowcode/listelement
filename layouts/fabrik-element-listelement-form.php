<?php
defined('JPATH_BASE') or die;
$d = $displayData;
?>

<style>
    #iframeListForm {
        margin-top: 25px !important;
        width: 100% !important;
        border: 0 solid;
        min-height: 800px;
    }
    
    .plg-listelement label{
        display: none;
    }
</style>

<iframe id="iframeListForm" scrolling="yes" src="<?php echo $d->url; ?>"></iframe>