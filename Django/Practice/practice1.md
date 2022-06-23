# 練習問題

1. 「testapp」というプロジェクトを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	python3 -m django startproject testapp
	```
		
	</div></details>
	

	<br>


2. DBeaverを使ってデータベースの新規作成を行ってください。データベース名は「testappdb」とします。

	<details><summary>回答例</summary><div>
    	
	<img src="https://user-images.githubusercontent.com/75789463/172562320-1226b5be-fd56-494a-8e3e-e5e145062534.gif" alt="testappdbの作成">
	
	</div></details>
	
	<br>

3. 「testapp」に対して下記の設定を行ってください。
    
    ```python
    # settings.py

    import os  # ファイル先頭に追加

    # 省略

    LANGUAGE_CODE = "ja"  # 変更
    TIME_ZONE = "Asia/Tokyo"  # 変更

    # 省略

    STATIC_ROOT = os.path.join(BASE_DIR, 'static')  # 追加

    # 省略

    DATABASES = {
        'default': {
            'ENGINE': 'django.db.backends.mysql',
            'NAME': 'testappdb',
            'USER': 'root',
            'PASSWORD': '',
        }
    }
    ```

    ```python
    # manage.py

    import pymsql  # 追加
    pymysql.install_as_MySQLdb()  # 追加
    ```

4. 「testapp」プロジェクト内に「testsns」というアプリを作成してください。

	<details><summary>回答例</summary><div>

    ```
    python3 manage.py startapp testsns
    ```

	</div></details>
	
	<br>

5. 「testsns」のviewの中に「Hello World!!」を返すindexメソッドを作成してください。

	<details><summary>回答例</summary><div>

    ```python:
    # testsns/views.py

    from django.shortcuts import render
    from django.http import HttpResponse

    def index(request):
        return HttpResponse("Hello World!!")
    ```

	</div></details>
	
	<br>

6. プロジェクト全体でtestsns/urls.pyを利用できるようにルーティングを設定してください。

	<details><summary>回答例</summary><div>

    ```python:
    # testapp/urls.py

    from django.contrib import admin
    from django.urls import path, include

    urlpatterns = [
        path("testsns/", include("testsns.urls")),
        path("admin/", admin.site.urls),
    ]
    ```

	</div></details>
	
	<br>

7. 「testsns」のトップページにアクセスした際に、viewのindexメソッドが処理されるようにルーティングを設定してください。

	<details><summary>回答例</summary><div>

    ```python:
    # testsns/urls.py

    from django.urls import path
    from . import views

    urlpatterns = [
        path("", views.index, name="index"),
    ]
    ```

	</div></details>
	
	<br>

8. testapp/testsns/apps.pyに記載されているTestsnsConfigクラスをtestapp/settings.pyに登録してください。

	<details><summary>回答例</summary><div>

    ```python:
    # 省略

    INSTALLED_APPS = [
        "testsns.apps.TestsnsConfig",  # 追加
        "django.contrib.admin",
        "django.contrib.auth",
        "django.contrib.contenttypes",
        "django.contrib.sessions",
        "django.contrib.messages",
        "django.contrib.staticfiles",
    ]
    ```

	</div></details>
	
	<br>

9. 「testapp」をローカル環境のブラウザで表示するためにサーバーを起動してください。

	<details><summary>回答例</summary><div>
		
	```
	python3 manage.py runserver
	```
		
	</div></details>
	
	<br>

10. 「testsns」内にテンプレートとしてindex.htmlを作成し、下記のコードを貼り付けてください。

    ```html:
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>testsns</title>
    </head>
    <body>
        <h1>ようこそ！<h1>
    <body>
    </html>
    ```
		
	</div></details>
	
	<br>

11. 10で作成したindex.htmlをトップページで表示するためのルーティングを設定してください。

	<details><summary>回答例</summary><div>
		
    ```python:
    # testsns/views.py

    from django.shortcuts import render
    from django.http import HttpResponse

    def index(request):
        # return HttpResponse("Hello World!!")
        return render(request,"testsns/index.html")
    ```
		
	</div></details>
	
	<br>

12. localhost:8000/testsnsにアクセスして、下記のように表示されているか確認してください。

<img width="515" alt="スクリーンショット 2022-06-23 13 58 19" src="https://user-images.githubusercontent.com/75789463/175226043-e2a8d30c-eb5d-44c4-964c-0ff318c0642b.png">



13. 「testsns」のviewから下記のデータをindex.htmlに受け渡してください。

    ```
    変数名：context
    キー：message
    値：初めてのDjangoアプリ作成
    ```

	<details><summary>回答例</summary><div>
		
    ```python:
    # testsns/views.py

    from django.shortcuts import render
    from django.http import HttpResponse

    def index(request):
        context = {"message": "初めてのDjangoアプリ作成"}
        return render(request,"testsns/index.html", context)
    ```
		
	</div></details>
	
	<br>

14. 「testsns」のindex.htmlに13で送ったデータを表示してください。

	<details><summary>回答例</summary><div>
		
	```html:
	<!-- testapp/testsns/templates/testsns/index.html -->

    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>testsns</title>
    </head>
    <body>
        <h1>ようこそ！<h1>
        <div>{{ message }}</div>
    <body>
    </html>
	```
		
	</div></details>
	
	<br>

15. localhost:8000/testsnsにアクセスして、下記のように表示されているか確認してください。

<img width="512" alt="スクリーンショット 2022-06-23 14 05 28" src="https://user-images.githubusercontent.com/75789463/175226918-923db9e5-f7d2-4d82-8d8e-ea470cb978a1.png">

16. 「testsns」のviewのindexメソッド内で定義されている変数contextに下記のデータを新たに加え、index.htmlに受け渡してください。

    ```
    キー：members
    値：Taro, Ken, Yuki
    ```

	<details><summary>回答例</summary><div>
		
    ```python:
    # testsns/views.py

    from django.shortcuts import render
    from django.http import HttpResponse

    def index(request):
        context = {
            "message": "初めてのDjangoアプリ作成"
            "members": ["Suguru", "Robin", "Terry"]
        }
        return render(request,"testsns/index.html", context)
    ```
		
	</div></details>
	
	<br>

17. 「testsns」のindex.htmlに16で送ったデータを元に「〜さんこんにちは！！」と全て表示させてください。

	<details><summary>回答例</summary><div>
		
	```html:
	<!-- testapp/testsns/templates/testsns/index.html -->

    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>testsns</title>
    </head>
    <body>
        <h1>ようこそ！<h1>
        <div>{{ message }}</div>
        <div>
            {% for member in members %}
            <p>{{ member }}さんこんにちは！！</p>
            {% endfor %}
        </div>
    <body>
    </html>
	```
		
	</div></details>
	
	<br>

18. mysns/models.pyで下記のデータの定義を行なってください。

    ```
    クラス名：Posts
    カラム：content
    制限：contentに入れられる文字列の長さは最大で200
    ```

    <details><summary>回答例</summary><div>
		
    ```python:
    from django.db import models

    class Posts(models.Model):
        content = models.CharField(max_length=200)

        def __str__(self):
            return self.content
    ```
		
	</div></details>
	
	<br>

19. 18で作成したモデルを元にマイグレーションファイルを作成してください。

    <details><summary>回答例</summary><div>
		
    ```terminal:
    python3 manage.py makemigrations testsns
    ```
		
	</div></details>
	
	<br>

20. 19で作成したマイグレーションファイルの内容をデータベースへ反映してください。

    <details><summary>回答例</summary><div>
		
    ```terminal:
    python3 manage.py migrate
    ```
		
	</div></details>
	
	<br>

21. ターミナルでスーパーユーザーと呼ばれる管理ユーザーを作成してください。

    <details><summary>回答例</summary><div>
		
    ```terminal:
    python3 manage.py createsuperuser

    ユーザー名：任意のユーザー名
    メールアドレス：任意のメールアドレス
    Password：任意のパスワード
    ```
		
	</div></details>
	
	<br>

22. Djangoの管理サイトにアクセスしてください。

    <details><summary>回答例</summary><div>
		
    ```
    localhost:8000/admin
    ```
		
	</div></details>
	
	<br>

23. postsテーブルのデータ管理を行えるようにtestsns/admin.pyを編集してください。

    <details><summary>回答例</summary><div>
		
    ```python:
    from django.contrib import admin
    from .models import Posts

    admin.site.register(Posts)
    ```
		
	</div></details>
	
	<br>

24. Djangoの管理サイトから「Hello world!」というデータをpostsテーブルに追加してください。

    <details><summary>回答例</summary><div>
		
    <img src="https://user-images.githubusercontent.com/75789463/172581176-f72090c3-cff9-44f4-bc48-cfebca42b521.gif" alt="postsの追加1">
		
	</div></details>
	
	<br>

25. Djangoの管理サイトから「Hello python!」というデータをpostsテーブルに追加してください。

    <details><summary>回答例</summary><div>
		
    <img src="https://user-images.githubusercontent.com/75789463/172584628-f492a5f9-2754-4f66-a1af-66cd47e64db9.gif" alt="postsの追加2">
		
	</div></details>
	
	<br>

26. Djangoの管理サイトから「Hello django!!!」というデータをpostsテーブルに追加してください。

    <details><summary>回答例</summary><div>
		
    <img src="https://user-images.githubusercontent.com/75789463/172584727-9e66fe4b-8c2b-45be-a6ac-44798d3bf5ca.gif" alt="postsの追加3">
		
	</div></details>
	
	<br>

27. DBeaverからpostsテーブルに格納されているデータを確認してください。

    <details><summary>回答例</summary><div>
		
    <img src="https://user-images.githubusercontent.com/75789463/172585603-09acdb38-b146-41ca-8010-89b3f456cd52.gif" alt="postsの全てのデータ確認">
		
	</div></details>
	
	<br>

28. 「testsns」のviewのindexメソッドに新たに変数postsを定義し、Postsクラスのオブジェクトのデータを全て代入してください。

    <details><summary>回答例</summary><div>
		
    ```python:
    # testsns/views.py

    from django.shortcuts import render
    from django.http import HttpResponse
    from .models import Posts  # 追加

    def index(request):
        posts = Posts.objects.all()  # 追加
        context = {"message": "初めてのDjangoアプリ作成"}
        members = ["Taro", "Ken", "Yuki"]
        return render(request,"testsns/index.html", context)
    ```
    	
	</div></details>
	
	<br>

29. 「testsns」のviewのindexメソッド内で定義されている変数contextのmembersキーを削除し、28で定義した変数postsを変数contextに加えてください。

    <details><summary>回答例</summary><div>
		
    ```python:
    # testsns/views.py

    from django.shortcuts import render
    from django.http import HttpResponse
    from .models import Posts

    def index(request):
        posts = Posts.objects.all()
        context = {
            "message": "初めてのDjangoアプリ作成",
            "posts": posts,
        }
        return render(request,"testsns/index.html", context)
    ```
    	
	</div></details>
	
	<br>

30. 「testsns」のindex.htmlに29で送ったデータを元にpostsテーブルのデータを全て表示してください。

    <details><summary>回答例</summary><div>
		
	```html:
	<!-- testapp/testsns/templates/testsns/index.html -->

    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>testsns</title>
    </head>
    <body>
        <h1>ようこそ！<h1>
        <div>{{ message }}</div>
        <div>
            {% for post in posts %}
            <p>{{ post }}</p>
            {% endfor %}
        </div>
    <body>
    </html>
	```
    	
	</div></details>
	
	<br>

