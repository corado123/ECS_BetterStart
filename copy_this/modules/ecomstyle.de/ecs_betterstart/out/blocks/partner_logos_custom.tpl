[{assign var="oConf" value=$oViewConf->getConfig()}]

[{if !$oConf->getConfigParam('ecs_bspartnerts')}]
[{include file="widget/trustedshops/info.tpl" }]
[{/if}]