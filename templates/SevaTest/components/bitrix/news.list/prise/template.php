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
<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="col-md-3 col-sm-6 col-xs-12 envelopes wow fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
				<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

						<div class="price-area">
							<div class="price-tb">
								<div class="price-top">
									<div class="price-gross">
										<span class="price-number">$ <?php echo $arItem["PROPERTIES"]["priseSeva"]["VALUE"]; ?></span><br>
										<span class="price-month"><?php echo $arItem["NAME"]; ?></span>
									</div>
									<div class="circle-left pull-left">
										<img src="<?=SITE_TEMPLATE_PATH;?>/img/abc.png" alt="">
									</div>
									<div class="circle-right pull-right">
										<img src="<?=SITE_TEMPLATE_PATH;?>/img/abc.png" alt="">
									</div>
								</div>
								<div class="price-bottom uppercase">
									<div class="price-button-top">
										<a href="#" class="action-btn-top"><?php echo $arItem["PREVIEW_TEXT"];?></a>
									</div>
									<div class="price-feature">
									<p>				
										<?php echo $arItem["DETAIL_TEXT"]; ?>
									</p>	
									</div>
									<div class="price-button-bottom">
										<button class="action-btn-bottom" ><?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => "",
										"PATH" => SITE_TEMPLATE_PATH."/inc/main/order.php"
									)
								);?></button>
									</div>
								</div>
							</div>
						</div>
					</div>
<?php endforeach; ?>

