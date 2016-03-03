<?php exit; ?>
1457023136
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 27
650
a:1:{i:0;a:10:{s:9:"bbcode_id";s:2:"27";s:10:"bbcode_tag";s:5:"blink";s:15:"bbcode_helpline";s:0:"";s:18:"display_on_posting";s:1:"0";s:12:"bbcode_match";s:21:"[blink]{TEXT}[/blink]";s:10:"bbcode_tpl";s:51:"<span style="text-decoration: blink;">{TEXT}</span>";s:16:"first_pass_match";s:29:"!\[blink\](.*?)\[/blink\]!ies";s:18:"first_pass_replace";s:138:"'[blink:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/blink:$uid]'";s:17:"second_pass_match";s:37:"!\[blink:$uid\](.*?)\[/blink:$uid\]!s";s:19:"second_pass_replace";s:49:"<span style="text-decoration: blink;">${1}</span>";}}