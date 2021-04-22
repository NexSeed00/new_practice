# SQLの操作を練習しよう

## Q-1. カラムを抽出してみよう
※ データベース『Japan』を使用します。<br>
※ SQLタブからSQLを操作していきます。

### 問題
prefectureテーブルから、nameカラムのみを抽出してみましょう。

### 回答例
<details><summary>SQL文</summary><div>
	
```
select name from prefecture;
```

</div></details>

#### 解説
[![Image from Gyazo](https://i.gyazo.com/7335cccec0ad2df1e6876b3070a120ee.gif)](https://gyazo.com/7335cccec0ad2df1e6876b3070a120ee)


## Q-2. 複数のカラムを抽出してみよう

### 問題
prefectureテーブルから、idカラムとnameカラムを抽出してみましょう。

### 回答例
<details><summary>SQL文</summary><div>
	
```
select id, name from prefecture;
```

</div></details>

#### 解説
[![Image from Gyazo](https://i.gyazo.com/5dc2e87457d5a79bf9c67e2c2c5cf506.gif)](https://gyazo.com/5dc2e87457d5a79bf9c67e2c2c5cf506)

## Q-3. すべてのカラムを抽出してみよう

### 問題
prefectureテーブルから、すべてのカラムを抽出してみましょう。

### 回答例
<details><summary>SQL文</summary><div>
	
```
select * from prefecture;
```

</div></details>

#### 解説
[![Image from Gyazo](https://i.gyazo.com/821d6d4f55d4cec58378c9d3ed5fd33e.gif)](https://gyazo.com/821d6d4f55d4cec58378c9d3ed5fd33e)

## Q-4. 条件で絞って抽出する①

### 問題
prefectureテーブルから、idが1のレコードを抽出してみよう

### 回答例
<details><summary>SQL文</summary><div>
	
```
SELECT * FROM `prefecture` WHERE `id` = 1
```

</div></details>

#### 解説
[![Image from Gyazo](https://i.gyazo.com/a3d55a561a65663a8f570d97cc53e3d9.gif)](https://gyazo.com/a3d55a561a65663a8f570d97cc53e3d9)

## Q-5. 条件で絞って抽出する②

### 問題
prefectureテーブルから、idが5以上のレコードを抽出してみよう

### 回答例
<details><summary>SQL文</summary><div>
	
```
SELECT * FROM `prefecture` WHERE `id` >= 5
```

</div></details>

#### 解説
[![Image from Gyazo](https://i.gyazo.com/8df7937730dbc68c6532357f2622450a.gif)](https://gyazo.com/8df7937730dbc68c6532357f2622450a)

## Q-6. 取り出す順番を指定して、データを抽出してみよう

### 問題
prefectureテーブルから、name_kanaカラム、idカラム、nameカラムの順番でデータを全て抽出してみよう

### 回答例
<details><summary>SQL文</summary><div>
	
```
SELECT name_kana, id, name FROM prefecture;
```

</div></details>

#### 解説
[![Image from Gyazo](https://i.gyazo.com/0f8d18bb5d3c4059fbd8b9d9434ea000.gif)](https://gyazo.com/0f8d18bb5d3c4059fbd8b9d9434ea000)

## Q-7. レコードを挿入してみよう

### 問題
regionテーブルに、架空の地方レコードを挿入してみましょう。<br>
- id = 9
- name = 南国地方
- namme_kana = ナンゴクチホウ

### 回答例
<details><summary>SQL文</summary><div>
	
```
INSERT INTO `region` SET `id`='9', `name`='南国地方', `name_kana`='ナンゴクチホウ'
```

</div></details>

#### 解説
[![Image from Gyazo](https://i.gyazo.com/d820f88ecf8ff496010551253b793ba9.gif)](https://gyazo.com/d820f88ecf8ff496010551253b793ba9)

## Q-8. データを更新してみよう

### 問題
Q-7で作成した架空の地方レコードを下記のデータで書き換えてみましょう。<br>
- id = 9
- name = 極寒地方
- namme_kana = ゴッカンチホウ

### 回答例
<details><summary>SQL文</summary><div>
	
```
UPDATE `region` SET `name`='極寒地方', `name_kana`='ゴッカンチホウ' where `id`=9
```

</div></details>

#### 解説
[![Image from Gyazo](https://i.gyazo.com/3e073de44a0c3f2153404fe077b84e9b.gif)](https://gyazo.com/3e073de44a0c3f2153404fe077b84e9b)

## Q-9. レコードを削除してみよう

### 問題
Q-8で作成した架空の地方レコードを削除してみましょう<br>

### 回答例
<details><summary>SQL文</summary><div>
	
```
DELETE FROM `region` WHERE `id`=9
```

</div></details>

#### 解説
[![Image from Gyazo](https://i.gyazo.com/e62a83fdb987481646362d442d29990c.gif)](https://gyazo.com/e62a83fdb987481646362d442d29990c)

## Q-10. データの並び替えをしてみよう①

### 問題
idカラムを基準にして、prefectureテーブルを降順で並び替えてみよう

### 回答例
<details><summary>SQL文</summary><div>
	
```
SELECT * FROM prefecture ORDER BY id DESC;
```

</div></details>

#### 解説
[![Image from Gyazo](https://i.gyazo.com/03b30f2320c56ec73671dc5d1ff4584b.gif)](https://gyazo.com/03b30f2320c56ec73671dc5d1ff4584b)

## Q-11. データの並び替えをしてみよう②

### 問題
idカラムを基準にして、prefectureテーブルを昇順で並び替えてみよう

### 回答例
<details><summary>SQL文</summary><div>
	
```
SELECT * FROM prefecture ORDER BY id ASC;
```

</div></details>

#### 解説
Q-9とQ-10の知識はとても大切です。<br>
よくデータを日付の新旧で並び替えて取り出すことがあります。<br>
※昇順であれば古い日付から新しい日付、降順であれば新しい日付から古い日付に並べることができます。
[![Image from Gyazo](https://i.gyazo.com/f96201b7643fd51b3340def36cb201f6.gif)](https://gyazo.com/f96201b7643fd51b3340def36cb201f6)