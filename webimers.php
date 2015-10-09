<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html" charset="UTF-8">
		<meta http-equiv="content-style-type" content="text/css">
		<meta name="author" content="IMERS CO.">
		<meta name="description" content="IMERSのWeb版です。">
		<meta name="keywords" content="IMERS,Web,チャット,Chat,日本,Japenese">
		<link rel="stylesheet" href="styles/navi.css">
		<link rel="stylesheet" href="iconfont/css/font-awesome.min.css">
		<title>IMERS on Web</title>
		<script>
		function tsuika() {
			var image = "";
			var input = document.getElementById("input");
			
			if (input.value == "いやあ") {
				image = "a.png";
			} else if (input.value == "YES" || input.value == "yes") {
				image = "b.png";
			} else if (input.value == "ゴロゴロ") {
				image = "aa.png";
			} else if (input.value == "はははは") {
				image = "ab.png";
			} else if (input.value == "ふわあ") {
				image = "ac.png";
			} else if (input.value == "しくしく") {
				image = "ad.png";
			} else if (input.value == "へへへへ") {
				image = "ae.png";
			} else if (input.value == "そうじ") {
				image = "af.png";
			} else if (input.value == "キラキラ") {
				image = "ag.png";
			} else if (input.value == "ぐっちょぶ！！") {
				image = "ah.png";
	        } else if (input.value == "激おこぷんぷん丸") {
				image = "ai.png";	
				} else if (input.value == "お～！") {
				image = "aj.png";
				} else if (input.value == "やっほ～！") {
				image = "ak.png";	
				} else if (input.value == "ORZ" || input.value == "orz") {
				image = "al.png";
				} else if (input.value == "は？") {
				image = "am.png";
				} else if (input.value == "えへへー") {
				image = "an.png";
				} else if (input.value == "！") {
				image = "ao.png";
				} else if (input.value == "おめでとう！") {
				image = "ap.png";
				} else if (input.value == "尊敬のまなざし") {
				image = "aq.png";
				} else if (input.value == "おやすみ") {
				image = "ar.png";
				} else if (input.value == "バイバイ") {
				image = "as.png";		
				} else if (input.value == "・・・・・") {
				image = "at.png";	
				} else if (input.value == "てへぺろ") {
				image = "au.png";
				} else if (input.value == "パア") {
				image = "c.png";	
				} else if (input.value == "ノー") {
				image = "b.png";		
				} else if (input.value == "ズーン") {
				image = "e.png";	
				} else if (input.value == "ちーん") {
				image ="f.png";
				} else if (input.value == "たよれよ") {
				image = "g.png";		
				} else if (input.value == "ぐっっ") {
				image = "h.png";		
				} else if (input.value == "・・・。") {
				image = "i.png";		
				}else if (input.value == "ばいばい") {
				image = "j.png";		
				}else if (input.value == "からもー") {
				image = "k.png";		
				} else if (input.value == "目が上にいった！？") {
				image = "l.png";		
				} else if (input.value == "ふーん。") {
				image = "m.png";		
				} else if (input.value == "ふむふむ") {
				image = "n.png";
				} else if (input.value == "おー") {
				image = "o.png";		
				} else if (input.value == "返信おっそ～") {
				image = "p.png";		
				} else if (input.value == "だるーい") {
				image = "q.png";		
			    } else if (input.value == "三人！") {
			    image = "r.png";
			    } else if (input.value == "ワタシ・・・") {
				image = "s.png";		
				} else if (input.value == "ちょっとお待ちを！") {
				image = "t.png";				
				} else if (input.value == "すみません。") {
				image = "u.png";		
				} else if (input.value == "お願いします！") {
				image = "v.png";
				} else if (input.value == "ドヤ・・") {
				image = "w.png";
				} else if (input.value == "ち～～～～～～～・・・・ん") {
				image = "x.png";
				} else if (input.value == "イイネ！") {
				image = "y.png";
				} else if (input.value == "ハハハハハ！") {
				image = "z.png";												
				
			} else {
				return;
			}
			
			var timeline = document.getElementById("timeline");
			var ele = document.createElement("img");
			ele.setAttribute("src", image);
			ele.setAttribute("width", "200px");
			var div = document.createElement("div");
			div.appendChild(ele);
			timeline.appendChild(div);
		}
		function message() {
			var input = document.getElementById("input");
			var li = document.createElement("li");
			li.innerHTML = "<div>" + input.value + "</div>";
			timeline.appendChild(li);
		}
		</script>
</head>
<body>
<!-- ナビゲーションバー設定　項目追加の際アイコンフォント忘れずに -->
	<div id="navi">
		<a href="index.html"><i class="fa fa-home"></i> TOP</a> | 
		<a href="about.html"><i class="fa fa-file-o"></i> ABOUT</a> | 
		<a href="login.php"><i class="fa fa-user"></i> Web版ログイン</a> | 
		<a href="register.php"><i class="fa fa-user-plus"></i> 新規登録</a>
	</div>
	<form>
			<h1>ImichatWeb Ver0.01</h1>
			<ul id="timeline">
			</ul>
			<input type="text" id="input" value="">
			<input type="button" value="スタンプ" onclick="tsuika()">
			<input type="button" value="送信" onclick="message()">
		</form>
	</body>
</html>
	<div id="box-menu-home">
		<h4>ホーム</h4>
	</div><br>
	<div id="box-menu-talk">
		<h4>トーク</h4>
	</div>
	<div id="box-menu-friend">
		<h4>友達</h4>
	</div>
	<div id="box-menu-trend">
		<h4>トレンド</h4>
	</div>
	<div id="box-menu-shop">
		<h4>AA・アスキーアート</h4>
	</div>
	<p id="about">俺さんとのチャット</p>
	<div id="balloon-2-left">
		あああ
	</div>
	<form action="" id="form">
		<input type="text" name="あああ" ></input>あああ
	</form>
</body>
