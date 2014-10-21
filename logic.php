<?php
ini_set('display_errors', 0);

$vcurl = 'http://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3146778&pid=883039550&vc_url=';

// メニューリスト
$page['gr'] = "GREE";
$page['mo'] = "モバゲー";
$page['mi'] = "mixi";
$page['so'] = "ソーシャルゲーム";
$page['ne'] = "オンラインゲーム";

$menu['gr'] = array(
	array('name'=>'すべて', 'search'=>''),
	array('name'=>'アイドルマスター ミリオンライブ！', 'search'=>'(アイドルマスター アイマス グリマス ミリオンライブ)'),
	array('name'=>'AKB48ステージファイター', 'search'=>'(AKB ステージファイター)'),
	array('name'=>'海賊王国コロンブス', 'search'=>'(海賊コロンブス 海賊王国コロンブス)'),
	array('name'=>'海賊道', 'search'=>'海賊道'),
	array('name'=>'ガルショ', 'search'=>'ガルショ'),
	array('name'=>'ガンダムマスターズ', 'search'=>'(ガンダムマスターズ ガンマス)'),
	array('name'=>'クローズ×WORST～最強伝説～', 'search'=>'(クローズ WORST)'),
	array('name'=>'幻獣姫', 'search'=>'幻獣姫'),
	array('name'=>'聖戦ケルベロス', 'search'=>'聖戦ケルベロス'),
	array('name'=>'精霊ファンタジア', 'search'=>'精霊ファンタジア'),
	array('name'=>'戦国キングダム', 'search'=>'戦国キングダム'),
	array('name'=>'探検ドリランド', 'search'=>'ドリランド'),
	array('name'=>'超破壊!!バルバロッサ', 'search'=>'バルバロッサ'),
	array('name'=>'デジモンコレクターズ', 'search'=>'(デジモン デジコレ))'),
	array('name'=>'ドラゴンコレクション', 'search'=>'(ドラゴンコレクション ドラコレ)'),
	array('name'=>'ドラゴンタクティクス', 'search'=>'(ドラゴンタクティクス ドラタク)'),
	array('name'=>'秘書コレクション', 'search'=>'(秘書コレクション 秘書コレ)'),
	array('name'=>'プロ野球ドリームナイン', 'search'=>'ドリームナイン'),
	array('name'=>'幽☆遊☆白書 魔界統一最強バトル', 'search'=>'幽遊白書'),
	array('name'=>'ワールドサッカーコレクション', 'search'=>'(ワールドサッカーコレクション ワサコレ)'),
	array('name'=>'アカウント', 'search'=>'アカウント'),
);

$menu['mo'] = array(
	array('name'=>'すべて', 'search'=>''),
	array('name'=>'アイドルマスター シンデレラガールズ', 'search'=>'(アイドルマスター アイマス モバマス シンデレラガールズ)'),
	array('name'=>'怪盗ロワイヤル', 'search'=>'怪盗ロワイヤル'),
	array('name'=>'仮面ライダーレジェンド', 'search'=>'仮面ライダー'),
	array('name'=>'ガルショ', 'search'=>'ガルショ'),
	array('name'=>'ガンダムカードコレクション', 'search'=>'(ガンダムカードコレクション ガンコレ)'),
	array('name'=>'キャプテン翼～つくろうドリームチーム～', 'search'=>'(キャプテン翼 キャプ翼)'),
	array('name'=>'キン肉マン超人タッグオールスターズ', 'search'=>'キン肉マン'),
	array('name'=>'クローズ×WORST～最強伝説～', 'search'=>'(クローズ WORST)'),
	array('name'=>'新テニスの王子様 ベストオーダー', 'search'=>'(テニスの王子様 テニプリ)'),
	array('name'=>'スペースデブリーズ', 'search'=>'スペースデブリーズ'),
	array('name'=>'住み着き妖精 セトルリン', 'search'=>'セトルリン'),
	array('name'=>'聖闘士星矢ギャラクシーカードバトル', 'search'=>'聖闘士星矢'),
	array('name'=>'ちょこっとファーム', 'search'=>'ちょこっとファーム'),
	array('name'=>'ToHeart ハートフルパーティ', 'search'=>'ToHeart'),
	array('name'=>'農園ホッコリーナ', 'search'=>'ホッコリーナ'),
	array('name'=>'はじめの一歩 THE FIGHTING!', 'search'=>'はじめの一歩'),
	array('name'=>'HUNTER×HUNTER バトルコレクション', 'search'=>'(ハンター hunter))'),
	array('name'=>'Fate/Zero [Next Encounter]', 'search'=>'fate'),
	array('name'=>'ワールドサッカーコレクション', 'search'=>'(ワールドサッカーコレクション ワサコレ)'),
	array('name'=>'ONE PIECE グランドコレクション', 'search'=>'(onepiece ワンピース グランドコレクション グラコレ)'),
	array('name'=>'アカウント', 'search'=>'アカウント'),
);

$menu['mi'] = array(
	array('name'=>'すべて', 'search'=>''),
	array('name'=>'ガルショ', 'search'=>'ガルショ'),
	array('name'=>'キャプテン翼～つくろうドリームチーム～', 'search'=>'キャプテン翼'),
	array('name'=>'神魔×継承 ラグナブレイク', 'search'=>'ラグナブレイク'),
	array('name'=>'戦国サーガ', 'search'=>'戦国サーガ'),
	array('name'=>'単車の虎', 'search'=>'単車の虎'),
	array('name'=>'テイルズオブキズナ', 'search'=>'テイルズ'),
	array('name'=>'ドラゴンキャバリア', 'search'=>'ドラゴンキャバリア'),
	array('name'=>'ドラゴンタクティクス', 'search'=>'(ドラゴンタクティクス ドラタク)'),
	array('name'=>'ブラウザ三国志', 'search'=>'ブラウザ三国志'),
	array('name'=>'アカウント', 'search'=>'アカウント'),
);

$menu['so'] = array(
	array('name'=>'蒼の三国志', 'search'=>'蒼の三国志'),
	array('name'=>'ガールフレンド(仮)', 'search'=>'ガールフレンド(仮)'),
	array('name'=>'艦隊これくしょん', 'search'=>'(艦隊これくしょん 艦これ)'),
	array('name'=>'戦国IXA', 'search'=>'戦国IXA'),
	array('name'=>'チェインクロニクル', 'search'=>'(チェインクロニクル チェンクロ)'),
	array('name'=>'パズル＆ドラゴンズ', 'search'=>'(パズル＆ドラゴンズ パズドラ)'),
	array('name'=>'ぷよぷよ!!クエスト', 'search'=>'(ぷよぷよクエスト ぷよクエ)'),
	array('name'=>'魔法使いと黒猫のウィズ', 'search'=>'(魔法使いと黒猫のウィズ 黒ウィズ)'),
	array('name'=>'モンスターストライク', 'search'=>'(モンスターストライク モンスト)'),
	array('name'=>'ラブライブ！スクールアイドルフェスティバル', 'search'=>'(スクールアイドルフェスティバル スクフェス)'),
);

$menu['ne'] = array(
	array('name'=>'ドラゴンクエストX', 'search'=>'(ドラゴンクエストX ドラゴンクエスト10 DQ10 DQX ドラクエ10 ドラクエX)', 'category'=>2084217067),
	array('name'=>'ファイナルファンタジーXI', 'search'=>'(ファイナルファンタジーXI ファイナルファンタジー11 FF11 FFXI)', 'category'=>2084022662),
	array('name'=>'ファイナルファンタジーXIV (Windows)', 'search'=>'(ファイナルファンタジーXIV ファイナルファンタジー14 FF14 FFXIV)', 'category'=>2084022662),
	array('name'=>'ファイナルファンタジーXIV (PlayStation)', 'search'=>'(ファイナルファンタジーXIV ファイナルファンタジー14 FF14 FFXIV )', 'category'=>22844),
	array('name'=>'メイプルストーリー', 'search'=>'メイプルストーリー', 'category'=>2084022662),
	array('name'=>'モンスターハンターフロンティア (Windows)', 'search'=>'(モンスターハンター モンハン MHF)', 'category'=>2084022662),
	array('name'=>'モンスターハンターフロンティア (Xbox)', 'search'=>'(モンスターハンター モンハン MHF )', 'category'=>2084235548),
	array('name'=>'ラグナロクオンライン', 'search'=>'ラグナロクオンライン', 'category'=>2084022662),
	// array('name'=>'TERA', 'search'=>'TERA', 'category'=>2084022662),
	// array('name'=>'信長の野望Online', 'search'=>'信長の野望', 'category'=>2084022662),
	// array('name'=>'ファンタシースターオンライン2', 'search'=>'(ファンタシースターオンライン2 PSO2)', 'category'=>2084022662),
	// array('name'=>'リネージュ', 'search'=>'(リネージュ1 lineage1)', 'category'=>2084022662),
	// array('name'=>'リネージュII', 'search'=>'(リネージュ2 lineage2 リネージュII lineageII)', 'category'=>2084022662),
	// array('name'=>'ディアブロ3', 'search'=>'(ディアブロ3 diablo3)', 'category'=>2084022662),
);

// プラットフォーム
$p = 'mo';
if (isset($_GET['p'])) {
	$p = $_GET['p'];
}

$plat = 'GREE';
switch ($p) {
	case 'gr':
		$plat = 'GREE';
		break;
	case 'mo':
		$plat = '(モバゲー mobage)';
		break;
	case 'mi':
		$plat = '(mixi ミクシィ)';
		break;
	case 'so':
		$plat = '';
		break;
	case 'ne':
		$plat = '';
		break;
	case 'ot':
		$plat = '';
		break;
}

// クエリ
$q = '';
if (isset($_GET['q']) && $_GET['q'] != '') {
	$q = $_GET['q'];
}

$query = $plat;
if ($q != '') {
	$query .= ' '.$q;
} elseif ($p == 'so') {
	$q = $menu['so'][0]['search'];
	$query = $menu['so'][0]['search'];
} elseif ($p == 'ne') {
	$q = $menu['ne'][0]['search'];
	$query = $menu['ne'][0]['search'];
}

// ソート順
$s = 'end';
if (isset($_GET['s']) && $_GET['s'] != '') {
	$s = $_GET['s'];
}

// 昇順降順
$o = 'a';
if (isset($_GET['o']) && $_GET['o'] != '') {
	$o = $_GET['o'];
}

// 画像有無
$t = 1;
if (isset($_GET['t']) && $_GET['t'] == 0) {
	$t = 0;
}

// ページ番号
$n = 1;
if (isset($_GET['n']) && $_GET['n'] != '') {
	$n = $_GET['n'];
}

$res_url = 'http://auctions.yahooapis.jp/AuctionWebService/V2/search?appid='.$app_id.'&query='.$query.'&sort='.$s.'&order='.$o.'&thumbnail='.$t.'&page='.$n;

// カテゴリ
$c = '';
if (isset($_GET['c']) && $_GET['c'] != '') {
	$c = $_GET['c'];
	$res_url .= '&category='.$c;
}

$res = simplexml_load_file($res_url);

if ($res["totalResultsAvailable"] <= 0) {
	$link = '';
} else {
	// オークションIDリスト 50件
	foreach ($res->Result->Item as $val) {
		$aid[] = $val->AuctionID;
		$title[(string)$val->AuctionID] = $val->Title;
		$item_url[(string)$val->AuctionID] = $vcurl . $val->AuctionItemUrl;
		$price[(string)$val->AuctionID] = number_format((int)$val->CurrentPrice);
		$bidorbuy[(string)$val->AuctionID] = number_format((int)$val->BidOrBuy);
		$bids[(string)$val->AuctionID] = number_format((int)$val->Bids);
	}
	
	$so = "01";
	if ($s == "cbids" && $o == "a")        $so = "01";
	elseif ($s == "cbids" && $o == "d")    $so = "02";
	elseif ($s == "bids" && $o == "a")     $so = "03";
	elseif ($s == "bids" && $o == "d")     $so = "04";
	elseif ($s == "end" && $o == "a")      $so = "05";
	elseif ($s == "end" && $o == "d")      $so = "06";
	elseif ($s == "bidorbuy" && $o == "a") $so = "07";
	elseif ($s == "bidorbuy" && $o == "d") $so = "08";
	
	// Y!URL
	$link = 'http://auctions.search.yahoo.co.jp/search?mode=1&n=50&b='.(($n-1)*50+1).'&p='.$query.'&select='.$so.'&thumb='.$t.'&auccat='.$c;
	$link = $vcurl.rawurlencode($link);
}

?>