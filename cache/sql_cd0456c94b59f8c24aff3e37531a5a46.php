<?php exit; ?>
1457021156
SELECT * FROM phpbb_bbcodes WHERE bbcode_id IN (18, 21, 33)
2960
a:3:{i:0;a:10:{s:9:"bbcode_id";s:2:"18";s:10:"bbcode_tag";s:2:"hr";s:15:"bbcode_helpline";s:17:"Ajouter une barre";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:9:"[hr][/hr]";s:10:"bbcode_tpl";s:6:"<hr />";s:16:"first_pass_match";s:16:"!\[hr\]\[/hr\]!i";s:18:"first_pass_replace";s:19:"[hr:$uid][/hr:$uid]";s:17:"second_pass_match";s:19:"[hr:$uid][/hr:$uid]";s:19:"second_pass_replace";s:0:"";}i:1;a:10:{s:9:"bbcode_id";s:2:"21";s:10:"bbcode_tag";s:7:"justify";s:15:"bbcode_helpline";s:0:"";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:25:"[justify]{TEXT}[/justify]";s:10:"bbcode_tpl";s:46:"<div style="text-align: justify;">{TEXT}</div>";s:16:"first_pass_match";s:33:"!\[justify\](.*?)\[/justify\]!ies";s:18:"first_pass_replace";s:142:"'[justify:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/justify:$uid]'";s:17:"second_pass_match";s:41:"!\[justify:$uid\](.*?)\[/justify:$uid\]!s";s:19:"second_pass_replace";s:44:"<div style="text-align: justify;">${1}</div>";}i:2;a:10:{s:9:"bbcode_id";s:2:"33";s:10:"bbcode_tag";s:7:"spoiler";s:15:"bbcode_helpline";s:7:"spoiler";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:25:"[spoiler]{TEXT}[/spoiler]";s:10:"bbcode_tpl";s:667:"<div style="margin:20px;margin-top:5px"><div class="quotetitle"><input type="button" value="Spoiler" style="width:60px;font-size:10px;margin:0px;padding:0px;" onclick="if(this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display!=''){this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display='';this.innerText='';this.value='Spoiler';}else{this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display='none';this.innerText='';this.value='Spoiler';}" /></div><div class="quotecontent"><div style="display:none;">{TEXT}</div></div></div>";s:16:"first_pass_match";s:33:"!\[spoiler\](.*?)\[/spoiler\]!ies";s:18:"first_pass_replace";s:142:"'[spoiler:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/spoiler:$uid]'";s:17:"second_pass_match";s:41:"!\[spoiler:$uid\](.*?)\[/spoiler:$uid\]!s";s:19:"second_pass_replace";s:665:"<div style="margin:20px;margin-top:5px"><div class="quotetitle"><input type="button" value="Spoiler" style="width:60px;font-size:10px;margin:0px;padding:0px;" onclick="if(this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display!=''){this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display='';this.innerText='';this.value='Spoiler';}else{this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display='none';this.innerText='';this.value='Spoiler';}" /></div><div class="quotecontent"><div style="display:none;">${1}</div></div></div>";}}