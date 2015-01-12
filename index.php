<?php
require("./app_id.php");
require("./logic.php");
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ソーシャルゲームオークション : GREE・モバゲー・mixiのオークションサーチ</title>
<meta http-equiv="content-Style-type" content="text/css" />
<meta http-equiv="content-Script-type" content="text/javascript" />
<meta name="description" content="GREE・モバゲー・mixi等、ソーシャルゲームのアイテムをお探しならこちら。" />
<meta name="keywords" content="GREE,モバゲー,mixi,Yahoo!,ヤフー,オークション,ヤフオク,ソーシャルゲーム,RMT" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="shortcut icon" href="./img/favicon.ico" />
<link href="./css/bootstrap.min.css" rel="stylesheet" />
<link href="./css/style.css" rel="stylesheet" />
<link href="./css/bootstrap-responsive.min.css" rel="stylesheet" />
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php require "./js.inc"; ?>
</head>
<body onload="getImage();">
<div align="right" class="hidden-phone"><a href="http://tiger4th.com/">リンク</a>&nbsp;</div>

<!-- PCヘッダ -->
<div class="hidden-phone">
<a id="top"></a>
<div class="logo"><a href="http://tiger4th.com/sga/"><img src="./img/sga.png" alt="ソーシャルゲームオークション"></a></div>

<ul class="nav nav-tabs">
<li>　　　　　　　　</li>
<li<?php if($p=='mo'){ ?> class="active"<?php } ?>><a href="?p=mo&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>">　　モバゲー　　</a></li>
<li<?php if($p=='gr'){ ?> class="active"<?php } ?>><a href="?p=gr&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>">　　　GREE　　　</a></li>
<li<?php if($p=='mi'){ ?> class="active"<?php } ?>><a href="?p=mi&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>">　　　mixi　　　</a></li>
<li<?php if($p=='so'){ ?> class="active"<?php } ?>><a href="?p=so&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>">　ソーシャルゲーム　</a></li>
<li<?php if($p=='ne'){ ?> class="active"<?php } ?>><a href="?p=ne&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>">　オンラインゲーム　</a></li>
<li<?php if($p=='ot'){ ?> class="active"<?php } ?>><a href="?p=ot&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>">　　その他　　</a></li>
</ul>
</div>
<!-- /PCヘッダ -->

<!-- ページ -->
<div class="container-fluid">
<div class="row-fluid">

<!-- サイドバー -->
<div class="span2 center hidden-phone">

<form method="get">
<input type="hidden" name="p" value='<?php echo $p; ?>'>
<input type="hidden" name="s" value='<?php echo $s; ?>'>
<input type="hidden" name="o" value='<?php echo $o; ?>'>
<input type="hidden" name="t" value='<?php echo $t; ?>'>
<input type="text" class="input-small search-query" name="q" value="<?php echo $q; ?>">
<button type="submit" class="btn">検索</button>
</form>

<?php if ($p != 'ot') { ?>
<div class="well sidebar-nav">
<ul class="nav nav-list">
<li class="nav-header"><?php echo $page[$p]; ?></li>
<?php foreach($menu[$p] as $key => $value){ ?>
<li<?php if($q==$value['search']){ ?> class="active"<?php } ?>><a href="?p=<?php echo $p; ?>&q=<?php echo $value['search']; ?>&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>&c=<?php echo $value['category']; ?>"><?php echo $value['name']; ?></a></li>
<?php } ?>
</ul>
</div><!--/.well -->
<?php } ?>

<!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
<a href="http://developer.yahoo.co.jp/about">
<img src="http://i.yimg.jp/images/yjdn/yjdn_attbtn1_88_35.gif" width="88" height="35" title="Webサービス by Yahoo! JAPAN" alt="Web Services by Yahoo! JAPAN" border="0" style="margin:15px 15px 15px 15px"></a>
<!-- End Yahoo! JAPAN Web Services Attribution Snippet -->

</div><!--/span-->
<!-- /サイドバー -->

<!-- コンテンツ -->
<div class="span10">

<!-- PC設定 -->
<div class="row hidden-phone">

<?php if ($link != '' || $q != '') { ?>
<div class="span6">
<ul class="nav nav-pills">
<li<?php if($s=="cbids"){ ?> class="active"<?php } ?>>
<?php if($o=="d"){ ?><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=cbids&o=a&t=<?php echo $t; ?>&c=<?php echo $c; ?>">現在価格<?php if($s=="cbids"){ ?> <i class="icon-arrow-up icon-white"></i><?php } ?></a>
<?php }else{ ?><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=cbids&o=d&t=<?php echo $t; ?>&c=<?php echo $c; ?>" class="">現在価格<?php if($s=="cbids"){ ?> <i class="icon-arrow-down icon-white"></i><?php } ?></a><?php } ?>
</li>
<li<?php if($s=="bidorbuy"){ ?> class="active"<?php } ?>>
<?php if($o=="d"){ ?><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bidorbuy&o=a&t=<?php echo $t; ?>&c=<?php echo $c; ?>">即決価格<?php if($s=="bidorbuy"){ ?> <i class="icon-arrow-up icon-white"></i><?php } ?></a>
<?php }else{ ?><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bidorbuy&o=d&t=<?php echo $t; ?>&c=<?php echo $c; ?>" class="">即決価格<?php if($s=="bidorbuy"){ ?> <i class="icon-arrow-down icon-white"></i><?php } ?></a><?php } ?>
</li>
<li<?php if($s=="bids"){ ?> class="active"<?php } ?>>
<?php if($o=="a"){ ?><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bids&o=d&t=<?php echo $t; ?>&c=<?php echo $c; ?>">入札<?php if($s=="bids"){ ?> <i class="icon-arrow-up icon-white"></i><?php } ?></a>
<?php }else{ ?><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bids&o=a&t=<?php echo $t; ?>&c=<?php echo $c; ?>" class="">入札<?php if($s=="bids"){ ?> <i class="icon-arrow-down icon-white"></i><?php } ?></a><?php } ?>
</li>
<li<?php if($s=="end"){ ?> class="active"<?php } ?>>
<?php if($o=="d"){ ?><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=end&o=a&t=<?php echo $t; ?>&c=<?php echo $c; ?>">残り時間<?php if($s=="end"){ ?> <i class="icon-arrow-up icon-white"></i><?php } ?></a>
<?php }else{ ?><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=end&o=d&t=<?php echo $t; ?>&c=<?php echo $c; ?>" class="">残り時間<?php if($s=="end"){ ?> <i class="icon-arrow-down icon-white"></i><?php } ?></a><?php } ?>
</li>
<li><?php if($t==0){ ?>
<a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=1&c=<?php echo $c; ?>" class="btn-info btn-small">画像なし商品表示</a>
<?php }else{ ?><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=0&c=<?php echo $c; ?>" class="btn btn-small">画像なし商品非表示</a><?php } ?>
</li>
</ul>
</div>

<div class="span8">
<div class="control-group">
<div class="controls docs-input-sizes">
表示順序：
<select class="span3" placeholder=".span3" onchange="jump(this)">
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=cbids&o=a&t=<?php echo $t; ?>&c=<?php echo $c; ?>"<?php if($s=="cbids"&&$o=="a"){?> selected<?php } ?>>価格の安い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=cbids&o=d&t=<?php echo $t; ?>&c=<?php echo $c; ?>"<?php if($s=="cbids"&&$o=="d"){?> selected<?php } ?>>価格の高い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bids&o=a&t=<?php echo $t; ?>&c=<?php echo $c; ?>"<?php if($s=="bids"&&$o=="a"){?> selected<?php } ?>>入札の多い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bids&o=d&t=<?php echo $t; ?>&c=<?php echo $c; ?>"<?php if($s=="bids"&&$o=="d"){?> selected<?php } ?>>入札の少ない順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=end&o=a&t=<?php echo $t; ?>&c=<?php echo $c; ?>"<?php if($s=="end"&&$o=="a"){?> selected<?php } ?>>残り時間の短い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=end&o=d&t=<?php echo $t; ?>&c=<?php echo $c; ?>"<?php if($s=="end"&&$o=="d"){?> selected<?php } ?>>残り時間の長い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bidorbuy&o=a&t=<?php echo $t; ?>&c=<?php echo $c; ?>"<?php if($s=="bidorbuy"&&$o=="a"){?> selected<?php } ?>>即決価格の安い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bidorbuy&o=d&t=<?php echo $t; ?>&c=<?php echo $c; ?>"<?php if($s=="bidorbuy"&&$o=="d"){?> selected<?php } ?>>即決価格の高い順</option>
</select>

<?php if ($link != '') { ?>
　　<a href="<?php echo $link; ?>" target="_blank">検索結果：<?php echo number_format((int)$res["totalResultsAvailable"]); ?>件</a>
<?php } ?>
</div>
</div>
</div>
<?php } ?>

<?php if ($link != '') { ?>
<div class="span4">

</div>
<?php } ?>

</div><!-- /row -->
<!-- /PC設定 -->

<!-- SPヘッダ・設定 -->
<div class="visible-phone">
<a id="top"></a>
<br />
<a href="http://tiger4th.com/sga/"><img src="./img/sga.png" alt="ソーシャルゲームオークション"></a>
<br /><br />

プラットフォーム：<br />
<select class="" placeholder="" onchange="jump(this)">
<option value="?p=mo&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>"<?php if($p=='mo'){?> selected<?php } ?>>モバゲー</option>
<option value="?p=gr&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>"<?php if($p=='gr'){?> selected<?php } ?>>GREE</option>
<option value="?p=mi&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>"<?php if($p=='mi'){?> selected<?php } ?>>mixi</option>
<option value="?p=so&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>"<?php if($p=='so'){?> selected<?php } ?>>ソーシャルゲーム</option>
<option value="?p=ne&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>"<?php if($p=='ne'){?> selected<?php } ?>>オンラインゲーム</option>
<option value="?p=ot&q=&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>"<?php if($p=='ot'){?> selected<?php } ?>>その他</option>
</select>
<br />

<?php if ($p != 'ot') {$selected=0; ?>
ゲーム：<br />
<select class="" placeholder="" onchange="jump(this)">
<?php foreach($menu[$p] as $key => $value){ ?>
<option value="?p=<?php echo $p; ?>&q=<?php echo $value['search']; ?>&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>"<?php if($q==$value['search']){ ?> selected<?php $selected=1;} ?>><?php echo $value['name']; ?></option>
<?php } ?>

<?php if ($selected==0) { ?>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>" selected><?php echo $q; ?></option>
<?php } ?>
</select>
<br />
<?php } ?>

<?php if ($link != '' || $q != '') { ?>
表示順序：<br />
<select class="" placeholder="" onchange="jump(this)">
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=cbids&o=a&t=<?php echo $t; ?>"<?php if($s=="cbids"&&$o=="a"){?> selected<?php } ?>>価格の安い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=cbids&o=d&t=<?php echo $t; ?>"<?php if($s=="cbids"&&$o=="d"){?> selected<?php } ?>>価格の高い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bids&o=a&t=<?php echo $t; ?>"<?php if($s=="bids"&&$o=="a"){?> selected<?php } ?>>入札の多い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bids&o=d&t=<?php echo $t; ?>"<?php if($s=="bids"&&$o=="d"){?> selected<?php } ?>>入札の少ない順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=end&o=a&t=<?php echo $t; ?>"<?php if($s=="end"&&$o=="a"){?> selected<?php } ?>>残り時間の短い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=end&o=d&t=<?php echo $t; ?>"<?php if($s=="end"&&$o=="d"){?> selected<?php } ?>>残り時間の長い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bidorbuy&o=a&t=<?php echo $t; ?>"<?php if($s=="bidorbuy"&&$o=="a"){?> selected<?php } ?>>即決価格の安い順</option>
<option value="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=bidorbuy&o=d&t=<?php echo $t; ?>"<?php if($s=="bidorbuy"&&$o=="d"){?> selected<?php } ?>>即決価格の高い順</option>
</select>
<br />

<?php if($t==0){ ?>
<a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=1" class="btn-info btn-small">画像なし商品表示</a>
<?php }else{ ?>
<a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=0" class="btn btn-small">画像なし商品非表示</a>
<?php } ?>

<?php if ($link != '') { ?>
<br /><br />
<a href="<?php echo $link; ?>" target="_blank">検索結果：<?php echo number_format((int)$res["totalResultsAvailable"]); ?>件</a>
<?php } ?>
<?php } ?>

<br /><br />
<form method="get">
<input type="hidden" name="p" value='<?php echo $p; ?>'>
<input type="hidden" name="s" value='<?php echo $s; ?>'>
<input type="hidden" name="o" value='<?php echo $o; ?>'>
<input type="hidden" name="t" value='<?php echo $t; ?>'>
<input type="text" class="input-small search-query" name="q" value="<?php echo $q; ?>">
<button type="submit" class="btn">検索</button>
</form>

</div>
<!-- /SPヘッダ・設定 -->

<!-- 表示部 -->
<?php if ($link == '' && $q == '') { ?>
<p class="bold">フリーワード検索</p>
<br />
検索フォームからYahoo!オークション内をフリーワードで検索できます。
<?php } else if ($link == '') { ?>
条件に一致する商品が見つかりませんでした。
<?php } else { ?>

<ul class="thumbnails">
<?php foreach($aid as $val){ ?>
<li><a class="thumbnail" href="<?php echo $item_url[(string)$val]; ?>" target="_blank"><div class="box center">
<div class="picture"><img width="200" src="./img/nowloading.jpg" id="img_<?php echo $val; ?>" alt="<?php echo $title[(string)$val]; ?>" /></div>
<p><?php echo $title[(string)$val]; ?></p>
<p class="bold black">現在価格 <?php echo $price[(string)$val]; ?>円</p>
<?php if($bidorbuy[(string)$val] >0){ ?><p class="black">即決価格 <?php echo $bidorbuy[(string)$val]; ?>円</p><?php } ?>
<p class="black">入札 <?php echo $bids[(string)$val]; ?></p>
<p id="time_<?php echo $val; ?>"></p>
</div></a></li>
<?php } ?>
</ul>
<?php } ?>
<!-- /表示部 -->

<?php if ($link != '') { ?>
<div class="pagination center">
<ul>
<?php if($n > 1){ ?><li><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>&n=<?php echo $n-1; ?>">← 前のページ</a></li><?php } ?>
<li><a><?php echo number_format((int)$res["firstResultPosition"]); ?>～<?php echo number_format((int)($res["firstResultPosition"]+$res["totalResultsReturned"]-1)); ?>件目 / <?php echo number_format((int)$res["totalResultsAvailable"]); ?>件</a></li>
<?php if($res["totalResultsAvailable"]>$res["firstResultPosition"]+$res["totalResultsReturned"]-1){ ?><li><a href="?p=<?php echo $p; ?>&q=<?php echo $q; ?>&s=<?php echo $s; ?>&o=<?php echo $o; ?>&t=<?php echo $t; ?>&n=<?php echo $n+1; ?>">次のページ →</a></li><?php } ?>
</ul>
</div>
<?php } ?>

</div><!--/span-->
<!-- /コンテンツ -->

</div><!--/row-->
</div><!--/.fluid-container-->
<!-- /ページ -->

<br />

<!-- PCボタン -->
<div class="bottom-bar hidden-phone">
<ul class="nav nav-pills">
<li><span class="label label-info"><a href="#top" style="color:white;text-decoration:none;">ページの先頭へ↑</a></span>&nbsp;</li>
<li><a href="http://b.hatena.ne.jp/entry/http://tiger4th.com/sga/" class="hatena-bookmark-button" data-hatena-bookmark-title="ソーシャルゲームオークション" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>&nbsp;</li>
<li><iframe src="http://share.gree.jp/share?url=https%3A%2F%2Fdocs.developer.gree.net%2Fja%2Fconnect%2Fsocialfeedback&type=0&height=20" scrolling="no" frameborder="0" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100px; height:20px;" allowTransparency="true"></iframe></li>
<li><div data-plugins-type="mixi-favorite" data-service-key="a6ddd8466c14088002d70ea125082457f6b3331c" data-size="medium" data-href="http://tiger4th.com/sga/" data-show-faces="false" data-show-count="true" data-show-comment="true" data-width="120"></div><script type="text/javascript">(function(d) {var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//static.mixi.jp/js/plugins.js#lang=ja';d.getElementsByTagName('head')[0].appendChild(s);})(document);</script></li>
<li><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ftiger4th.com%2Fsga%2F&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true"></iframe></li>
<li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://tiger4th.com/sga/" data-text="ソーシャルゲームオークション : GREE・モバゲー・mixiのオークションサーチ" data-lang="ja">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
<li><g:plusone size="medium" href="http://tiger4th.com/sga/"></g:plusone></li>
<li><div><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Ftiger4th.com%2Fsga%2F" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>&nbsp;</div></li>
<li><!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style" addthis:url="http://tiger4th.com/sga/" addthis:title="ソーシャルゲームオークション : GREE・モバゲー・mixiのオークションサーチ">
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e3ab77310f2fc55"></script>
<!-- AddThis Button END --></li>
</ul>
</div>
<!-- /PCボタン -->

<!-- SPボタン -->
<div class="bottom-bar-sp visible-phone">
<br />
<table>
<tr>
<td>
<div data-plugins-type="mixi-favorite" data-service-key="a6ddd8466c14088002d70ea125082457f6b3331c" data-size="medium" data-href="http://tiger4th.com/sga/" data-show-faces="false" data-show-count="true" data-show-comment="true" data-width="120"></div><script type="text/javascript">(function(d) {var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//static.mixi.jp/js/plugins.js#lang=ja';d.getElementsByTagName('head')[0].appendChild(s);})(document);</script>
</td>
<td>
<iframe src="http://share.gree.jp/share?url=https%3A%2F%2Fdocs.developer.gree.net%2Fja%2Fconnect%2Fsocialfeedback&type=0&height=20" scrolling="no" frameborder="0" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100px; height:20px;" allowTransparency="true"></iframe>
</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>
<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://tiger4th.com/sga/" data-text="ソーシャルゲームオークション : GREE・モバゲー・mixiのオークションサーチ" data-lang="ja">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</td>
<td>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ftiger4th.com%2Fsga%2F&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true"></iframe>
</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>
<g:plusone size="medium" href="http://tiger4th.com/sga/"></g:plusone>
</td>
<td>
<a href="http://b.hatena.ne.jp/entry/http://tiger4th.com/sga/" class="hatena-bookmark-button" data-hatena-bookmark-title="ソーシャルゲームオークション" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>
<a href="http://line.naver.jp/msg/text/http%3A%2F%2Ftiger4th.com%2Fsga%2F"><img src="http://www.planetplan.info/img/btn_line2.png" alt="LINEで送る"></a>
</td>
<td>
<span class="label label-info"><a href="#top" style="color:white;text-decoration:none;">ページの先頭へ↑</a></span>
</td>
</tr>
</table>
</div>
<!-- /SPボタン -->

<div class="visible-phone">
<!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
<a href="http://developer.yahoo.co.jp/about">
<img src="http://i.yimg.jp/images/yjdn/yjdn_attbtn1_125_17.gif" title="Webサービス by Yahoo! JAPAN" alt="Web Services by Yahoo! JAPAN" width="125" height="17" border="0" style="margin:15px 15px 15px 15px"></a>
<!-- End Yahoo! JAPAN Web Services Attribution Snippet -->

<!-- admax -->
<script type="text/javascript" src="http://adm.shinobi.jp/s/27dc07d986ae4f8a774946c6195e3af4"></script>
<!-- admax -->
</div>

<img src="http://ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3146778&pid=883039550" height="1" width="1" border="0">
</body>
</html>