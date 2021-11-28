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
$this->addExternalCss("/bitrix/css/main/bootstrap.css");
$this->addExternalCss("/bitrix/css/main/font-awesome.css");
$this->addExternalCss($this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css');
CUtil::InitJSCore(array('fx'));
?>
Тут действительно тянется мой шаблон
			<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="100ms">
						<div class="news-box">
							<div class="news-text">
								<ul class="news-info">
									<li>
										<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
										<h3 class="bx-newsdetail-title"><?=$arResult["NAME"]?></h3>
										<?endif;?>
									</li>
								</ul>

								<h4><a href="#"></a></h4>
								<p class="news-para">
										<?if($arResult["NAV_RESULT"]):?>
										<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
										<?echo $arResult["NAV_TEXT"];?>
										<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
									<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
										<?echo $arResult["DETAIL_TEXT"];?>
									<?else:?>
										<?echo $arResult["PREVIEW_TEXT"];?>
									<?endif?>

								</p>

								<div class="post-img">
										<img
									src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
									width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
									height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
									alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
									title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
									/>
								</div>
								<p class="favorite">By<a href="#"> Admin</a>,  Favorite  23 </p>
							</div>
							<figure class="news-image">
								<img
									src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
									width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
									height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
									alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
									title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
									/>
							</figure>
															<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
		<?
		if(is_array($arProperty["DISPLAY_VALUE"]))
			$value = implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
		else
			$value = $arProperty["DISPLAY_VALUE"];
		?>
		<?if($arProperty["CODE"] == "FORUM_MESSAGE_CNT"):?>
			<div class="bx-newsdetail-comments"><i class="fa fa-comments"></i> <?=$arProperty["NAME"]?>:
				<?=$value;?>
			</div>
		<?elseif ($value != ""):?>
			<div class="bx-newsdetail-other"><i class="fa"></i> <?=$arProperty["NAME"]?>:
				<?=$value;?>
			</div>
		<?endif;?>
	<?endforeach;?>
						</div>
					</div>
				</div>


<script type="text/javascript">
	BX.ready(function() {
		var slider = new JCNewsSlider('<?=CUtil::JSEscape($this->GetEditAreaId($arResult['ID']));?>', {
			imagesContainerClassName: 'bx-newsdetail-slider-container',
			leftArrowClassName: 'bx-newsdetail-slider-arrow-container-left',
			rightArrowClassName: 'bx-newsdetail-slider-arrow-container-right',
			controlContainerClassName: 'bx-newsdetail-slider-control'
		});
	});
</script>
