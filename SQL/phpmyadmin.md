# phpmyadminの操作を練習しよう

## Q-1. データベースを作成しよう

### 問題
- phpmyadminを開き、『Japan』というデータベース名でデータベースを新規作成しましょう。

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/7e41e4f43a50b15ca8e785d12de2f4c4.gif)](https://gyazo.com/7e41e4f43a50b15ca8e785d12de2f4c4)


## Q-2. insert文を使用し、テーブルを作成しましょう①

### 問題
下記、SQL文を発行し、regionテーブルを作成しましょう

### 準備
```
CREATE TABLE `region` (
  `id` tinyint(3) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_kana` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
```

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/27cfdb7684fb443fffa315d0a6158530.gif)](https://gyazo.com/27cfdb7684fb443fffa315d0a6158530)

## Q-3. insert文を使用し、テーブルを作成しましょう②

### 問題
下記、SQL文を発行し、prefectureテーブルを作成しましょう

### 準備
```
CREATE TABLE `prefecture` (
  `id` tinyint(3) unsigned NOT NULL,
  `region_id` tinyint(3) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_kana` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
```

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/0a7473025112d2237da89fe62c86f74c.gif)](https://gyazo.com/0a7473025112d2237da89fe62c86f74c)

## Q-4. insert文を使用し、テーブルに初期データを格納しましょう①

### 問題
下記、SQL文を発行し、regionテーブルに地方名のデータを格納しましょう

### 準備
```
INSERT INTO `region` VALUES
  (1,'北海道地方','ホッカイドウ'),
  (2,'東北地方','トウホクチホウ'),
  (3,'関東地方','カントウチホウ'),
  (4,'中部地方','チュウブチホウ'),
  (5,'近畿地方','キンキチホウ'),
  (6,'中国地方','チュウゴクチホウ'),
  (7,'四国地方','シコクチホウ'),
  (8,'九州地方','キュウシュウチホウ');
```

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/4f68859770f3e81160cceff9fd97b8c0.gif)](https://gyazo.com/4f68859770f3e81160cceff9fd97b8c0)

## Q-5. insert文を使用し、テーブルに初期データを格納しましょう②

### 問題
下記、SQL文を発行し、prefectureテーブルに地方名のデータを格納しましょう

### 準備
```
INSERT INTO `prefecture` VALUES
  (1,1,'北海道','ホッカイドウ'),
  (2,2,'青森県','アオモリケン'),
  (3,2,'岩手県','イワテケン'),
  (4,2,'宮城県','ミヤギケン'),
  (5,2,'秋田県','アキタケン'),
  (6,2,'山形県','ヤマガタケン'),
  (7,2,'福島県','フクシマケン'),
  (8,3,'茨城県','イバラキケン'),
  (9,3,'栃木県','トチギケン'),
  (10,3,'群馬県','グンマケン'),
  (11,3,'埼玉県','サイタマケン'),
  (12,3,'千葉県','チバケン'),
  (13,3,'東京都','トウキョウト'),
  (14,3,'神奈川県','カナガワケン'),
  (15,4,'新潟県','ニイガタケン'),
  (16,4,'富山県','トヤマケン'),
  (17,4,'石川県','イシカワケン'),
  (18,4,'福井県','フクイケン'),
  (19,4,'山梨県','ヤマナシケン'),
  (20,4,'長野県','ナガノケン'),
  (21,4,'岐阜県','ギフケン'),
  (22,4,'静岡県','シズオカケン'),
  (23,4,'愛知県','アイチケン'),
  (24,5,'三重県','ミエケン'),
  (25,5,'滋賀県','シガケン'),
  (26,5,'京都府','キョウトフ'),
  (27,5,'大阪府','オオサカフ'),
  (28,5,'兵庫県','ヒョウゴケン'),
  (29,5,'奈良県','ナラケン'),
  (30,5,'和歌山県','ワカヤマケン'),
  (31,6,'鳥取県','トットリケン'),
  (32,6,'島根県','シマネケン'),
  (33,6,'岡山県','オカヤマケン'),
  (34,6,'広島県','ヒロシマケン'),
  (35,6,'山口県','ヤマグチケン'),
  (36,7,'徳島県','トクシマケン'),
  (37,7,'香川県','カガワケン'),
  (38,7,'愛媛県','エヒメケン'),
  (39,7,'高知県','コウチケン'),
  (40,8,'福岡県','フクオカケン'),
  (41,8,'佐賀県','サガケン'),
  (42,8,'長崎県','ナガサキケン'),
  (43,8,'熊本県','クマモトケン'),
  (44,8,'大分県','オオイタケン'),
  (45,8,'宮崎県','ミヤザキケン'),
  (46,8,'鹿児島県','カゴシマケン'),
  (47,8,'沖縄県','オキナワケン');
```

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/47246f6933c3fea990444f6162ddcc49.gif)](https://gyazo.com/47246f6933c3fea990444f6162ddcc49)

## Q-6. データベースをエクスポートしてみよう

### 問題
データベース『Japan』をクリックした状態からエクスポート（書き出し）を行い、このデータベースのバックアップをとってみましょう。<br>
また、その書き出したデータの中身を確認してみましょう。

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/e3dae5a1c45019b7f3f5e1f860d684be.gif)](https://gyazo.com/e3dae5a1c45019b7f3f5e1f860d684be)

## Q-7. テーブルを削除してみよう

### 問題
テーブル『prefecture』を削除してみましょう

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/41c3a580bd4cfc706b79637a78a625e7.gif)](https://gyazo.com/41c3a580bd4cfc706b79637a78a625e7)

## Q-8. テーブルのレコードを削除してみよう

### 問題
テーブル『region』から、北海道地方を削除してみましょう

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/4536972bac4897453ff4e8d45b37a6a2.gif)](https://gyazo.com/4536972bac4897453ff4e8d45b37a6a2)

## Q-9. テーブルのレコードを追加してみよう

### 問題
テーブル『region』に、北海道地方を追加してみましょう
- id = 1
- name = 北海道
- name_kana = ホッカイドウ

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/015de9bf0cf6683e7bf4175ae4c04b40.gif)](https://gyazo.com/015de9bf0cf6683e7bf4175ae4c04b40)

## Q-10. データベースを削除してみよう

### 問題
データベース『Japan』を削除してみましょう

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/d9e8a1b89e32d996ef95af7ae64a72a6.gif)](https://gyazo.com/d9e8a1b89e32d996ef95af7ae64a72a6)

## Q-11. データベースをインポートしましょう

### 問題
データベース『Japan』を作成し、Q-6でエクスポートしたJapan.sqlをインポートしてみましょう。

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/88a3a65a2542e376e623bc4acc9761af.gif)](https://gyazo.com/88a3a65a2542e376e623bc4acc9761af)