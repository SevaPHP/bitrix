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
$this->setFrameMode(true);?>

			<?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?><?else:?>
     <form action="<?=$arResult["FORM_ACTION"]?>">
        <input class="sb-search-input " onkeyup="buttonUp();" placeholder=	"Enter your search term..." onblur="monkey();" type="search" value=""  name="q" id="search">
		<?endif;?>
        <input class="sb-search-submit" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>">
        <span class="sb-icon-search"><i class="fa fa-search"></i></span>
    </form>
