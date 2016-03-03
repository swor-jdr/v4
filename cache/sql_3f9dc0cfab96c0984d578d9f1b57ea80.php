<?php exit; ?>
1457020955
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 32
684
a:1:{i:0;a:10:{s:9:"bbcode_id";s:2:"32";s:10:"bbcode_tag";s:6:"strike";s:15:"bbcode_helpline";s:12:"Texte barré";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:23:"[strike]{TEXT}[/strike]";s:10:"bbcode_tpl";s:57:"<span style="text-decoration:line-through;">{TEXT}</span>";s:16:"first_pass_match";s:31:"!\[strike\](.*?)\[/strike\]!ies";s:18:"first_pass_replace";s:140:"'[strike:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/strike:$uid]'";s:17:"second_pass_match";s:39:"!\[strike:$uid\](.*?)\[/strike:$uid\]!s";s:19:"second_pass_replace";s:55:"<span style="text-decoration:line-through;">${1}</span>";}}