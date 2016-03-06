<?php exit; ?>
1457266372
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 33
1941
a:1:{i:0;a:10:{s:9:"bbcode_id";s:2:"33";s:10:"bbcode_tag";s:7:"spoiler";s:15:"bbcode_helpline";s:7:"Spoiler";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:25:"[spoiler]{TEXT}[/spoiler]";s:10:"bbcode_tpl";s:683:"<div style="padding:1em;" class="codebox">   
   	<dt style="background-color:#28292B; border-radius:4px 4px 0px 0px;" >
      	<input class="btn btn-default" type="button" value="Spoiler" style="background-color:#28292B; border-radius:4px 0px 0px 0px;"
		onclick="var spoiler = $(this).parents('.codebox').find('.content').toggle('slow');
		if ( this.value == 'Cacher' ) { this.value = 'Spoiler'; } else { this.value = 'Cacher'; };
		return false;" />
	</dt>
	<dd>
		<div style="background-color:#121314; border-radius:0px 0px 4px 4px; padding: 1.2em">
      		<div class="content" name="spoiler" style="display:none;">
      			{TEXT}
      		</div>
      	</div>
     </dd>
</div>";s:16:"first_pass_match";s:33:"!\[spoiler\](.*?)\[/spoiler\]!ies";s:18:"first_pass_replace";s:142:"'[spoiler:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/spoiler:$uid]'";s:17:"second_pass_match";s:41:"!\[spoiler:$uid\](.*?)\[/spoiler:$uid\]!s";s:19:"second_pass_replace";s:681:"<div style="padding:1em;" class="codebox">   
   	<dt style="background-color:#28292B; border-radius:4px 4px 0px 0px;" >
      	<input class="btn btn-default" type="button" value="Spoiler" style="background-color:#28292B; border-radius:4px 0px 0px 0px;"
		onclick="var spoiler = $(this).parents('.codebox').find('.content').toggle('slow');
		if ( this.value == 'Cacher' ) { this.value = 'Spoiler'; } else { this.value = 'Cacher'; };
		return false;" />
	</dt>
	<dd>
		<div style="background-color:#121314; border-radius:0px 0px 4px 4px; padding: 1.2em">
      		<div class="content" name="spoiler" style="display:none;">
      			${1}
      		</div>
      	</div>
     </dd>
</div>";}}