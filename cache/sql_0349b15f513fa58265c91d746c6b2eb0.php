<?php exit; ?>
1457022575
SELECT * FROM phpbb_bbcodes WHERE bbcode_id IN (17, 19, 33)
3444
a:3:{i:0;a:10:{s:9:"bbcode_id";s:2:"17";s:10:"bbcode_tag";s:6:"center";s:15:"bbcode_helpline";s:0:"";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:23:"[center]{TEXT}[/center]";s:10:"bbcode_tpl";s:23:"<center>{TEXT}</center>";s:16:"first_pass_match";s:31:"!\[center\](.*?)\[/center\]!ies";s:18:"first_pass_replace";s:140:"'[center:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/center:$uid]'";s:17:"second_pass_match";s:39:"!\[center:$uid\](.*?)\[/center:$uid\]!s";s:19:"second_pass_replace";s:21:"<center>${1}</center>";}i:1;a:10:{s:9:"bbcode_id";s:2:"19";s:10:"bbcode_tag";s:7:"youtube";s:15:"bbcode_helpline";s:63:"Entrez l'ID de la video entre les balises -- C'est après le v/";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:31:"[youtube]{SIMPLETEXT}[/youtube]";s:10:"bbcode_tpl";s:201:"<object type="application/x-shockwave-flash" style="width:425px; height:350px;" data="http://www.youtube.com/v/{SIMPLETEXT}"><param name="movie" value="http://www.youtube.com/v/{SIMPLETEXT}"/></object>";s:16:"first_pass_match";s:46:"!\[youtube\]([a-zA-Z0-9-+.,_ ]+)\[/youtube\]!i";s:18:"first_pass_replace";s:33:"[youtube:$uid]${1}[/youtube:$uid]";s:17:"second_pass_match";s:56:"!\[youtube:$uid\]([a-zA-Z0-9-+.,_ ]+)\[/youtube:$uid\]!s";s:19:"second_pass_replace";s:185:"<object type="application/x-shockwave-flash" style="width:425px; height:350px;" data="http://www.youtube.com/v/${1}"><param name="movie" value="http://www.youtube.com/v/${1}"/></object>";}i:2;a:10:{s:9:"bbcode_id";s:2:"33";s:10:"bbcode_tag";s:7:"spoiler";s:15:"bbcode_helpline";s:7:"spoiler";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:25:"[spoiler]{TEXT}[/spoiler]";s:10:"bbcode_tpl";s:667:"<div style="margin:20px;margin-top:5px"><div class="quotetitle"><input type="button" value="Spoiler" style="width:60px;font-size:10px;margin:0px;padding:0px;" onclick="if(this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display!=''){this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display='';this.innerText='';this.value='Spoiler';}else{this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display='none';this.innerText='';this.value='Spoiler';}" /></div><div class="quotecontent"><div style="display:none;">{TEXT}</div></div></div>";s:16:"first_pass_match";s:33:"!\[spoiler\](.*?)\[/spoiler\]!ies";s:18:"first_pass_replace";s:142:"'[spoiler:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/spoiler:$uid]'";s:17:"second_pass_match";s:41:"!\[spoiler:$uid\](.*?)\[/spoiler:$uid\]!s";s:19:"second_pass_replace";s:665:"<div style="margin:20px;margin-top:5px"><div class="quotetitle"><input type="button" value="Spoiler" style="width:60px;font-size:10px;margin:0px;padding:0px;" onclick="if(this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display!=''){this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display='';this.innerText='';this.value='Spoiler';}else{this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display='none';this.innerText='';this.value='Spoiler';}" /></div><div class="quotecontent"><div style="display:none;">${1}</div></div></div>";}}