<?php
require_once("./src/bootstrap.php");
?>
<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="ja">
	<head>
		<!--============================================== html_head_above -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/forestess/common/inc/html_head_above.html'; ?>
		<!--============================================== /html_head_above -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>送信内容確認画面：お問い合わせ｜株式会社フォレステス｜安心・信頼・品質につながる技術力を追求</title>
		<meta name="description" content="お問い合わせのページです。は、福岡市を拠点に冷媒フロン類回収工事と重量物工事を中心に事業展開を行っております。">
		<meta name="keywords" content="冷媒フロン,フォレステス,福岡,forestess,重量物">
		<meta property="og:title" content="お問い合わせ｜株式会社フォレステス｜安心・信頼・品質につながる技術力を追求">
		<meta property="og:description" content="お問い合わせのページです。は、福岡市を拠点に冷媒フロン類回収工事と重量物工事を中心に事業展開を行っております。">
		<meta property="og:type" content="article">
		<meta property="og:url" content="https://xxxx.com/contact/">
		<meta property="og:image" content="https://xxxx.com/common/img/common/og_image.png">
		<meta property="og:image:alt" content="株式会社フォレステス">
		<!--============================================== html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/forestess/common/inc/html_head.html'; ?>
		<!--============================================== /html_head -->
	</head>

	<body>
		<!--============================================== body_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/forestess/common/inc/body_head.html'; ?>
		<!--============================================== /body_head -->

		<div class="t-wrap">
			<!--============================================== header -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/forestess/common/inc/header.html'; ?>
			<!--============================================== /header -->
			
			<!-- .e-h1 -->
			<div class="e-h1">
				<div class="e-h1__inner">
					<!-- .c-breadcrumb -->
					<nav class="c-breadcrumb">
						<ul class="c-breadcrumb__inner">
							<li class="c-breadcrumb__item"><a href="/forestess/" class="c-breadcrumb__link">TOP</a></li>
							<li class="c-breadcrumb__item"><a href="/forestess/contact/" class="c-breadcrumb__link">お問い合わせ</a></li>
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
			<?php include($_SERVER['DOCUMENT_ROOT']).'/forestess/common/inc/footer.html'; ?>
			<!--============================================== /footer -->
		</div>

		<!--============================================== html_foot -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/forestess/common/inc/html_foot.html'; ?>
		<!--============================================== /html_foot -->
	</body>
</html>