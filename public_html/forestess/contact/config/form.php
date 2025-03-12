<?php

return array (
	array (
		'field' => 'class',
		'label' => 'お問い合わせの種類',
		'rules' => 'trim|required',
		'options' => array('産業廃棄物について', '会社について', 'その他')
	),
	array (
		'field' => 'name',
		'label' => '氏名',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'kana',
		'label' => 'フリガナ',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'company',
		'label' => '会社名／組織名',
		'rules' => 'trim'
	),
	array (
		'field' => 'zip',
		'label' => '郵便番号',
		'rules' => 'trim|max_length[7]'
	),
	array (
		'field' => 'address',
		'label' => '住所',
		'rules' => 'trim'
	),
	array (
		'field' => 'tel',
		'label' => '電話番号',
		'rules' => 'trim|tel'
	),
	array (
		'field' => 'email',
		'label' => 'メールアドレス',
		'rules' => 'trim|required|email'
	),
	array (
		'field' => 'comment',
		'label' => 'お問い合わせ詳細',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'agreement',
		'label' => '個人情報取り扱いについて同意する',
		'rules' => 'required',
		'options' => array('個人情報取り扱いについて同意する')
	),
);
