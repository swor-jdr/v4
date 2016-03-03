<?php exit; ?>
1457019897
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 22
625
a:1:{i:0;a:10:{s:9:"bbcode_id";s:2:"22";s:10:"bbcode_tag";s:4:"left";s:15:"bbcode_helpline";s:0:"";s:18:"display_on_posting";s:1:"0";s:12:"bbcode_match";s:19:"[left]{TEXT}[/left]";s:10:"bbcode_tpl";s:43:"<div style="text-align: left;">{TEXT}</div>";s:16:"first_pass_match";s:27:"!\[left\](.*?)\[/left\]!ies";s:18:"first_pass_replace";s:136:"'[left:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/left:$uid]'";s:17:"second_pass_match";s:35:"!\[left:$uid\](.*?)\[/left:$uid\]!s";s:19:"second_pass_replace";s:41:"<div style="text-align: left;">${1}</div>";}}