# SQL操作

1. DBeaverを使ってPracticeテーブルを作成しましょう。

	<details><summary>回答例</summary><div>
		
    ![データベースの作成](https://user-images.githubusercontent.com/75789463/170972798-7f1c81e1-f9df-4daa-8555-7b27021f8b2f.gif)
		
	</div></details>
	

	<br>

2. Practiceテーブル内でusersテーブルを作成しましょう。

	<details><summary>回答例</summary><div>
		
	![テーブルの作成](https://user-images.githubusercontent.com/75789463/172100055-1e3ea86f-8e7e-4dbe-9f02-f16a106b36a3.gif)
		
	</div></details>

	<br>

3. usersテーブル内に下記の条件を満たすカラムを作成しましょう。

	```
	カラム名：id
	データ・タイプ：int
	NOT NULL：有効
	オートインクリメント：有効
	```

	<details><summary>回答例</summary><div>
	
	![id](https://user-images.githubusercontent.com/75789463/172100186-d329b222-bcb3-4d1a-8587-9e601e70e4b2.gif)
		
	</div></details>

	<br>

4. 3で作成したカラムにPRIMARY KEYを設定しましょう。

	<details><summary>回答例</summary><div>
		
	![primary_key](https://user-images.githubusercontent.com/75789463/172099774-812f848a-4939-449a-870c-4e667f3a1e67.gif)
		
	</div></details>

	<br>

5. usersテーブル内に下記の条件を満たすカラムを作成しましょう。

	```
	カラム名：name
	データ・タイプ：varchar[20]
	NOT NULL：無効
	オートインクリメント：無効
	```

	<details><summary>回答例</summary><div>
	
	![nameの作成](https://user-images.githubusercontent.com/75789463/172091194-6285640a-ffe5-45b7-960b-e68a9331a0c2.gif)
		
	</div></details>

	<br>

6. usersテーブル内に下記の条件を満たすカラムを作成しましょう。

	```
	カラム名：age
	データ・タイプ：varchar[20]
	NOT NULL：無効
	オートインクリメント：無効
	```

	<details><summary>回答例</summary><div>
	
	![ageの作成](https://user-images.githubusercontent.com/75789463/172091266-68d9b99d-e19e-47f7-a823-be1e39a673dc.gif)
		
	</div></details>

	<br>

7. usersテーブル内に下記の条件を満たすカラムを作成しましょう。

	```
	カラム名：introduce
	データ・タイプ：varchar[100]
	NOT NULL：無効
	オートインクリメント：無効
	```

	<details><summary>回答例</summary><div>
	
	![introduce](https://user-images.githubusercontent.com/75789463/172099302-295a7ba5-35d5-4907-9bd3-91a8a48a7d28.gif)
		
	</div></details>

	<br>

7. usersテーブル内に下記の条件を満たすカラムを作成しましょう。

	```
	カラム名：introduce
	データ・タイプ：varchar[100]
	NOT NULL：無効
	オートインクリメント：無効
	```

	<details><summary>回答例</summary><div>
	
	![introduce](https://user-images.githubusercontent.com/75789463/172099302-295a7ba5-35d5-4907-9bd3-91a8a48a7d28.gif)
		
	</div></details>

	<br>

7. 1~6までで行った変更を保存してください。

	<details><summary>回答例</summary><div>
		
	</div></details>

	<br>

8. DBeaver内でSQL文を使ってusersテーブル内に下記のデータを作成してください。

	```
	name：田中
	age：20歳
	introduce：私の名前は田中で、年齢は20歳です
	```

	<details><summary>回答例</summary><div>

	```
	INSERT INTO users SET name='田中', age='20', introduce='私の名前は田中で、年齢は20歳です';
	```	
		
	</div></details>

	<br>


9. DBeaver内でSQL文を使ってusersテーブル内に下記のデータを作成してください。

	```
	name：佐藤
	age：22歳
	introduce：私の名前は佐藤で、年齢は30歳です
	```

	<details><summary>回答例</summary><div>

	```
	INSERT INTO users SET name='佐藤', age='30', introduce='私の名前は佐藤で、年齢は30歳です';
	```	
		
	</div></details>

	<br>

10. DBeaver内でSQL文を使ってusersテーブル内に保存されているデータを全て取得してください。

	<details><summary>回答例</summary><div>

	```
	SELECT * FROM users;
	```	
		
	</div></details>

	<br>

11. DBeaver内でSQL文を使ってusersテーブル内に保存されているidが1のデータを取得してください。

	<details><summary>回答例</summary><div>

	```
	SELECT * FROM users WHERE id=1;
	```
		
	</div></details>

	<br>

12. DBeaver内でSQL文を使ってusersテーブル内に保存されている全てのデータを削除してください。

	<details><summary>回答例</summary><div>

	```
	DELETE FROM users;
	```
		
	</div></details>

	<br>

13. DBeaver内でSQL文を使ってusersテーブル内に一括で下記のデータを作成してください。

	| id  | name | age | introduce |
	| --- | --- | --- | ---------- |
	| 1 | 渡辺 | 20 | 私の名前は渡辺で、年齢は20歳です |
	| 2 | 田代 | 22 | 私の名前は田代で、年齢は22歳です |
	| 3 | 倉持 | 30 | 私の名前は倉持で、年齢は30歳です |
	| 4 | 関根 | 34 | 私の名前は関根で、年齢は34歳です |

	<details><summary>回答例</summary><div>

	```
	INSERT INTO users VALUES 
	(1, '渡辺', '20', '私の名前は渡辺で、年齢は20歳です'),
	(2, '田代', '22', '私の名前は田代で、年齢は22歳です'),
	(3, '倉持', '30', '私の名前は倉持で、年齢は30歳です'),
	(4, '関根', '34', '私の名前は関根で、年齢は34歳です');
	```
		
	</div></details>

	<br>

14. DBeaver内でSQL文を使ってusersテーブル内に保存されている全てのnameカラムとageカラムのデータを取得してください。

	<details><summary>回答例</summary><div>

	```
	SELECT name, age FROM users;
	```
		
	</div></details>

	<br>

14. DBeaver内でSQL文を使ってusersテーブル内に保存されているidが3以上のnameカラムとageカラムのデータを全て取得してください。

	<details><summary>回答例</summary><div>

	```
	SELECT name, age FROM users WHERE id >= 3;
	```
		
	</div></details>

	<br>

15. DBeaver内でSQL文を使ってusersテーブル内に保存されているageが30以上のnameカラムのデータを全て取得してください。

	<details><summary>回答例</summary><div>

	```
	SELECT name FROM users WHERE age >= 30;
	```
		
	</div></details>

	<br>

16. DBeaver内でSQL文を使ってusersテーブル内に保存されているageが30以上のintroduceカラムのデータを全て下記の内容に変更してください。

	```
	年齢は30歳以上です
	```

	<details><summary>回答例</summary><div>

	```
	UPDATE users SET introduce='年齢は30歳以上です' WHERE age >= 30;
	```
		
	</div></details>

	<br>

17. DBeaver内でSQL文を使ってusersテーブル内に保存されているnameが田代のデータを全て取得してください。

	<details><summary>回答例</summary><div>

	```
	SELECT * FROM users WHERE name LIKE '%田代%';
	```
		
	</div></details>

	<br>

17. DBeaver内でSQL文を使ってusersテーブル内に保存されているnameが田代のデータを下記の内容に変更してください。

	```
	name：田辺
	age：32
	introduce：私の名前は田辺で、年齢は32歳です
	```

	<details><summary>回答例</summary><div>

	```
	UPDATE users SET name='田辺', age='32', introduce='私の名前は田辺で、年齢は32歳です' WHERE name LIKE '%田代%';
	```
		
	</div></details>

	<br>

18. DBeaver内でSQL文を使ってusersテーブル内に保存されているageが20のデータを削除してください。

	<details><summary>回答例</summary><div>

	```
	DELETE FROM users WHERE age=20;
	```
		
	</div></details>

	<br>

19. DBeaver内でSQL文を使ってusersテーブル内に保存されている名前が関根のデータを削除してください。

	<details><summary>回答例</summary><div>

	```
	DELETE FROM users WHERE name LIKE '%関根%';
	```
		
	</div></details>

	<br>

20. DBeaver内でSQL文を使ってusersテーブル内に保存されている年齢が30歳以上の全てのデータを取得し、削除してください。

	<details><summary>回答例</summary><div>

	```
	SELECT * FROM users WHERE age>= 30;
	DELETE FROM users WHERE age>= 30;
	```
		
	</div></details>

	<br>
