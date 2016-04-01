
<div class="leftbar">


		<div class="block last-winner winner hiddenes"> 
			<div class="winner"><?=$msg['last_winner'] ?></div>
			<span id="winner-avatar"></span>
			<div class="name" id="winner-name"></div>
			<ul>
				<li><?=$msg['win_money'] ?>: <span id="winner-money"></span></li>
				<li><?=$msg['chance'] ?>: <span id="winner-chance"></span></li>
			</ul>
		</div>

		<div class="block">
			<div class="menu">
				<ul>

					<?	
					
						include ('steamauth/userInfo.php');

 include('/sett.php');
					
					
foreach($admin as $adm){
if($steamprofile['steamid'] == $adm['admin_id']){






   $viptext = '<li><a href=/admin target=_blank>' . $adm['admin_name'] . '</a></li>'; 
   echo $viptext;


}
	}	
		
	
		
					
		
					
					?>
				</ul>
			</div>
		</div>
		
				
		
		<?php
if(isset($_SESSION["steamid"])) {?>	<div class="block">
			
			<div class="menu">
				<ul>
					<li><a href="http://steamcommunity.com/profiles/<?php echo $_SESSION["steamid"];?>/tradeoffers/" target="_blank" class="hiddenes" id="wints">Забрать выигрыш</a></li>
					</ul>
			</div>
		</div><?php
}
?>

		

		<div class="block chat">
			<?php
if(isset($_SESSION["steamid"])) {?><div class="form hidden">
				<textarea id="sendie" placeholder="<?=$msg['send_sms'] ?>"></textarea>
				<input type="submit" id="sendie" name="" value="">
			</div>	
			
			
			
		<div id="emoji_box" class="scroll">
		<div class="emoji_scroll_wrap">				
		<div id="emoji_list" style="top: 0px;">
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px 0px" id="smile" onclick="add_smile(':)')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -17px" id="smile" onclick="add_smile(':-d')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -34px" id="smile" onclick="add_smile(';-)')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -51px" id="smile" onclick="add_smile('xd')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -68px" id="smile" onclick="add_smile(';-p')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -85px" id="smile" onclick="add_smile(':-p')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -102px" id="smile" onclick="add_smile('8-)')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -119px" id="smile" onclick="add_smile('b-)')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -136px" id="smile" onclick="add_smile(':-(')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -153px" id="smile" onclick="add_smile(';-]')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -170px" id="smile" onclick="add_smile('u—(')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -187px" id="smile" onclick="add_smile(':l(')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -204px" id="smile" onclick="add_smile(':_(')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -221px" id="smile" onclick="add_smile(':((')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -238px" id="smile" onclick="add_smile(':o')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -255px" id="smile" onclick="add_smile(':|')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -272px" id="smile" onclick="add_smile('3-)')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -323px" id="smile" onclick="add_smile('o*)')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -340px" id="smile" onclick="add_smile(';o')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -374px" id="smile" onclick="add_smile('8o')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -357px" id="smile" onclick="add_smile('8|')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -391px" id="smile" onclick="add_smile(':x')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -442px" id="smile" onclick="add_smile('*3')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -409px" id="smile" onclick="add_smile(':-*')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -425px" id="smile" onclick="add_smile('}^)')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -306px" id="smile" onclick="add_smile('>((')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -289px" id="smile" onclick="add_smile('>(')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -459px" id="smile" onclick="add_smile(':like:')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -476px" id="smile" onclick="add_smile(':dislike:')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -493px" id="smile" onclick="add_smile(':u:')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -510px" id="smile" onclick="add_smile(':v:')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/white.gif" style="background-position: 0px -527px" id="smile" onclick="add_smile(':kk:')"><br>	
</div>
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDC4F.png"  id="smile" style="background:none;" onclick="add_smile('👏')"><br>	
</div>
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDC4A.png"  id="smile" style="background:none;" onclick="add_smile('👊')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/270B.png"  id="smile" style="background:none;" onclick="add_smile('✋')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDE4F.png"  id="smile" style="background:none;" onclick="add_smile('🙏')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDC43.png"  id="smile" style="background:none;" onclick="add_smile('👃')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDC46.png"  id="smile" style="background:none;" onclick="add_smile('👆')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDC47.png"  id="smile" style="background:none;" onclick="add_smile('👇')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDC48.png"  id="smile" style="background:none;" onclick="add_smile('👈')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDCAA.png"  id="smile" style="background:none;" onclick="add_smile('💪')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDC42.png"  id="smile" style="background:none;" onclick="add_smile('👂')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDC8B.png"  id="smile" style="background:none;" onclick="add_smile('💋')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDCA9.png"  id="smile" style="background:none;" onclick="add_smile('💩')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/2744.png"  id="smile" style="background:none;" onclick="add_smile('❄')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83CDF77.png"  id="smile" style="background:none;" onclick="add_smile('🍷')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83CDF78.png"  id="smile" style="background:none;" onclick="add_smile('🍸')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83CDF85.png"  id="smile" style="background:none;" onclick="add_smile('🎅')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDCA6.png"  id="smile" style="background:none;" onclick="add_smile('💦')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDC7A.png"  id="smile" style="background:none;" onclick="add_smile('👺')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83DDC28.png"  id="smile" style="background:none;" onclick="add_smile('🐨')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83CDF4C.png"  id="smile" style="background:none;" onclick="add_smile('🍌')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83CDFC6.png"  id="smile" style="background:none;" onclick="add_smile('🏆')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83CDFB2.png"  id="smile" style="background:none;" onclick="add_smile('🎲')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83CDF7A.png"  id="smile" style="background:none;" onclick="add_smile('🍺')"><br>	
</div>
<!-- смайлы конец -->
<!-- смайл начало -->
<div class="smileadd itemk over">
<img src="/styles/images/chat/D83CDF7B.png"  id="smile" style="background:none;" onclick="add_smile('🍻')"><br>	
</div>
<!-- смайлы конец -->

	</br>			
				
</div>
</div>
		
		</div>
			
			
			
			
			<?php
}
?>



<script type="text/javascript">





  $(document).ready(function() { 
      $("A.smiles").toggle(function() { 
       
        $("DIV#emoji_box").fadeIn(); 
        return false; 
      },  
      function() { 
        // Скрываем блок 
        $("DIV#emoji_box").fadeOut(); 
        return false;
      }); 
	  
	  $(document).click(function(e){ var elem = $("#emoji_box"); if(e.target!=elem[0]&&!elem.has(e.target).length){ elem.hide(); } }) 

	  
	  
	  // end of toggle() 
    }); // end of ready() 

</script>


			<div class="scroll">
			<div id="chat_messages"></div>
			</div>
			<div class="bottom hidden">
				
					<?php
if(isset($_SESSION["steamid"])) {?><div class="buttons right hidden">
					<a href="#" class="smiles"></a>
		
				</div><?php
}
?>
			</div>
		</div>
		

		<div class="block bonus">
			<img background-blend-mode= 'hard-light' src="/styles/images/vip.png"  alt="vip user" title="vip for you" div= 'hover {background-color: rgba(0,0,0,0);}'/>
			<div><?=$msg['dobav'] ?><?=$msg['steamn'] ?><br><span>scinfast.ru</span><br><?=$msg['ipolici']?>:<br><div class="text">
					
						<b>-5%</b> <?=$msg['komiss']?><br>
						<?=$msg['videl']?> <span style="color: gold"><?=$msg['gold']?></span> <?=$msg['colors']?>
					</div></div>
		</div>
		
		

	<div class="block bonus">
<center><a id="numlinkbuy2615" href="http://num-link.ru/link/purchase/2615" target="_blank"><b>Купить ссылку здесь</b></a><br/>(Цена: 10 руб)<br/><br/>
 
<span id="numlink2615"></span>
<script type="text/javascript">
var js = document.createElement("script"); js.src = "http://num-link.ru/link/list/2615.js"; js.type = "text/javascript"; js.charset = "UTF-8"; js.async = true; var hh = document.getElementsByTagName("head")[0]; hh.appendChild(js);
</script> 
<br/><a target="_blank" href="http://num-link.ru/?pid=maximula"><b>Поставить к себе на сайт</b></a></center>

</div>

		
	
		<!--<div class="contacts">
			<div class="text"><?=$msg['podpiska'] ?></div>
			<div class="icons">
				<a href="http://vk.com/csgojocker" target="_blank" class="vk"></a>
				<a href="#" class="twitter"></a>
				<a href="#" class="facebook"></a>
				<a href="#" class="youtube"></a>
			</div>
		</div>-->

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 1, width: "264", height: "144", color1: '282D40', color2: 'fff', color3: '222839'}, 114967116 );
</script>

	</div>