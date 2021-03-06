<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="row">

<?foreach($arResult["ITEMS"] as $arItem):?>
<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<div class="col-md-3 col-sm-6 col-xs-12 envelopes wow fadeInRight" data-wow-duration="700ms" data-wow-delay="200ms">
						<div class="team-member">
							<div class="team-bdr">
								<div class="member-image">
									<img										
										src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
										width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
										height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
										alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
										title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"										
										/>
								</div>
								<div class="team-content">

									<h4><?php echo $arItem["NAME"]?></h4>
									<h5><?php echo $arItem["PREVIEW_TEXT"]?></h5>
									<p><?php echo $arItem["DETAIL_TEXT"]?></p>
								</div>
							</div>
						</div>
					</div>

<?php endforeach;?>					

</div>