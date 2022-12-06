<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="ポートフォリオサイトのお問い合わせフォーム">
	<meta name="robots" content="noindex" />
    <meta name="robots" content="nofollow" />
	<title>お問い合わせフォーム</title>
    <link rel="icon" href="../images/favicon.ico" id="favicon">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon-180x180.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/form_style.css">
	<script type="text/javascript" src="../js/contact.js"></script>
</head>
<body>
	<div><h1>お問合せ</h1></div>
	<div><h2>Contact　Us</h2></div>
	<div>
		<form action="confirm.php" method="post" name="form" onsubmit="return validate()">
		<!-- autocomplete="off"で予測変換と項目上4つの背景変化を無効化 -->
			<p class="input_p">お問い合わせ内容をご入力の上、「確認」ボタンをクリックしてください。</p>
			<div>
				<div>
					<label>お名前/Name<br><span>必須/Required</span></label>
					<input type="text" name="name" placeholder="例）山田太郎" value=""><br>
				</div>
				<div>
					<label>かな/Furigana<br><span>必須/Required</span></label>
					<input type="text" name="furigana" placeholder="例）やまだたろう" value="">
				</div>
				<div>
					<label>メール/E-mail<br><span>必須/Required</span></label>
					<input type="email" name="email" placeholder="例）guest@example.com" value="">
				</div>
				<div>
					<label>電話番号/Tel<br><span>必須/Required</span></label>
					<input type="text" name="tel" placeholder="例）0000000000" value="">
				</div>
				<div>
					<label>項目/Items<br><span>必須/Required</span></label>
					<select class="select" name="item">
						<option value="">お問い合わせ項目を選択してください</option>
						<option value="ギャラリーについてのお問い合わせ">制作等のご依頼</option>
						<option value="その他のお問い合わせ・ご意見・ご感想">その他のお問い合わせ・ご意見・ご感想</option>
					</select><!-- select -->
				</div>
				<div>
					<label>内容/Contents<br><span>必須/Required</span></label>
					<textarea name="content" rows="5" placeholder="お問合せ内容を入力"></textarea>
				</div>
			</div>
			<div class="input_btn">
				<button type="button">
					<a href="../index.html">戻る/Back</a>
				</button>
				<button type="submit">確認/Confirm</button>
			</div><!-- input_btn -->
		</form>
	</div>
<footer>
<p><small>&copy;2022&nbsp;Masato&nbsp;UESAKA</small></p>
</footer>
</body>
</html>