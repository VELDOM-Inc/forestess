<?php

return array (
	array (
		'field' => 'class',
		'label' => 'お問い合わせ内容',
		'rules' => 'trim',
		'options' => array('会社について', 'その他')
	),
	array (
		'field' => 'name',
		'label' => 'お名前',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'kana',
		'label' => 'フリガナ',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'company',
		'label' => '会社名',
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
		'label' => 'プライバシーポリシーについてを確認し同意する',
		'rules' => 'required',
		'options' => array('プライバシーポリシーについてを確認し同意する')
	),
);
