<?php
//ブログのメタデータを取得し、JSONに格納する
if(isset($blog_title) && isset($blog_date) && isset($blog_description) && isset($blog_fv)) {
	$data = [
		'title' => $blog_title,
		'date'  => $blog_date,
		'desc'  => $blog_description,
		'fv'    => $blog_fv,
	];
}

function getBlogData($file) {
	return json_decode(file_get_contents($file), true); //JSONデータを多次元連想配列で取得
}

//ブログデータをJsonファイルに格納する(blog_metaはブログのメタ情報)
function putBlogData($data) {
	$file = '../blog.json';
	$json = getBlogData($file); //JSONデータの取得
	$flag = true;  //すでにその日付のブログ情報が登録されているかを確認、True時は存在する
	//json[0]が存在する→多次元連想配列になっている
	if(isset($json[0])) {
		foreach($json as $j) {
			if($j['date'] == $data['date']) {
				//同じ日付のデータが存在した場合はデータ入力を行わない
				$flag = false;
			}
		}
	} else {  //json_decodeはKeyが1つの場合多次元連想配列にならない。ここで別途処理
		if(isset($json) && $json['date'] == $data['date']) {
			$flag = false;
		}
	}

	//flagがtrueだった場合データ入力
	if($flag) {
		$json[] = $data;  //現在あるブログ一覧に新しいブログデータを挿入
		foreach($json as $key => $value) {
			$sort[$key] = $value['date'];
		}
		//日付の降順にソート
		array_multisort($sort, SORT_DESC, $json);
		file_put_contents($file, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)); //JSONに変換しファイル挿入
		return true;
	} else {  //多次元連想配列でない場合の処理
		return false;
	}
}

//サニタイズ
function h($text) {
	return htmlspecialchars($text);
}

//blog一覧ページで実行、新しいブログが登録されていたらJSONに登録
function putBlogMetaInit($blog_base) {
	//現在のJSONの中身
	$blog_entries = getBlogData($blog_base . 'blog.json');
	$dates = getBlogFolder($blog_base);	//ブログの日付
	//JSONとブログメタ情報の検証、JSON上に日付が存在しなかったら格納フラグをtrueに
	foreach($dates as $date) {
		$flag = false;
		if(isset($blog_enries)) {
			foreach($blog_entries as $entriy) {
				if($entriy['date'] == $date) {
					$flag = true;
					break;
				}
			}
		}
		if(!$flag) {	//データ格納処理
			require_once "{$blog_base}/{$date}/blog_header.php";
			$blog_entries[] = $data;
		}
	}
	array_multisort(array_column($blog_entries,'date'), SORT_DESC, $dates);
	file_put_contents($blog_base . 'blog.json',
		json_encode($blog_entries, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)); //JSONに変換しファイル挿入
}

//ブログのフォルダ名を取得
function getBlogFolder($dirPath) {
	$dirPath;
	$files = array_diff(scandir($dirPath), ['.', '..']);
	// ファイルを排除して、ディレクトリのみを取得する
	$dirs = [];
	foreach ($files as $file) {
		if (is_dir($dirPath . '/' . $file)) {
			$dirs[] = $file;
		}
	}
	array_multisort($dirs, SORT_DESC);
	return $dirs;
}
