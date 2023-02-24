<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовый раздел");
?><table width="80%" cellspacing="0" border="1">
<tbody>
<tr>
	<th>
		 1
	</th>
	<th colspan="3">
		 1
	</th>
	<th colspan="3">
		 2
	</th>
	<th colspan="2">
		 3
	</th>
</tr>
<tr>
	<th>
		 2
	</th>
	<td>
		 нет
	</td>
	<td>
		 нет
	</td>
	<td>
		 нет
	</td>
	<td>
		 нет
	</td>
	<td>
		 нет
	</td>
	<td>
		 нет
	</td>
	<td>
		 нет
	</td>
	<td>
		 нет
	</td>
</tr>
<tr>
	<th>
		 3
	</th>
	<td>
		 Да
	</td>
	<td>
		 Да
	</td>
	<td>
		 Да
	</td>
	<td>
		 Да
	</td>
	<td>
		 Да
	</td>
	<td>
		 Да
	</td>
	<td>
		 Да
	</td>
	<td>
		 Да
	</td>
</tr>
</tbody>
</table>
 "Наше участие в праздниках Благотворительного центра "<a href="http://deti39.com">Верю в чудо</a>".
<table cellspacing="1" cellpadding="1" border="1">
<tbody>
<tr>
	<td>
		 &nbsp; <img src="/test/practic_1.jpg" width="1024" height="768">
	</td>
	<td>
		 &nbsp;<img src="/test/practic_2.jpg" width="1024" height="768">
	</td>
</tr>
<tr>
	<td>
		 &nbsp;<img src="/test/practic_3.jpg" width="1024" height="576">
	</td>
	<td>
		 &nbsp;<img src="/test/practic_4.jpg" width="1024" height="682">
	</td>
</tr>
</tbody>
</table>
<div>
 <br>
</div>
<div>
 <br>
</div>
<div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"flat",
	Array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "BROWSER_TITLE",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "Y",
		"DETAIL_FIELD_CODE" => array("SHOW_COUNTER",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("AUTHORS","YEAR",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "test",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("SHOW_COUNTER",""),
		"LIST_PROPERTY_CODE" => array("AUTHORS",""),
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "KEY_WORDS",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"VARIABLE_ALIASES" => Array("ELEMENT_ID"=>"ELEMENT_ID","SECTION_ID"=>"SECTION_ID")
	)
);?>
</div>
<div>
 <br>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>