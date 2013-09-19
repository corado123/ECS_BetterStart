[{assign var="oConf" value=$oViewConf->getConfig()}]

[{if !$oConf->getConfigParam('ecs_bsshoplupe')}]
[{$smarty.block.parent}]
[{/if}]