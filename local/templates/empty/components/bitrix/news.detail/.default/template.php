<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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



<?php if (!empty($arResult['ID'])) : ?>


	<body>
		<div class="article-card">
			<div class="article-card__title"><?= $arResult['PROPERTIES']['detail_title']['VALUE'] ?? ''; ?></div>
			<div class="article-card__date"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></div>
			<div class="article-card__content">
				<div class="article-card__image sticky">
					<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])) : ?>
						<img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>" title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>" />
					<? endif ?>
				</div>
				<div class="article-card__text">
					<div class="block-content" data-anim="anim-3">
						<p><?= $arResult['DISPLAY_PROPERTIES']['detail_texttop']['VALUE'] ?></p>
						<p><?= $arResult['DISPLAY_PROPERTIES']['detail_textbotton']['VALUE'] ?></p>
					</div>
					<a class="article-card__button" href="http://zadt/">Назад к новостям</a>

				</div>
			</div>
		</div>
	</body>
<?php endif ?>