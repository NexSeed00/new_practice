# オブジェクト指向

1. Userクラスを定義するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	public class User {
		public static void main(String[] args) {

		}
	}
	```
		
	</div></details>
	

	<br>

2. 1で作成したクラス内にコンストラクタを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	public class User {
		public static void main(String[] args) {

		}

		User() {

		}
	}
	```
		
	</div></details>
	

	<br>

3. 2で作成したコンストラクタが受け取る引数の値をインスタンス変数nameに初期値として与えてください。

	<details><summary>回答例</summary><div>
		
	```
	public class User {
		public String name;

		public static void main(String[] args) {

		}

		User(String value1) {
			name = value1;
		}
	}
	```
		
	</div></details>
	

	<br>

4. 1で作成したクラス内で新たにインスタンス化しないと使えず、戻り値を返さないloginメソッドを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	public class User {
		public String name;

		public static void main(String[] args) {

		}

		User(String value1) {
			name = value1;
		}

		public void login() {

		}
	}
	```
		
	</div></details>

	<br>

5. 4で作成したloginメソッドに「ログインしました」と出力する処理を加えてください。
	
	<details><summary>回答例</summary><div>
		
	```
	public class User {
		public String name;

		public static void main(String[] args) {

		}

		User(String value1) {
			name = value1;
		}

		public void login() {
			System.out.println("ログインしました");
		}
	}
	```
		
	</div></details>
	
	<br>

6. 1で作成したUserクラスをインスタンス化し、インスタンスメソッドであるloginメソッドを呼び出してください。

	<details><summary>回答例</summary><div>
		
	```
	public class User {
		public String name;

		public static void main(String[] args) {
			User taro =  new User("taro");
			taro.login();
		}

		User(String value1) {
			name = value1;
		}

		public void login() {
			System.out.println("ログインしました");
		}
	}
	```
		
	</div></details>
	
	<br>
	
7. 1で作成したクラス内にアクセス修飾子をprivateとし、インスタンス変数nameの値を戻り値として返す、isNameメソッドを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	public class User {
		public String name;

		public static void main(String[] args) {
			User taro =  new User("taro");
			taro.login();
		}

		User(String value1) {
			name = value1;
		}

		public void login() {
			System.out.println("ログインしました");
		}

		private String isName() {
			return this.name;
		}
	}
	```
		
	</div></details>
	
	<br>
	
8. 1で作成したクラス内に新たにインスタンス変数ageとweightを追加して、コンストラクタ内で初期化を行ってください。

	<details><summary>回答例</summary><div>
		
	```
	public class User {
		public String name;
		public int age;
		public int weight;

		public static void main(String[] args) {
			User taro =  new User("taro", 20, 70);
			taro.login();
		}

		User(String value1, int value2, int value3) {
			name = value1;
			age = value2;
			weight = value3;
		}

		public void login() {
			System.out.println("ログインしました");
		}
	}
	```
		
	</div></details>
	
	<br>
	
9. 【発展】8で作成したインスタンス変数ageをクラス外からでも参照できるようにしてください。(本講座では扱っていませんが、「getter」についてご自身で調べて解いてみましょう)

	<details><summary>回答例</summary><div>
		
	```
	public class User {
		public String name;
		public int age;
		public int weight;

		public static void main(String[] args) {
			User taro =  new User("taro", 20, 70);
			taro.login();
			System.out.println(taro.getAge());
		}

		User(String value1, int value2, int value3) {
			name = value1;
			age = value2;
			weight = value3;
		}

		public void login() {
			System.out.println("ログインしました");
		}

		public int getAge() {
			return this.age;
		}
	}
	```
		
	</div></details>
	
	<br>
	
10. 【発展】8で作成したインスタンス変数ageをクラス外からでも参照ができるようにしてください。(本講座では扱っていませんが、「setter」についてご自身で調べて問題を解いてください)

	<details><summary>回答例</summary><div>
		
	```
	public class User {
		public String name;
		public int age;
		public int weight;

		public static void main(String[] args) {
			User taro =  new User("taro", 20, 70);
			taro.login();
			System.out.println(taro.getAge());
			System.out.println(taro.setWeight(65));
		}

		User(String value1, int value2, int value3) {
			name = value1;
			age = value2;
			weight = value3;
		}

		public void login() {
			System.out.println("ログインしました");
		}

		public int getAge() {
			return this.age;
		}
		
		public int setWeight(int weight) {
			this.weight = weight;
			return this.weight;
		}
	}
	```
		
	</div></details>
	
	<br>
