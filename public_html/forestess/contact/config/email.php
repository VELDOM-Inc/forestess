<?php

return array(
	
	array(

		// 顧客向けメールのfrom名前
		'name' => '株式会社フォレステス',

		// 送信元メールアドレス
		'from' => 'info@veldom02.xsrv.jp',

		// 送信先メールアドレス
		'to' => '', // input['name="email"'] に送信する場合は空

		// CCメールアドレス
		'cc' => '',

		// BCCメールアドレス
		'bcc' => '',

		// 顧客向けメールの件名
		'subject' => '【株式会社フォレステス】お問い合わせありがとうございます',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail1.php',

		// メールアドレスフィールド
		'field' => 'email', // email 以外の場合に指定

		// ファイルを添付する場合 true 添付しない場合 false
		'attachment' => false
		
	),
	
	array(

		// 管理者向けメールのfrom名前
		'name' => '株式会社フォレステス',

		// 送信元メールアドレス
		'from' => 'info@veldom02.xsrv.jp',

		// 送信先メールアドレス
		// class（区分）の選択によって送信先を変更する例
		'to' => 'contact@forestess.co.jp',

		// CCメールアドレス
		'cc' => '',

		// BCCメールアドレス
		'bcc' => '',

		// 管理者向けメールの件名
		'subject' => '【お問い合わせフォーム】HPよりお問い合わせがありました',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail2.php',

		// ファイルを添付する場合 true 添付しない場合 false
		'attachment' => false,

		// 項目の値によって送信先を変更したい場合に指定
		// この場合、class（区分）の項目によって to が変わる
		// 不要な場合はコメントアウト
		'to_key' => 'class'
	),

);
