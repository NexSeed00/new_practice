# 練習問題

1. 「test」という名前のアプリケーションをxamppのhtdocs配下に作成してください。ただし、Laravelのバージョンは7系を指定してください。

	<details><summary>回答例</summary><div>
		
	```
	composer create-project --prefer-dist laravel/laravel test "7.*"
	```
		
	</div></details>

	<br>

2. .envファイルの編集を行ってください。

	<details><summary>回答例</summary><div>
		
    ```
    DB_SOCKET=/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock
    DB_DATABASE=test
    ```
		
	</div></details>

	<br>

3. 「test」のデータベースを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	phpmyadminにて.envファイルに記載のデータベース名でデータベース作成
	```
		
	</div></details>

	<br>

4. 「test」のアプリケーションキーにランダムな文字列を設定してください。

	<details><summary>回答例</summary><div>
		
	```
	php artisan key:generate
	```
		
	</div></details>
	
	<br>

5. 下記のファイルをダウンロードし、app/assets/imagesフォルダ内にそれぞれのファイルを追加してください。

	```
    ファイルリンク
    https://github.com/NexSeed00/new_practice/blob/master/Rails/Practice/img.zip?raw=true
    ```

6. 下記のファイルをダウンロードし、app/assets/stylesheets/application.cssと入れ替えてください。

	```
    ファイルリンク
    https://github.com/NexSeed00/new_practice/blob/master/Rails/Practice/application.css.zip?raw=true
    ```

7. 「test」をローカル環境のブラウザで表示させるためにサーバーを起動してください。

	<details><summary>回答例</summary><div>
		
	```
	php artisan serve
	```
		
	</div></details>
	

	<br>

8. 認証機能を追加してください。

	<details><summary>回答例</summary><div>
		
	```
	composer require laravel/ui "^2.0"
    php artisan ui vue --auth
	```
		
	</div></details>
	
	<br>

9. 7で追加した認証機能の見た目をnpmを使って整えてください。

	<details><summary>回答例</summary><div>
		
	```
    npm install
    npm run dev
	```
		
	</div></details>
	
	<br>

10. Postモデルとマイグレーションファイルを作成してください。

	<details><summary>回答例</summary><div>
		
	```
    php artisan make:model Post --migration
    ```
		
	</div></details>
	
	<br>

11. Postモデルとマイグレーションファイルを作成してください。

	<details><summary>回答例</summary><div>
		
	```
    php artisan make:model Post --migration
    ```
		
	</div></details>
	
	<br>

12. 8で作成したマイグレーションファイルに以下の情報を加えてください。

    ```php:
    $table->text('title');
    $table->text('body');
    $table->unsignedBigInteger('user_id');
    $table->foreign('user_id')->references('id')->on('users');
    ```

	<details><summary>回答例</summary><div>
		
	```php:
    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreatePostsTable extends Migration
    {
        /**
        * Run the migrations.
        *
        * @return void
        */
        public function up()
        {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->text('title');
                $table->text('body');
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
                $table->timestamps();
            });
        }

        /**
        * Reverse the migrations.
        *
        * @return void
        */
        public function down()
        {
            Schema::dropIfExists('posts');
        }
    }
    ```
		
	</div></details>
	
	<br>

13. マイグレーションファイルの内容をデータベースに反映させてください。

	<details><summary>回答例</summary><div>
		
	```
    php artisan migrate
    ```
		
	</div></details>
	
	<br>

14. Postコントローラーを作成してください。

	<details><summary>回答例</summary><div>
		
	```
    php artisan make:controller PostController
    ```
		
	</div></details>
	
	<br>

15. Postコントローラーにindexメソッドを追加してください。

	<details><summary>回答例</summary><div>
		
	```php:
    <?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class PostsController extends Controller
    {
        public function index()
        {
            
        }
    }
	```
		
	</div></details>
	

	<br>

16. 11で加えたindexメソッドに下記の処理を加えてください。

    ```
    ・変数postsを定義し、postsテーブルのデータを全て代入する
    ・テンプレートファイルとしてindex.blade.phpを、テンプレートに渡すデータとして変数postsを指定する
    ```

	<details><summary>回答例</summary><div>

        ```php:
        <?php

        namespace App\Http\Controllers;

        use Illuminate\Http\Request;

        class PostsController extends Controller
        {
            public function index()
            {
                $posts = Post::all();
                return view('post/index', [
                    'posts' => $posts
                ]);
            }
        }
        ```

	</div></details>

	<br>

17. resources/views/posts/index.blade.phpを作成し、postsテーブルに格納されている全てのbodyカラムのデータを表示させるようにコードを記述してください。

	<details><summary>回答例</summary><div>
		
    ```html:
    @foreach($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->body }}</p>
    @endforeach
    ```
		
	</div></details>
	
	<br>

18. localhost:3000/postsのURLでPostコントローラーのindexメソッドが処理されるようにルーティングを設定してください。

	<details><summary>回答例</summary><div>

	```php:
    Route::get('/posts', 'PostController@index')->name('Post.index');
	```
    
	</div></details>
	
	<br>

19. Postコントローラーにcreateメソッドを追加してください。

	<details><summary>回答例</summary><div>

        ```php:
        <?php

        namespace App\Http\Controllers;

        use Illuminate\Http\Request;

        class PostsController extends Controller
        {
            public function index()
            {
                $posts = Post::all();
                return view('post/index', [
                    'posts' => $posts
                ]);
            }

            public function create()
            {

            }
        }
        ```

	</div></details>
	
	<br>

20. 15で加えたcreateメソッドに下記の処理を加えてください。

    ```
    ・テンプレートファイルとしてcreate.blade.phpを返す
    ```

	<details><summary>回答例</summary><div>

	```php:
        <?php

        namespace App\Http\Controllers;

        use Illuminate\Http\Request;

        class PostsController extends Controller
        {
            public function index()
            {
                $posts = Post::all();
                return view('post/index', [
                    'posts' => $posts
                ]);
            }

            public function create()
            {
                return view('post.create');
            }
        }
	```
    
	</div></details>
	
	<br>


21. resources/views/posts/create.blade.phpを作成し、下記のコードを貼り付けてください。

	<details><summary>回答例</summary><div>
		
    ```html:
    <form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div>
        タイトル：<br>
        <input type="text" name="title">

        内容：<br>
        <input type="textarea" name="body">
    </div>
    <input type="submit" value="投稿">
    </form>
    ```
		
	</div></details>
	
	<br>


22. localhost:3000/posts/createのURLでPostコントローラーのcreateメソッドが処理されるようにルーティングを設定してください。

	<details><summary>回答例</summary><div>

	```php:
    Route::get('/posts/create', 'PostController@create')->name('post.create');
	```
    
	</div></details>
	
	<br>

23. Postコントローラーにstoreメソッドを追加してください。

	<details><summary>回答例</summary><div>

        ```php:
        <?php

        namespace App\Http\Controllers;

        use Illuminate\Http\Request;

        class PostsController extends Controller
        {
            public function index()
            {
                $posts = Post::all();
                return view('post/index', [
                    'posts' => $posts
                ]);
            }

            public function create()
            {
                return view('post.create');
            }

            public function store()
            {

            }
        }
        ```

	</div></details>
	
	<br>

24. 18で加えたstoreメソッドに下記の処理を加えてください。

    ```
    ・ブラウザから送られてくるデータを引数に持つ
    ・変数$postを定義し、送られてきたデータを代入する
    ・$postのデータをpostsテーブルに保存する
    ・トップページに戻る
    ```

	<details><summary>回答例</summary><div>

    	```php:
        <?php

        namespace App\Http\Controllers;

        use Illuminate\Http\Request;

        class PostsController extends Controller
        {
            public function index()
            {
                $posts = Post::all();
                return view('post/index', [
                    'posts' => $posts
                ]);
            }

            public function create()
            {
                return view('post.create');
            }

            public function store(Request $request)
            {
                $post = new Post();
                $post->title = $request->title;
                $post->body = $request->body;
                $post->user_id = Auth::id();

                $post->save();
                return redirect()->route('posts.index');
            }
        }
	    ```
    
	</div></details>
	
	<br>

25. POST送信でlocalhost:8000/postsのURLにアクセスした際にPostコントローラーのstoreメソッドが処理されるようにルーティングを設定してください。

	<details><summary>回答例</summary><div>

	```php:
    Route::post('/posts', 'PostController@store')->name('post.store');
	```
    
	</div></details>
	
	<br>

26. localhost:8000/posts/createにアクセスし、下記のデータを投稿してください。

    ```
    title：1回目
    body：初めての投稿です
    ```

27. localhost:8000/posts/createにアクセスし、下記のデータを投稿してください。

    ```
    title：2回目
    body：2回目の投稿です
    ```

28. localhost:8000/posts/createにアクセスし、下記のデータを投稿してください。

    ```
    title：3回目
    body：3回目の投稿です
    ```

29. localhost:8000/postsにアクセスし、postsテーブルのデータが一覧で全て表示されているか確認してください。


30. 下記の見本通りの挙動になっているか確認してください。
