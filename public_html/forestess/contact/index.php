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
		<title>お問い合わせ｜株式会社フォレステス｜安心・信頼・品質につながる技術力を追求</title>
		<meta name="description" content="お問い合わせのページです。株式会社フォレステスは、福岡市を拠点に冷媒フロン類回収工事と重量物工事を中心に事業展開を行っております。">
		<meta name="keywords" content="冷媒フロン,フォレステス,福岡,forestess,重量物">
		<meta property="og:title" content="お問い合わせ｜株式会社フォレステス｜安心・信頼・品質につながる技術力を追求">
		<meta property="og:description" content="お問い合わせのページです。株式会社フォレステスは、福岡市を拠点に冷媒フロン類回収工事と重量物工事を中心に事業展開を行っております。">
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
							<li class="c-breadcrumb__item">お問い合わせ</li>
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
					<!-- .c-contact-form-tel -->
					<div class="m-box _blue_ _radius_ c-contact-form-tel">
						<h2 class="c-contact-form-tel__ttl inview fadeup">お電話でのお問い合わせ</h2>
						<p class="c-contact-form-tel__txt inview fadeup delay01">TEL：<a href="tel:092-408-1281" class="__tel">092-408-1281</a></p>
						<div class="c-contact-form-time inview fadeup delay02">
							<p class="c-contact-form-time__txt">受付時間：月～金曜日 9：30～17：30</p>
							<div class="c-contact-form-time__area">
								<span class="__label">対応エリア</span>
								<p class="__txt">福岡県・佐賀県</p>
							</div>
						</div>
					</div>
					<!-- /.c-contact-form-tel -->

					<!-- .c-contact-form -->
					<section id="form" class="c-contact-form">
						<h2 class="e-h4 inview fadeup">下記のお問い合わせフォーム<br class="u-sm-max">よりお気軽にご相談ください</h2>
						<p class="u-mb-xl inview fadeup delay01">当ページでのお問い合わせについては、3営業日以内に返信させていただいております。<br>
						※3営業日を過ぎても当社から何もアクセスがない場合は、当社へ直接お電話（TEL：<a href="tel:092-408-128">092-408-1281</a>）ください。<br>
						※ご記入いただいたメールアドレスの誤記やメール受信設定等が原因でお客様にメールを返信できない場合があります。<br>
						※「必須」は入力必須項目です。</p>

						<?php if ($form->is_error()) : ?>
							<div class="m-box _error_ u-mb-xl _radius_ inview fadeup">
								<p class="__ttl"><span class="icon-error __ico" aria-hidden="true"></span>入力内容にエラーがあります。</p>
								<?php echo $form->errors() ?>
							</div>
						<?php endif; ?>

						<form method="post" enctype="multipart/form-data" autocomplete="off" action="#form" class="h-adr">
						<input type="hidden" class="p-country-name" value="Japan">

							<table class="m-table _sp-col1_ u-mb-xl inview fadeup delay02">
								<tbody class="m-table--body">
									<tr>
										<th class="_flex_">お問い合わせの種類<span class="e-label">必須</span></th>
										<td class="<?php if ($form->is_error('class')) : ?>error<?php endif; ?>">
											<?php foreach($form->get_options('class') as $class) : ?>
											<label class="e-form-radio u-mr-m">
												<input type="radio" name="class" value="<?php echo $class ?>" class="__elem" <?php echo $form->checked('class', $class) ?>>
												<span class="__txt"><?php echo $class ?></span>
											</label>
											<?php endforeach; ?>
											<?php echo $form->error('class', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="">会社名 &frasl; 組織名</th>
										<td class="<?php if ($form->is_error('company')) : ?> error<?php endif; ?>">
											<input type="text" name="company" class="e-form-text" value="<?php echo e($form->get('company')); ?>" placeholder="例）株式会社フォレステス">
											<?php echo $form->error('company', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_flex_">氏名<span class="e-label">必須</span></th>
										<td class="<?php if ($form->is_error('name')) : ?>error<?php endif; ?>">
											<input type="text" name="name" class="e-form-text" value="<?php echo e($form->get('name')); ?>" placeholder="例）山田 太郎">
											<?php echo $form->error('name', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_flex_">フリガナ<span class="e-label">必須</span></th>
										<td class="<?php if ($form->is_error('kana')) : ?> error<?php endif; ?>">
											<input type="text" name="kana" class="e-form-text" value="<?php echo e($form->get('kana')); ?>" placeholder="例）ヤマダタロウ">
											<?php echo $form->error('kana', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="">住所</th>
										<td class="<?php if ($form->is_error('zip')) : ?> error<?php endif; ?> <?php if ($form->is_error('address')) : ?> error<?php endif; ?>">
											〒<input name="zip" type="text" value="<?php echo e($form->get('zip')); ?>" class="u-ml-xs e-form-text p-postal-code _w-s_" size="8" maxlength="8" placeholder="例）818-0100">
											<input name="address" type="text" value="<?php echo e($form->get('address')); ?>" class="u-mt-s p-region p-locality p-street-address p-extended-address e-form-text" placeholder="例）福岡県太宰府市大字北谷1124-24">
											<?php echo $form->error('zip', '<div class="e-alert">', '</div>'); ?>
											<?php echo $form->error('address', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_flex_">メールアドレス<span class="e-label">必須</span></th>
										<td class="<?php if ($form->is_error('email')) : ?>error<?php endif; ?>">
											<input type="email" name="email" class="e-form-text" value="<?php echo e($form->get('email')); ?>" placeholder="例）info@XXXXXX.com">
											<?php echo $form->error('email', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="">電話番号</th>
										<td class="<?php if ($form->is_error('tel')) : ?>error<?php endif; ?>">
											<input type="tel" name="tel" class="e-form-text _w-m_" value="<?php echo e($form->get('tel')); ?>" placeholder="例）092-408-1281">
											<?php echo $form->error('tel', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_flex_">お問い合わせ詳細<span class="e-label">必須</span></th>
										<td class="<?php if ($form->is_error('comment')) : ?>error<?php endif; ?>">
											<textarea name="comment" cols="50" rows="4" class="e-form-textarea"><?php echo e($form->get('comment')); ?></textarea>
											<?php echo $form->error('comment', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_flex_">個人情報の取り扱い<span class="e-label">必須</span></th>
										<td class="<?php if ($form->is_error('agreement')) : ?>error<?php endif; ?>">
											<?php foreach($form->get_options('agreement') as $agreement) : ?>
											<label class="e-form-check">
												<input type="checkbox" name="agreement" id="agreement" class="__elem" value="<?php echo $agreement ?>"<?php echo $form->checked('agreement', $agreement) ?>>
												<span class="__txt"><?php echo $agreement ?></span>
											</label>	
											<p class="c-contact-form__txt"><a href="/forestess/privacy/" class="link-underline">プライバシーポリシーはこちら</a></p>
											<?php endforeach; ?>
											<?php if($form->error('agreement')) : ?><div class="e-alert">※個人情報取り扱いについてご同意いただけない場合は、ご利用いただけません。</div><?php endif; ?>
										</td>
									</tr>
								</tbody>
							</table>

							<div class="u-al-fc inview fadeup delay02">
								<button class="e-btn-arrow _yellow_ _m0_ js-splitText _arrow-right_">
									確認画面へ
								</button>
							</div>
						</form>
					</section>
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
		<script src="//yubinbango.github.io/yubinbango/yubinbango.js"></script>
	</body>
</html>