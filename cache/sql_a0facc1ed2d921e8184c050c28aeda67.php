<?php exit; ?>
1457266383
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 23
642
a:1:{i:0;a:10:{s:9:"bbcode_id";s:2:"23";s:10:"bbcode_tag";s:5:"right";s:15:"bbcode_helpline";s:6:"Droite";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:21:"[right]{TEXT}[/right]";s:10:"bbcode_tpl";s:44:"<div style="text-align: right;">{TEXT}</div>";s:16:"first_pass_match";s:29:"!\[right\](.*?)\[/right\]!ies";s:18:"first_pass_replace";s:138:"'[right:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/right:$uid]'";s:17:"second_pass_match";s:37:"!\[right:$uid\](.*?)\[/right:$uid\]!s";s:19:"second_pass_replace";s:42:"<div style="text-align: right;">${1}</div>";}}