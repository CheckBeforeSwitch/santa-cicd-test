<?php
//ブログメタデータ、お知らせ機能およびブログ一覧機能で使用するので必ず指定すること
$blog_title = '花火大会';   //ブログタイトル、ブログ一覧とトップページのお知らせ画面で使用
$blog_description = '夏といったら花火！というわけで、８月５日にグループホームの外で花火会を楽しみました！';     //ブログ一覧で表示するディスクリプション
$blog_date = '2022-08-05'; //YYYY-MM-DDで書き込むこと
$blog_fv = 'hanabi-1.jpg';

$data = [
	'title' => $blog_title,
	'date'  => $blog_date,
	'desc'  => $blog_description,
	'fv'    => $blog_fv,
];