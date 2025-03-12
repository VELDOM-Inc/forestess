<?php
require_once("./src/bootstrap.php");
?>
<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="ja">
	<head>
		<!--============================================== html_head_above -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/ikeda/common/inc/html_head_above.html'; ?>
		<!--============================================== /html_head_above -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>送信内容確認画面：お問い合わせ｜株式会社池田開発｜環境を守る、最前線</title>
		<meta name="description" content="お問い合わせのページです。は、福岡県と佐賀県を事業エリアとして産業廃棄物収集運搬・処分を行っています。">
		<meta name="keywords" content="池田開発,福岡,佐賀,産業廃棄物,収集,運搬,処分">
		<meta property="og:title" content="お問い合わせ｜株式会社池田開発｜環境を守る、最前線">
		<meta property="og:description" content="お問い合わせのページです。は、福岡県と佐賀県を事業エリアとして産業廃棄物収集運搬・処分を行っています。">
		<meta property="og:type" content="article">
		<meta property="og:url" content="https://ikeda-kaihatsu.jp/contact/">
		<meta property="og:image" content="https://ikeda-kaihatsu.jp/common/img/common/og_image.png">
		<meta property="og:image:alt" content="株式会社池田開発">
		<!--============================================== html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/ikeda/common/inc/html_head.html'; ?>
		<!--============================================== /html_head -->
	</head>

	<body>
		<!--============================================== body_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/ikeda/common/inc/body_head.html'; ?>
		<!--============================================== /body_head -->

		<div class="t-wrap">
			<!--============================================== header -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/ikeda/common/inc/header.html'; ?>
			<!--============================================== /header -->
			
			<!-- .e-h1 -->
			<div class="e-h1">
				<div class="e-h1__inner">
					<!-- .c-breadcrumb -->
					<nav class="c-breadcrumb">
						<ul class="c-breadcrumb__inner">
							<li class="c-breadcrumb__item"><a href="/ikeda/" class="c-breadcrumb__link">TOP</a></li>
							<li class="c-breadcrumb__item"><a href="/ikeda/contact/" class="c-breadcrumb__link">お問い合わせ</a></li>
							<li class="c-breadcrumb__item">送信内容確認</li>
						</ul>
					</nav>
					<!-- /.c-breadcrumb -->
					<div class="e-h1__ttl">
						<h1 class="__jp">お問い合わせ</h1>
						<span class="__en">Contact</span>
					</div>
				</div>
			</div>
			<!-- /.e-h1 -->
			
			<!-- .l-contents -->
			<div class="l-contents">
				<!-- .l-contents__inner -->
				<div class="l-contents__inner">
					
					<!-- .c-contact-form -->
					<div id="form" class="c-contact-form">
						<p class="u-mb-xxl u-al-c _sm-al-l_">ご入力内容を確認いただき、よろしければ「入力内容を送信する」ボタンを、<br class="u-sm-min">
						修正する場合は「修正する」ボタンをクリックしてください。</p>

						<form method="post">
							<table class="m-table _sp-col1_ u-mb-xl">
								<tbody class="m-table--body">
									<tr>
										<th class="">お問い合わせの種類</th>
										<td><?php echo e($form->get('class')); ?></td>
									</tr>
									<tr>
										<th class="">会社名 &frasl; 組織名</th>
										<td><?php echo e($form->get('name')); ?></td>
									</tr>
									<tr>
										<th class="">氏名</th>
										<td><?php echo e($form->get('name')); ?></td>
									</tr>
									<tr>
										<th class="">フリガナ</th>
										<td><?php echo e($form->get('kana')); ?></td>
									</tr>
									<tr>
										<th class="">住所</th>
										<td>
											〒 <?php echo e($form->get('zip')); ?><br>
											<?php echo e($form->get('address')); ?>
										</td>
									</tr>
									<tr>
										<th class="">メールアドレス</th>
										<td><?php echo e($form->get('email')); ?></td>
									</tr>
									<tr>
										<th class="">電話番号</th>
										<td><?php echo e($form->get('tel')); ?></td>
									</tr>
									<tr>
										<th class="">お問い合わせ詳細</th>
										<td><?php echo nl2br(e($form->get('comment'))); ?></td>
									</tr>
									<tr>
										<th class="">個人情報の取り扱い</th>
										<td><?php echo e($form->get('agreement')); ?></td>
									</tr>
								</tbody>
							</table>

							<div class="u-al-fc _sp-c_ c-contact-form__btn">
								<button type="button" class="e-btn-arrow _gray_ js-splitText _arrow-left_ u-mr-m _sm-mr-m_" onclick="window.location='./#form';">
									修正する
								</button>
								<button type="submit" class="e-btn-arrow _yellow_ js-splitText _arrow-right_">
									入力内容を送信する
								</button>
							</div>
						</form>				
					</div>
					<!-- /.c-contact-form -->
				</div>
			</div>
			<!-- /.l-contents -->
			
			<!--============================================== footer -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/ikeda/common/inc/footer.html'; ?>
			<!--============================================== /footer -->
		</div>

		<!--============================================== html_foot -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/ikeda/common/inc/html_foot.html'; ?>
		<!--============================================== /html_foot -->
	</body>
</html>