<?php
	// while文について
		/*
			初期化処理;
			while (繰り返し条件式) {
				処理実行;
				更新処理;
			}

			1. 初期化処理 = 繰り返し処理が始まる前に一度だけ読み込まれる。
			2. 繰り返し条件式 条件がtrueなら3へ進む。条件がfalseなら処理終了。
			3. 処理実行
			4. 更新処理 = 処理が終わるごとに読まれる処理。
		*/

		$count = 0;
		while ($count <= 10) {
			echo $count.' ';
			$count++;
		}

		echo '<br><br>';

		$count = 10;
		while ($count >= 0){
			echo $count.' ';
			$count--;
		}

		echo '<br><br>';

		$count = 0;
		$limit = 5;
		while ($count <= $limit){
			echo $count.' ';
			$count++;
		}

		echo '<br><br>';

		/*
			練習問題
			1. 1から100まで出力するプログラムを書いてください。
			2. 1から100まで出力するプログラムを書いてください。
			   ただし、50を出力したらbreakを使って、処理を中断するようにしてください。
			   （1から50まで出力するようにしてください。）

			3. 1から100までの奇数のみ出力するプログラムを書いてください。
		*/
		// 1.
		$j = 1;
		while ($j <= 100) {
			echo $j.' ';
			$j++;
		}
		echo '<br><br>';

		// 2.
		$j = 1;
		while ($j <= 100) {
			if ($j > 50){
				break;
			}
			echo $j.' ';
			$j++;
		}
		echo '<br><br>';

		// 3.
		$j = 1;
		while ($j <= 100) {
			if ($j % 2 === 0) {
				$j++;
				continue;
			}
			echo $j.' ';
			$j++;
		}
