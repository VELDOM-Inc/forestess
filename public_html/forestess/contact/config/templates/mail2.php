下記内容のお問い合わせがありました。

<?php if ($__serial) : ?>
[お問い合わせ番号] <?php echo $__serial ?> 
<?php endif; ?>

[お問い合わせの種類] <?php echo $class ?> 

[お名前] <?php echo $name ?>（<?php echo $kana ?>） 様

[会社名] <?php echo $company ?> 

[ご住所] 
〒 <?php echo $zip ?> 
<?php echo $address ?> 

[メールアドレス] <?php echo $email ?> 

[電話番号] <?php echo $tel ?> 

[お問い合わせ詳細]
<?php echo $comment ?>　
