<?php
require_once("./src/bootstrap.php");

//reCAPTCHA
$secretKey = '6Lf46wkrAAAAAP5JoRrSInZa9LePG92m408Tbfah';
$captchaResponse = $_POST['g-recaptcha-response'];
$verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captchaResponse}");
$responseData = json_decode($verifyResponse);

?>
<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="ja">
	<head>
		<!--============================================== html_head_above -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_head_above.html'; ?>
		<!--============================================== /html_head_above -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>お問い合わせ｜株式会社フォレステス｜安心・信頼・品質につながる技術力を追求</title>
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

	<body class="c-contact">
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
					<!-- .c-contact-form-tel -->
					<div class="m-box _border_ c-contact-form-tel">
						<h2 class="c-contact-form-tel__ttl inview fadeup">お電話でのお問い合わせ</h2>
						<div class="c-contact-form-tel__txt inview fadeup delay01">
							<p class="__tel">TEL. <a href="tel:092-419-2557" class="__link">092-419-2557</a></p>
							<p class="__time">受付時間：月～金曜日 9：00～17：00</p>
						</div>
					</div>
					<!-- /.c-contact-form-tel -->

					<!-- .c-contact-form -->
					<section id="form" class="c-contact-form">
						<h2 class="e-h4 inview fadeup">下記のお問い合わせフォームよりお気軽にご相談ください。</h2>
						<p class=" inview fadeup delay01 u-mb-l">当ページでのお問い合わせおよびお見積依頼のお申込については、<br class="u-sm-min">3営業日以内に返信させていただいております。</p>
						<p class=" inview fadeup delay01 u-mb-xxs">3営業日を過ぎても当社から何もアクセスがない場合は、当社へ直接お電話（TEL. <a href="tel:092-419-2557">092-419-2557</a>）ください。</p>
						<p class=" inview fadeup delay01 u-mb-xxs">ご記入いただいたメールアドレスの誤記やメール受信設定等が原因でお客様にメールを返信できない場合があります。</p>
						<p class=" inview fadeup delay01 u-mb-xl"><span class="u-c-red">※</span>は必須項目です。</p>

						<div class="c-contact-form-flow inview fadeup">
							<p class="c-contact-form-flow__item _flow01_"><span class="__txt">入力</span></p>
							<p class="c-contact-form-flow__item _flow02_"><span class="__txt">確認</span></p>
							<p class="c-contact-form-flow__item _flow03_"><span class="__txt">完了</span></p>
						</div>
						
						<?php if ($form->is_error()) : ?>
							<div class="m-box _error_ u-mb-xl inview fadeup">
								<p class="__ttl"><span class="icon-error __ico" aria-hidden="true"></span>入力内容にエラーがあります。</p>
								<?php echo $form->errors() ?>
							</div>
						<?php endif; ?>

						<form method="post" enctype="multipart/form-data" autocomplete="off" action="#form" class="h-adr" id="contact_form">
						<input type="hidden" class="p-country-name" value="Japan">

							<table class="m-table _col1_ u-mb-xl inview fadeup delay02">
								<tbody class="m-table--body">
									<tr>
										<th class="_green_">お問い合わせ内容</th>
										<td class="<?php if ($form->is_error('class')) : ?>error<?php endif; ?>">
											<?php foreach($form->get_options('class') as $class) : ?>
											<label class="e-form-check u-mr-m">
												<input type="checkbox" name="class" class="__elem" value="<?php echo $class ?>"<?php echo $form->checked('class', $class) ?>>
												<span class="__txt"><?php echo $class ?></span>
											</label>
											<?php endforeach; ?>
											<?php echo $form->error('class', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_green_">会社名</th>
										<td class="<?php if ($form->is_error('company')) : ?> error<?php endif; ?>">
											<input type="text" name="company" class="e-form-text" value="<?php echo e($form->get('company')); ?>" placeholder="会社名を入力してください">
											<?php echo $form->error('company', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_green_">お名前 <sup class="u-c-red">※</sup></th>
										<td class="<?php if ($form->is_error('name')) : ?>error<?php endif; ?>">
											<input type="text" name="name" class="e-form-text _w-m_" value="<?php echo e($form->get('name')); ?>" placeholder="お名前を入力してください">
											<?php echo $form->error('name', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_green_">フリガナ <sup class="u-c-red">※</sup></th>
										<td class="<?php if ($form->is_error('kana')) : ?> error<?php endif; ?>">
											<input type="text" name="kana" class="e-form-text _w-m_" value="<?php echo e($form->get('kana')); ?>" placeholder="フリガナを入力してください">
											<?php echo $form->error('kana', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_green_">ご住所</th>
										<td class="<?php if ($form->is_error('zip')) : ?> error<?php endif; ?> <?php if ($form->is_error('address')) : ?> error<?php endif; ?>">
											〒<input name="zip" type="text" value="<?php echo e($form->get('zip')); ?>" class="u-ml-xs e-form-text p-postal-code _w-s_" id="input_name" size="8" maxlength="8" placeholder="0123456">
											<p class="u-mt-xxxs">※郵便番号はハイフンなしで入力してください（例: 0123456）</p>
											<input name="address" type="text" value="<?php echo e($form->get('address')); ?>" class="u-mt-s p-region p-locality p-street-address p-extended-address e-form-text" placeholder="ご住所を入力してください">
											<p class="u-mt-xxxs">※マンション名・建物名もご入力ください</p>
											<?php echo $form->error('zip', '<div class="e-alert">', '</div>'); ?>
											<?php echo $form->error('address', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_green_">メールアドレス <sup class="u-c-red">※</sup></th>
										<td class="<?php if ($form->is_error('email')) : ?>error<?php endif; ?>">
											<input type="email" name="email" class="e-form-text" value="<?php echo e($form->get('email')); ?>" placeholder="メールアドレスを入力してください">
											<?php echo $form->error('email', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_green_">電話番号</th>
										<td class="<?php if ($form->is_error('tel')) : ?>error<?php endif; ?>">
											<input type="tel" name="tel" class="e-form-text _w-m_" value="<?php echo e($form->get('tel')); ?>" placeholder="電話番号を入力してください">
											<p class="u-mt-xxxs">※電話番号はハイフンなしで入力してください（例: 0123456789）</p>
											<?php echo $form->error('tel', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_green_">お問い合わせ詳細 <sup class="u-c-red">※</sup></th>
										<td class="<?php if ($form->is_error('comment')) : ?>error<?php endif; ?>">
											<textarea placeholder="お問い合わせ内容の詳細を入力してください" name="comment" cols="50" rows="4" class="e-form-textarea"><?php echo e($form->get('comment')); ?></textarea>
											<?php echo $form->error('comment', '<div class="e-alert">', '</div>'); ?>
										</td>
									</tr>
									<tr>
										<th class="_green_">プライバシーポリシーについて <sup class="u-c-red">※</sup></th>
										<td class="<?php if ($form->is_error('agreement')) : ?>error<?php endif; ?>">
											<p class="u-mb-m">ご入力いただいた内容については、「<a href="/forestess/privacy/" class="link-underline">プライバシーポリシー</a> 」に基づき、適切に管理いたします。<br>ページ内容をお読みいただき、ご同意の上、確認ページへお進みください。</p>
											<?php foreach($form->get_options('agreement') as $agreement) : ?>
											<label class="e-form-check">
												<input type="checkbox" name="agreement" id="agreement" class="__elem" value="<?php echo $agreement ?>"<?php echo $form->checked('agreement', $agreement) ?>>
												<span class="__txt"><?php echo $agreement ?></span>
											</label>	
											<?php endforeach; ?>
											<?php if($form->error('agreement')) : ?><div class="e-alert">※プライバシーポリシーについてご同意いただけない場合は、ご利用いただけません。</div><?php endif; ?>
										</td>
									</tr>
								</tbody>
							</table>

							<div class="u-al-fc inview fadeup delay02">
								<button class="e-btn-arrow _m0_ _w-l_" data-sitekey="6Lf46wkrAAAAABsUAK27yunPgrUiozjsWMFYchpm">
									<span class="__txt">確認ページへ進む</span>
									<span class="__ico icon-arrow-right" aria-hidden="true"></span>
								</button>
							</div>
						</form>
					</section>
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
		<script src="//yubinbango.github.io/yubinbango/yubinbango.js"></script>
		<script src="https://www.google.com/recaptcha/api.js?render=6Lf46wkrAAAAABsUAK27yunPgrUiozjsWMFYchpm"></script>
		<script type="text/javascript">
			//費用は数値しか入力できない
			$('#input_name').on('input', function() {
				let value = $(this).val();
				$(this).val(value.replace(/[^0-9]+/g, ''));
			});
			//reCAPTCHA 
			function onClick(e) {
  				e.preventDefault();
				grecaptcha.ready(function() {
					grecaptcha.execute('6Lf46wkrAAAAABsUAK27yunPgrUiozjsWMFYchpm', {
						action: 'submit'
					}).then(function(token) {

					});
				});
			}
			function onSubmit(token) {
				const form = document.getElementById("c-form");
				if (!(form).reportValidity()) {
					return false;
				} else {
					form.submit();
				}
			}
		</script>
	</body>
</html>