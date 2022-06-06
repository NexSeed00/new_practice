# オブジェクト指向

1. Userクラスを定義するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	class User:
	```
		
	</div></details>
	

	<br>

2. 1で作成したクラス内にコンストラクタを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	class User:
	  def __init__():
	```
		
	</div></details>
	

	<br>

3. 2で作成したコンストラクタが受け取る引数の値をインスタンス変数nameに初期値として与えてください。

	<details><summary>回答例</summary><div>
		
	```
	class User:
	  def __init__(name):
	  	self.name = name
	```
		
	</div></details>
	

	<br>

4. 1で作成したクラス内で新たに引数にnameを持ち、nameの値を戻り値として返すloginメソッドを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	class User:
		def __init__(name):
			self.name = name
		def login(self):
			return self.name
	```
		
	</div></details>

	<br>

5. 4で作成したloginメソッドにインスタンス変数nameの値を使って「〜がログインしました」と出力する処理を加えてください。
	
	<details><summary>回答例</summary><div>
		
	```
	class User:
		def __init__(name):
			self.name = name
		def login(self):
			print(self.name + "がログインしました")
	```
		
	</div></details>
	
	<br>

6. 1で作成したUserクラスをインスタンス化し、インスタンスメソッドであるloginメソッドを呼び出してください。

	<details><summary>回答例</summary><div>
		
	```
	class User:
		def __init__(self, name):
			self.name = name
		def login(self):
			print(self.name + "がログインしました")

	tanaka = User("tanaka")
	tanaka.login()
	```
		
	</div></details>
	
	<br>
	
7. 1で作成したクラス内にprivateメソッドとして、インスタンス変数nameの値を戻り値として返す、isNameメソッドを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	class User:
		def __init__(self, name):
			self.name = name
		def login(self):
			print(self.name + "がログインしました")
		def __isName(self):
			return self.name
	```
		
	</div></details>
	
	<br>
	
8. 1で作成したクラス内に新たにprivate変数ageとweightを追加して、コンストラクタ内で初期化を行ってください。

	<details><summary>回答例</summary><div>
		
	```
	class User:
		def __init__(self, name, age, weight):
			self.name = name
			self.__age = age
			self.__weight = weight
		def login(self):
			print(self.name + "がログインしました")
		def __isName(self):
			return self.name
	```
		
	</div></details>
	
	<br>
	
9. 8で作成したprivate変数ageをクラス外からでも参照ができるようにしてください。

	<details><summary>回答例</summary><div>
		
	```
	class User:
		def __init__(self, name, age, weight):
			self.name = name
			self.__age = age
			self.__weight = weight
		def login(self):
			print(self.name + "がログインしました")
		def getAge(self):
			return self.__age
		def __isName(self):
			return self.name

	taro = User("taro", 20, 70)
	print(taro.getAge())
	```
		
	</div></details>
	
	<br>
	
10. 8で作成したprivate変数weightをクラス外からでも変更ができるようにしてください。

	<details><summary>回答例</summary><div>
		
	```
	class User:
		def __init__(self, name, age, weight):
			self.name = name
			self.__age = age
			self.__weight = weight
		def login(self):
			print(self.name + "がログインしました")
		def getAge(self):
			return self.__age
		def setWeight(self, weight):
			self.__weight = weight
			return self.__weight 
		def __isName(self):
			return self.name

	taro = User("taro", 20, 70)
	print(taro.setWeight(65))
	```
		
	</div></details>
	
	<br>
