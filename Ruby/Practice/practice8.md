# SQL

1. DBeaverを使ってPracticeテーブルを作成してください。

	<details><summary>回答例</summary><div>
		
	<img src="https://user-images.githubusercontent.com/75789463/172137822-b3cda933-e5b1-47fa-b197-69864652e479.gif" alt="データベースの作成">
		
	</div></details>
	

	<br>

2. Practiceテーブル内でusersテーブルを作成してください。

	<details><summary>回答例</summary><div>
		
	<img src="https://user-images.githubusercontent.com/75789463/172140174-02990020-9a53-462e-9172-c980d50ba56d.gif" alt="usersテーブルの作成">
		
	</div></details>

	<br>

3. usersテーブル内に下記の条件を満たすカラムを作成してください。

	```
	カラム名：id
	データ・タイプ：int
	NOT NULL：有効
	オートインクリメント：有効
	```

	<details><summary>回答例</summary><div>
	
	<img src="https://user-images.githubusercontent.com/75789463/172140229-6170c361-79d8-4457-8dfd-39c881bdffc4.gif" alt="idの作成">
		
	</div></details>

	<br>

4. 3で作成したカラムにPRIMARY KEYを設定してください。

	<details><summary>回答例</summary><div>
		
	<img src="https://user-images.githubusercontent.com/75789463/172140826-3703e24c-8a21-4fef-a9d6-0d3b04e6f6c9.gif" alt="primary_keyの作成">
		
	</div></details>

	<br>

5. usersテーブル内に下記の条件を満たすカラムを作成してください。

	```
	カラム名：name
	データ・タイプ：varchar[20]
	NOT NULL：無効
	オートインクリメント：無効
	```

	<details><summary>回答例</summary><div>
	
	<img src="https://user-images.githubusercontent.com/75789463/172147465-65818d9b-fedd-42d3-9bbf-378235865ce9.gif" alt="nameの作成">
		
	</div></details>

	<br>

6. usersテーブル内に下記の条件を満たすカラムを作成してください。

	```
	カラム名：age
	データ・タイプ：varchar[20]
	NOT NULL：無効
	オートインクリメント：無効
	```

	<details><summary>回答例</summary><div>
	
	<img src="https://user-images.githubusercontent.com/75789463/172144801-4ebb105e-79b4-48ee-8962-b5a6e11c1d0f.gif" alt="ageの作成">
		
	</div></details>

	<br>

7. usersテーブル内に下記の条件を満たすカラムを作成してください。

	```
	カラム名：introduce
	データ・タイプ：varchar[100]
	NOT NULL：無効
	オートインクリメント：無効
	```

	<details><summary>回答例</summary><div>
	
	<img src="https://user-images.githubusercontent.com/75789463/172145497-2fb85ae8-a184-49f6-bf97-c1d0946bc554.gif" alt="introduceの作成">
		
	</div></details>

	<br>

8. 1~7までで行った変更を保存してください。

	<details><summary>回答例</summary><div>
	
	<img src="https://user-images.githubusercontent.com/75789463/172147055-de09df6a-cbaa-4425-b9ed-3a851cff4985.gif" alt="保存">

	</div></details>

	<br>

9. DBeaver内でSQL文を使ってusersテーブル内に下記のデータを作成してください。

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


10. DBeaver内でSQL文を使ってusersテーブル内に下記のデータを作成してください。

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

11. DBeaver内でSQL文を使ってusersテーブル内に保存されているデータを全て取得してください。

	<details><summary>回答例</summary><div>

	```
	SELECT * FROM users;
	```	
		
	</div></details>

	<br>

12. DBeaver内でSQL文を使ってusersテーブル内に保存されているidが1のデータを取得してください。

	<details><summary>回答例</summary><div>

	```
	SELECT * FROM users WHERE id=1;
	```
		
	</div></details>

	<br>

13. DBeaver内でSQL文を使ってusersテーブル内に保存されている全てのデータを削除してください。

	<details><summary>回答例</summary><div>

	```
	DELETE FROM users;
	```
		
	</div></details>

	<br>

14. DBeaver内でSQL文を使ってusersテーブル内に一括で下記のデータを作成してください。

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

15. DBeaver内でSQL文を使ってusersテーブル内に保存されているageが30以上のデータを全て取得してください。

	<details><summary>回答例</summary><div>

	```
	SELECT * FROM users WHERE age >= 30;
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

18. DBeaver内でSQL文を使ってusersテーブル内に保存されているnameが田代のデータを下記の内容に変更してください。

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
