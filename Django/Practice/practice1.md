# 練習問題

1. 「testapp」という名前のアプリケーションを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	python3 -m django startproject testapp
	```
		
	</div></details>
	

	<br>


2. DBeaverを使ってデータベースの新規作成を行ってください。ただし、データベース名は「testappdb」とします。

	<details><summary>回答例</summary><div>
    ![testappdbの作成](https://user-images.githubusercontent.com/75789463/172562320-1226b5be-fd56-494a-8e3e-e5e145062534.gif)
	</div></details>
	
	<br>

3. DBeaverを使ってデータベースの新規作成を行ってください。ただし、データベース名は「testappdb」とします。

	<details><summary>回答例</summary><div>
		
		
	</div></details>
	

	<br>

4. 「testapp」に対して下記の設定を行ってください。

    ・時刻設定：'Asia/Tokyo'
    ・言語設定：'ja'
    ・静的ファイルのパス設定：

    ```python:
    import os  # ファイル先頭に追加
    STATIC_ROOT = os.path.join(BASE_DIR, 'static')  # 追加
    ```

    ・データベース接続設定：

    ```python:
    # manage.py
    
    import pymsql  # 追加
    pymysql.install_as_MySQLdb()  # 追加
    ```

    ```python:
    # settings.py

    DATABASES = {
        'default': {
            'ENGINE': 'django.db.backends.mysql',
            'NAME': ' myappdb',
            'USER': ' root',
            'PASSWORD': ' pass',
        }
    }
    ```

5. 「testapp」フォルダ内に個別のアプリである「testsns」を作成してください。

	<details><summary>回答例</summary><div>

    ```
    python3 manage.py startapp testsns
    ```

	</div></details>
	
	<br>

6. 「testsns」のviewの中に「Hello World!!」を返すindexメソッドを作成してください。

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

7. プロジェクト全体でtestsns/urls.pyを利用できるようにルーティングを設定してください。

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

8. 「testsns」のトップページにアクセスした際に、viewのindexメソッドが処理されるようにルーティングを設定してください。

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

9. testapp/testsns/apps.pyに記載されているTestsnsConfigクラスをtestapp/settings.pyに登録してください。

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

10. 「test_app」をローカル環境のブラウザで表示させるためにサーバーを起動してください。

	<details><summary>回答例</summary><div>
		
	```
	python3 manage.py runserver
	```
		
	</div></details>
	
	<br>
