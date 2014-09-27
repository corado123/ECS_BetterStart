[{*
/*    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) 2014  Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 */
*}]
[{assign var="oConf" value=$oViewConf->getConfig()}]
[{if $oViewConf->getActiveTheme() == $oConf->getConfigParam('sOEThemeSwitcherMobileTheme')}]
    [{capture append="oxidBlock_content"}]
        [{oxid_include_widget cl="oxwCategoryTree" cnid=$oView->getCategoryId() sWidgetType="header" _parent=$oView->getClassName() nocookie=1}]
    [{/capture}]
    [{include file="layout/page.tpl" sidebar="Right"}]
[{else}]
    [{oxscript include="js/widgets/oxcenterelementonhover.js" priority=10 }]
    [{oxscript add="$( '#specCatBox' ).oxCenterElementOnHover();" }]
    [{capture append="oxidBlock_content"}]
        [{assign var="oFirstArticle" value=$oView->getFirstArticle()}]
        [{if $oView->getCatOfferArticleList()|@count > 0}]
            [{foreach from=$oView->getCatOfferArticleList() item=actionproduct name=CatArt}]
            [{if $smarty.foreach.CatArt.first}]
            [{assign var="oCategory" value=$actionproduct->getCategory()}]
                [{if $oCategory }]
                    [{assign var="promoCatTitle" value=$oCategory->oxcategories__oxtitle->value}]
                    [{assign var="promoCatImg" value=$oCategory->getPromotionIconUrl()}]
                    [{assign var="promoCatLink" value=$oCategory->getLink()}]
                [{/if}]
            [{/if}]
            [{/foreach}]
        [{/if}]
        [{if $oConf->getConfigParam('ecs_bsstarttpl')}]
            [{oxifcontent ident="oxstartwelcome" object="oCont"}]
                <div style="background:#f2f2f2;padding:15px;margin-bottom:20px;">
                    [{$oCont->oxcontents__oxcontent->value}]
                </div>
            [{/oxifcontent}]
        [{/if}]
        [{if $oView->getBargainArticleList()|@count > 0 || ($promoCatTitle && $promoCatImg)}]
            <div class="promoBoxes clear">
                [{if count($oView->getBargainArticleList()) > 0 }]
                    <div id="specBox" class="specBox">
                        [{include file="widget/product/bargainitems.tpl"}]
                    </div>
                [{/if}]
                [{if $promoCatTitle && $promoCatImg}]
                    <div id="specCatBox" class="specCatBox">
                        <h2 class="sectionHead">[{$promoCatTitle}]</h2>
                        <a href="[{$promoCatLink}]" class="viewAllHover glowShadow corners"><span>[{ oxmultilang ident="VIEW_ALL_PRODUCTS" }]</span></a>
                        <img src="[{$promoCatImg}]" alt="[{$promoCatTitle}]">
                    </div>
                [{/if}]
            </div>
        [{/if}]
        [{include file="widget/manufacturersslider.tpl" }]
        [{if $oView->getNewestArticles() }]
            [{assign var='rsslinks' value=$oView->getRssLinks() }]
            [{include file="widget/product/list.tpl" type=$oViewConf->getViewThemeParam('sStartPageListDisplayType') head="JUST_ARRIVED"|oxmultilangassign listId="newItems" products=$oView->getNewestArticles() rsslink=$rsslinks.newestArticles rssId="rssNewestProducts" showMainLink=true}]
        [{/if}]
        [{ insert name="oxid_tracker"}]
    [{/capture}]
    [{include file="layout/page.tpl" sidebar="Right"}]
[{/if}]