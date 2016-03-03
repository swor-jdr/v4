<?php exit; ?>
1457021731
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 21
658
a:1:{i:0;a:10:{s:9:"bbcode_id";s:2:"21";s:10:"bbcode_tag";s:7:"justify";s:15:"bbcode_helpline";s:0:"";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:25:"[justify]{TEXT}[/justify]";s:10:"bbcode_tpl";s:46:"<div style="text-align: justify;">{TEXT}</div>";s:16:"first_pass_match";s:33:"!\[justify\](.*?)\[/justify\]!ies";s:18:"first_pass_replace";s:142:"'[justify:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/justify:$uid]'";s:17:"second_pass_match";s:41:"!\[justify:$uid\](.*?)\[/justify:$uid\]!s";s:19:"second_pass_replace";s:44:"<div style="text-align: justify;">${1}</div>";}}