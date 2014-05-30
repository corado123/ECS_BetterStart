[{assign var="oConf" value=$oViewConf->getConfig()}]

[{if !$oConf->getConfigParam('ecs_bspartnerbox')}]
<style type="text/css">
    #tsMembership{display:none;}
</style>
[{$smarty.block.parent}]
[{/if}]             