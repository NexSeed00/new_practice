# 変数

1. 「test_app」という名前のアプリケーションを作成してください。ただし、データベースにはMySQLを指定してください。

	<details><summary>回答例</summary><div>
		
	```
	rails new test_app -d mysql
	```
		
	</div></details>
	

	<br>

2. 「test_app」のデータベースを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	rails db:create
	```
		
	</div></details>
	

	<br>

3. 下記のファイルをダウンロードし、app/assets/imagesフォルダ内にそれぞれのファイルを追加してください。

	```
    ファイルリンク
    https://github.com/NexSeed00/new_practice/blob/master/Rails/Practice/img.zip?raw=true
    ```

4. 下記のファイルをダウンロードし、app/assets/stylesheets/application.cssと入れ替えてください。

	```
    ファイルリンク
    https://github.com/NexSeed00/new_practice/blob/master/Rails/Practice/application.css.zip?raw=true
    ```

5. 「test_app」をローカル環境のブラウザで表示させるためにサーバーを起動してください。

	<details><summary>回答例</summary><div>
		
	```
	rails s
	```
		
	</div></details>
	

	<br>

6. 「test_app」にhomeコントローラーを作成してください。この時、topアクションも一緒に生成するようにしてください。

	<details><summary>回答例</summary><div>
		
	```
	rails g controller home top
	```
		
	</div></details>
	

	<br>

7. app/views/home/top.html.erbに下記のコードを貼り付けて、localhost:3000/home/topにアクセスしてください。

	```html:app/views/home/top.html.erb
    <main>
        <section class="welcome">
        <h1 class="title">Welcome to sodatech</h1>
        <ul class="guideline">
            <li>育てる</li>
            <li>テクノロジー人材</li>
            <li>ソダテク</li>
        </ul>
        </section>
    </main>
	```
		
	<details><summary>回答例</summary><div>
	![topページ](https://user-images.githubusercontent.com/75789463/172346149-e09893ae-98f2-48d2-affa-1cc7e373a79e.gif)
	</div></details>

	<br>

8. localhost:3000/topのURLでトップページが表示されるように、config/routes.rb内に記載されているtopアクションのルーティングを変更してください。

	<details><summary>回答例</summary><div>

	```ruby:routes.rb
    Rails.application.routes.draw do
        get "top" => "home#top"
    end
	```
    
	</div></details>
	
	<br>

9. homeコントローラーにaboutアクションを追加してください。

	<details><summary>回答例</summary><div>

	```ruby:app/controllers/home_controller.rb
    class HomeController < ApplicationController
        def top
        end
        
        def about
        end
    end
	```
    
	</div></details>
	
	<br>

10. localhost:3000/aboutのリンクでaboutアクションが呼び出されるように、config/routes.rb内にルーティングを作成してください。

	<details><summary>回答例</summary><div>

	```ruby:routes.rb
    Rails.application.routes.draw do
        get "top", to: "home#top"
        get "about", to: "home#about"
    end
	```
    
	</div></details>
	
	<br>

11. homeコントローラーのaboutアクションに対応するビューを作成してください。

	<details><summary>回答例</summary><div>

	```
    app/views/home内にabout.html.erbファイルを追加
	```
    
	</div></details>
	
	<br>

12. about.html.erbに下記のコードを貼り付け、localhost:3000/aboutにアクセスし、正しく表示がされているか確認してください。

	<details><summary>回答例</summary><div>

	```
    app/views/home内にabout.html.erbファイルを追加
	```
    
	</div></details>
	
	<br>

13. 下記のコードを貼り付けた部分テンプレートファイルを用意してください。ただし、ファイル名は「_header.html.erb」と「_footer.html.erb」とします。

    ```html
    <!-- _header.html.erb -->

    <header>
        <div class="header-left">
        <%= image_tag "logo_st.png", class: "logo", alt: "logo" %>
        </div>
        <div class="header-right">
        <ul class="nav">
            <li><a href="#programming">プログラミング</a></li>
            <li><a href="#engineer">エンジニア</a></li>
        </ul>
        </div>
    </header>
    ```

    ```html
    <!-- _footer.html.erb -->

    <footer>
        <small>Copyright &copy; IT人材 .inc</small>
    </footer>
    ```


	<details><summary>回答例</summary><div>

	```
    app/views/layouts/内に_header.html.erbファイルを追加
	```
    
	</div></details>
	
	<br>

14. localhost:3000にアクセスした際にトップページが表示されるようにルーティングを設定してください。

	<details><summary>回答例</summary><div>

	```ruby:config/routes.rb
    Rails.application.routes.draw do
        root "home#top"
        get "about", to: "home#about"
    end
	```
    
	</div></details>
	
	<br>

15. 「test_app」にpostsコントローラーを作成してください。この時、indexアクションも一緒に生成するようにしてください。

	<details><summary>回答例</summary><div>

	```
    rails g controller posts index
    ```
    
	</div></details>
	
	<br>

16. app/views/posts/index.html.erbに下記のコードを貼り付け、localhost:3000/posts/indexにアクセスしてください。

	<details><summary>回答例</summary><div>

	```
    rails g controller posts index
    ```
    ![投稿一覧ページ](https://user-images.githubusercontent.com/75789463/172346360-fcfd855e-5d6a-4427-a72f-c77ebc5652bc.gif)
	</div></details>
	
	<br>

17. 「test_app」にPostモデルを作成してください。この時、データ型がtextのcontentカラムもマイグレーションファイルに追加するようにしてください。

	<details><summary>回答例</summary><div>

	```
    rails g model Post content:text
    ```
    
	</div></details>
	
	<br>

18. 17で作成されたマイグレーションファイルの内容をデータベースに反映させてください。

	<details><summary>回答例</summary><div>

	```
    rails db:migrate
    ```
    
	</div></details>
	
	<br>

19. rails consoleを使って、contentカラムの値が「初めての投稿です」というデータをpostsテーブルに保存してください。

	<details><summary>回答例</summary><div>

	```
    rails console
    post = Post.new(content: "初めての投稿です")
    post.save
    ```
    
	</div></details>
	
	<br>

20. rails consoleを使って、contentカラムの値が「2回目の投稿です」というデータをpostsテーブルに保存してください。

	<details><summary>回答例</summary><div>

	```
    rails console
    post = Post.new(content: "2回目の投稿です")
    post.save
    ```
    
	</div></details>
	
	<br>

21. rails consoleを使って、contentカラムの値が「3回目の投稿です」というデータをpostsテーブルに保存してください。

	<details><summary>回答例</summary><div>

	```
    rails console
    post = Post.new(content: "3回目の投稿です")
    post.save
    ```
    
	</div></details>
	
	<br>

22. rails consoleを使って、postsテーブルのデータを全て取得してください。

	<details><summary>回答例</summary><div>

	```
    rails console
    Post.all
    ```
    
	</div></details>
	
	<br>

23. postsコントローラーのindexアクション内に下記のインスタンス変数を加えてください。

    ```
    インスタンス変数名：posts
    値：postsテーブルに格納されている全てのデータ
    ```

	<details><summary>回答例</summary><div>

	```ruby:app/controllers/posts_controller.rb
    class PostsController < ApplicationController
        def index
            @posts = Post.all
        end
    end
    ```
    
	</div></details>
	
	<br>

24. views/posts/index.html.erbでpostsテーブルのcontentカラムに格納されたデータを全て表示させてください。

	<details><summary>回答例</summary><div>

	```
    <% @posts.each do |post| %>
        <%= post.content %>
    <% end %>
    ```
    
	</div></details>
	
	<br>

25. postsコントローラーに新たにnewアクションを加えてください。

	<details><summary>回答例</summary><div>

	```ruby:app/controllers/posts_controller.rb
    class PostsController < ApplicationController
        def index
            @posts = Post.all
        end

        def new
        end
    end
    ```
    
	</div></details>
	
	<br>

26. 25で作成したnewアクション内にインスタンス変数postを定義し、空のインスタンスを代入してください。

	<details><summary>回答例</summary><div>

	```ruby:app/controllers/posts_controller.rb
    class PostsController < ApplicationController
        def index
            @posts = Post.all
        end

        def new
            @post = Post.new
        end
    end
    ```
    
	</div></details>
	
	<br>

27. app/views/posts配下にnew.html.erbを作成し、下記のコードを貼り付けてください。

	<details><summary>回答例</summary><div>

	```html:
    <%= form_with model: @post, local: true do |form| %>
        <p><%= form.label :content %></p>
        <p><%= form.text_area :content %></p>
        <p><%= form.submit %></p>
    <% end %>
    ```
    
	</div></details>
	
	<br>

28. postsコントローラーに新たにcreateアクションを加えてください。

	<details><summary>回答例</summary><div>

	```ruby:app/controllers/posts_controller.rb
    class PostsController < ApplicationController
        def index
            @posts = Post.all
        end

        def new
            @post = Post.new
        end

        def create
        end
    end
    ```
    
	</div></details>
	
	<br>

29. 28で加えたcreateアクションに下記を加えてください。

    ```
    ・データを新規登録するためのインスタンス
    ・データをデータベースに保存するための処理
    ・トップ画面へリダイレクトを行う処理
    ```

	<details><summary>回答例</summary><div>

	```ruby:app/controllers/posts_controller.rb
    class PostsController < ApplicationController
        def index
            @posts = Post.all
        end

        def new
            @post = Post.new
        end

        def create
            @post = Post.new(content: params[:post][:content])
            @post.save
            redirect_to root_path
        end
    end
    ```
    
	</div></details>
	
	<br>

30. 下記の見本通りの挙動になっているか確認してください。

	<details><summary>回答例</summary><div>
    ![投稿機能](https://user-images.githubusercontent.com/75789463/172346612-90e1026d-723a-40e4-8761-ce88e180ba49.gif)
	</div></details>
	
	<br>
