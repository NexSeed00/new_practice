# 練習問題

1. 「test_app」という名前のアプリケーションを作成してください。ただし、データベースにはMySQLを使用してください。

	<details><summary>回答例</summary><div>
		
	```
	rails new test_app -d mysql
	```
		
	</div></details>
	

	<br>

2. アプリケーションで使用するデータベースをRailsコマンドを使用して作成してください。


	<details><summary>回答例</summary><div>
		
	```
	rails db:create
	```
		
	</div></details>
	

	<br>

3. 下記のファイルをダウンロードし、app/assets/imagesフォルダ内にそれぞれのファイルを追加してください。

    ダウンロードリンクは
    [こちら](https://github.com/NexSeed00/new_practice/blob/master/Rails/Practice/img.zip?raw=true)

    + app
        + assets
            + images
                + background.png  # 追加
                + logo_st.png     # 追加
                + programming.png # 追加


4. 下記のファイルをダウンロードし、app/assets/stylesheets/application.cssと入れ替えてください。

    ダウンロードリンクは
    [こちら](https://github.com/NexSeed00/new_practice/blob/master/Rails/Practice/application.css.zip?raw=true)


    + app
        + assets
            + stylesheets
                + application.css  # 入れ替え

5. ローカル環境のブラウザで表示させるためにビルトインサーバーを起動してください。

	<details><summary>回答例</summary><div>
		
	```
	rails s
	```
		
	</div></details>
	

	<br>

6. homeコントローラーを作成してください。この時、topアクションも同時に生成してください。


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
    
	<img src="https://user-images.githubusercontent.com/75789463/173013651-5ae65715-ca78-4e4d-b5d3-ab9b46b93153.gif" alt="topページ">

	</div></details>

	<br>

8. localhost:3000/topのURLにアクセスするとトップページが表示されるように、config/routes.rb内に記載されているtopアクションのルーティングを変更してください。


	<details><summary>回答例</summary><div>

	```ruby:routes.rb
    Rails.application.routes.draw do
        get "top", to: "home#top"
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
    ```html:
    <main>
        <section id="programming">
        <h2>プログラミング</h2>
        <div class="contents">
            <p class="description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sed laboriosam perspiciatis facilis molestias dolorem nihil adipisci at quae voluptas, cumque corporis quisquam et iste maxime natus error quaerat ut!
            </p>
            <%= image_tag 'programming.png' %>
        </div>
        </section>
        <section id="engineer">
        <h2>エンジニア</h2>
        <div class="contents">
            <%= image_tag 'programming.png' %>
            <p class="description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sed laboriosam perspiciatis facilis molestias dolorem nihil adipisci at quae voluptas, cumque corporis quisquam et iste maxime natus error quaerat ut!
            </p>
        </div>
        </section>
    </main>
    ```

	<details><summary>回答例</summary><div>

	```html:app/views/home/about.html.erb
    <main>
        <section id="programming">
        <h2>プログラミング</h2>
        <div class="contents">
            <p class="description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sed laboriosam perspiciatis facilis molestias dolorem nihil adipisci at quae voluptas, cumque corporis quisquam et iste maxime natus error quaerat ut!
            </p>
            <%= image_tag 'programming.png' %>
        </div>
        </section>
        <section id="engineer">
        <h2>エンジニア</h2>
        <div class="contents">
            <%= image_tag 'programming.png' %>
            <p class="description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sed laboriosam perspiciatis facilis molestias dolorem nihil adipisci at quae voluptas, cumque corporis quisquam et iste maxime natus error quaerat ut!
            </p>
        </div>
        </section>
    </main>
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
    app/views/layouts/内に_footer.html.erbファイルを追加
	```
    
	</div></details>
	
	<br>

14. localhost:3000にアクセスした際にトップページが表示されるようにルーティングを設定してください。

	<details><summary>回答例</summary><div>

	```ruby:config/routes.rb
    Rails.application.routes.draw do
        root to: "home#top"
        get "about", to: "home#about"
    end
	```
    
	</div></details>
	
	<br>

15. postsコントローラーを作成してください。この時、indexアクションも一緒に生成してください。

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
    <img src="https://user-images.githubusercontent.com/75789463/172346360-fcfd855e-5d6a-4427-a72f-c77ebc5652bc.gif" alt="投稿一覧ページ">
	</div></details>
	
	<br>

17. Postモデルを作成してください。この時、データ型がtextのcontentカラムもマイグレーションファイルに追加してください。

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

26. 25で作成したnewアクション内にインスタンス変数postを定義し、空のPostモデルインスタンスを代入してください。

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

	```html:
    <%= form_with model: @post, local: true do |form| %>
        <p><%= form.label :content %></p>
        <p><%= form.text_area :content %></p>
        <p><%= form.submit %></p>
    <% end %>
    ```
    

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

    <img src="https://user-images.githubusercontent.com/75789463/172346612-90e1026d-723a-40e4-8761-ce88e180ba49.gif" alt="投稿機能">
