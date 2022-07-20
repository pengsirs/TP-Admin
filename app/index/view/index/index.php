{//包含头部文件}
{include file="public/header";}
{//循环遍历：}
{//foreach $data as $key => $value}
<div>{//$value['id']}--{//$value['username']}--{//$value['password']}</div>
{///foreach}

{// volist 循环遍历}
{volist name="data" key="key" id="value"}
<div>
    key:{$key}
    --{$value['id']}
    --{$value['username']}
    --{$value['password']}
</div>
{/volist}

{if $title=='页'}
<div>home</div>
{else /}
<div>no home</div>
{/if}

{eq name="title" value="首页"}
<div>home</div>
{/eq}


{//包含底部文件}
{include file="public/footer";}