# オブジェクト指向

1. Userクラスを定義するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	class User
	end
	```
		
	</div></details>
	

	<br>

2. 1で作成したクラス内にコンストラクタを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	class User
	  def initialize(name)
	  end
	end	
	```
		
	</div></details>
	

	<br>

3. 2で作成したコンストラクタが受け取る引数の値をインスタンス変数nameに初期値として与えてください。

	<details><summary>回答例</summary><div>
		
	```
	class User
	  def initialize(name)
	    @name = name
	  end
	end	
	```
		
	</div></details>
	

	<br>

4. 1で作成したクラス内で新たにloginメソッドを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	class User
	  def initialize(name)
	    @name = name
	  end

	  def login
	  end
	end	
	```
		
	</div></details>

	<br>

5. 4で作成したloginメソッドにインスタンス変数nameの値を使って「〜がログインしました」と出力する処理を加えてください。
	
	<details><summary>回答例</summary><div>
		
	```
	class User
	  def initialize(name)
	    @name = name
	  end

	  def login
	    puts "#{@name}がログインしました"
	  end
	end	
	```
		
	</div></details>
	
	<br>

6. 1で作成したUserクラスをインスタンス化し、インスタンスメソッドであるloginメソッドを呼び出してください。

	<details><summary>回答例</summary><div>
		
	```
	class User
	  def initialize(name)
	    @name = name
	  end

	  def login
	    puts "#{@name}がログインしました"
	  end
	end

	tanaka = User.new("tanaka")
	tanaka.login
	```
		
	</div></details>
	
	<br>
	
7. 1で作成したクラス内にアクセス修飾子をprivateとして記述し、インスタンス変数nameの値を戻り値として返す、is_nameメソッドを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	class User
	  def initialize(name)
	    @name = name
	  end

	  def login
	    puts "#{@name}がログインしました"
	  end

	  private
	  def is_name
	    return @name
	  end
	end
	```
		
	</div></details>
	
	<br>
	
8. 1で作成したクラス内に新たにインスタンス変数ageとweightを追加して、コンストラクタ内で初期化を行ってください。

	<details><summary>回答例</summary><div>
		
	```
	class User
	  def initialize(name, age, weight)
	    @name = name
	    @age = age
	    @weight = weight
	  end

	  def login
	    puts "#{@name}がログインしました"
	  end

	  private
	  def is_name
	    return @name
	  end
	end
	```
		
	</div></details>
	
	<br>
	
9. 8で作成したインスタンス変数weightをクラス外からでも参照と変更ができるようにしてください。

	<details><summary>回答例</summary><div>
		
	```
	class User
	  attr_accessor :weight

	  def initialize(name, age, weight)
	    @name = name
	    @age = age
	    @weight = weight
	  end

	  def login
	    puts "#{@name}がログインしました"
	  end

	  private
	  def is_name
	    return @name
	  end
	end
	```
		
	</div></details>
	
	<br>
	
10. 8で作成したインスタンス変数ageをクラス外からでも参照ができるようにしてください。

	<details><summary>回答例</summary><div>
		
	```
	class User
	  attr_accessor :weight
	  attr_reader :age

	  def initialize(name, age, weight)
	    @name = name
	    @age = age
	    @weight = weight
	  end

	  def login
	    puts "#{@name}がログインしました"
	  end

	  private
	  def is_name
	    return @name
	  end
	end
	```
		
	</div></details>
	
	<br>
