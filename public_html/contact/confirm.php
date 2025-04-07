<?php
require_once("./src/bootstrap.php");
?>
<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="ja">
	<head>
		<!--============================================== html_head_above -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_head_above.html'; ?>
		<!--============================================== /html_head_above -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>送信内容確認画面：お問い合わせ｜株式会社フォレステス｜安心・信頼・品質につながる技術力を追求</title>
		<meta name="description" content="お問い合わせのページです。株式会社フォレステスは、福岡市を拠点に冷媒フロン類回収工事と重量物工事を中心に事業展開を行っております。">
		<meta name="keywords" content="冷媒フロン,フォレステス,福岡,forestess,重量物">
		<meta property="og:title" content="お問い合わせ｜株式会社フォレステス｜安心・信頼・品質につながる技術力を追求">
		<meta property="og:description" content="お問い合わせのページです。株式会社フォレステスは、福岡市を拠点に冷媒フロン類回収工事と重量物工事を中心に事業展開を行っております。">
		<meta property="og:type" content="article">
		<meta property="og:url" content="https://forestess.co.jp/contact/">
		<meta property="og:image" content="https://forestess.co.jp/common/img/common/og_image.png">
		<meta property="og:image:alt" content="株式会社フォレステス">
		<!--============================================== html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_head.html'; ?>
		<!--============================================== /html_head -->
	</head>

	<body class="c-contact-confirm">
		<!--============================================== body_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/body_head.html'; ?>
		<!--============================================== /body_head -->

		<div class="t-wrap">
			<!--============================================== header -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/header.html'; ?>
			<!--============================================== /header -->
			
			<!-- .e-h1 -->
			<div class="e-h1 _contact_">
				<div class="e-h1__inner">
					<div class="e-h1__ttl inview fadeup">
						<h1 class="__en" data-number="03">Contact</h1>
					</div>
				</div>
			</div>
			<!-- /.e-h1 -->
			
			<!-- .l-contents -->
			<div class="l-contents _w-m_">
				<!-- .l-contents__inner -->
				<div class="l-contents__inner">
					
					<!-- .c-contact-form -->
					<div id="form" class="c-contact-form">
						<p class="u-mb-xxl u-al-c _sm-al-l_ inview fadeup">ご入力内容を確認いただき、よろしければ「入力内容を送信する」ボタンを、<br class="u-sm-min">
						修正する場合は「修正する」ボタンをクリックしてください。</p>
						<div class="c-contact-form-flow inview fadeup">
							<p class="c-contact-form-flow__item _flow01_"><span class="__txt">入力</span></p>
							<p class="c-contact-form-flow__item _flow02_"><span class="__txt">確認</span></p>
							<p class="c-contact-form-flow__item _flow03_"><span class="__txt">完了</span></p>
						</div>

						<form method="post">
							<table class="m-table _col1_ u-mb-xl inview fadeup delay01">
								<tbody class="m-table--body">
									<tr>
										<th class="_green_">お問い合わせ内容</th>
										<td><?php echo e($form->get('class')); ?></td>
									</tr>
									<tr>
										<th class="_green_">会社名</th>
										<td><?php echo e($form->get('company')); ?></td>
									</tr>
									<tr>
										<th class="_green_">お名前</th>
										<td><?php echo e($form->get('name')); ?></td>
									</tr>
									<tr>
										<th class="_green_">フリガナ</th>
										<td><?php echo e($form->get('kana')); ?></td>
									</tr>
									<tr>
										<th class="_green_">ご住所</th>
										<td>
											〒 <?php echo e($form->get('zip')); ?><br>
											<?php echo e($form->get('address')); ?>
										</td>
									</tr>
									<tr>
										<th class="_green_">メールアドレス</th>
										<td><?php echo e($form->get('email')); ?></td>
									</tr>
									<tr>
										<th class="_green_">電話番号</th>
										<td><?php echo e($form->get('tel')); ?></td>
									</tr>
									<tr>
										<th class="_green_">お問い合わせ詳細</th>
										<td><?php echo nl2br(e($form->get('comment'))); ?></td>
									</tr>
									<tr>
										<th class="_green_">プライバシーポリシーについて</th>
										<td><?php echo e($form->get('agreement')); ?></td>
									</tr>
								</tbody>
							</table>

							<div class="u-al-fc _sp-c_ c-contact-form__btn">
								<button type="button" class="e-btn-arrow _gray_ u-mr-m _sm-mr-m_" onclick="window.location='./#form';">
									<span class="__ico icon-arrow-left" aria-hidden="true"></span>
									<span class="__txt">修正する</span>
								</button>
								<button type="submit" class="e-btn-arrow">
									<span class="__txt">入力内容を送信する</span>
									<span class="__ico icon-arrow-right" aria-hidden="true"></span>
								</button>
							</div>
						</form>				
					</div>
					<!-- /.c-contact-form -->
				</div>
			</div>
			<!-- /.l-contents -->
			
			<!--============================================== footer -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/footer.html'; ?>
			<!--============================================== /footer -->
		</div>

		<!--============================================== html_foot -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_foot.html'; ?>
		<!--============================================== /html_foot -->
	</body>
</html>