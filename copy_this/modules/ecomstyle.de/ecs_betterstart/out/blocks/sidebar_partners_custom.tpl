[{assign var="oConf" value=$oViewConf->getConfig()}]

[{if !$oConf->getConfigParam('ecs_bspartnerbox')}]
[{$smarty.block.parent}]
[{/if}]             