<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?$APPLICATION->ShowHead();?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/common.css">
    <script src="<?=SITE_TEMPLATE_PATH?>/js/core.js" defer></script>
  </head>
  <body>
    <?$APPLICATION->ShowPanel()?>
    <?if($USER->IsAdmin()):?>

    <div style="border:red solid 1px">
    	<form action="/bitrix/admin/site_edit.php" method="GET">
    		<input type="hidden" name="LID" value="<?=SITE_ID?>" />
    		<p><font style="color:red"><?echo GetMessage("DEF_TEMPLATE_NF")?> </font></p>
    		<input type="submit" name="set_template" value="<?echo GetMessage("DEF_TEMPLATE_NF_SET")?>" />
    	</form>
    </div>

    <?endif?>
