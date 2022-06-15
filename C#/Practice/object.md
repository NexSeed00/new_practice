# クラス

1. Userクラスを定義するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	using System.Collections;
	using System.Collections.Generic;
	using UnityEngine;

	public class User : MonoBehaviour
	{
		void Start()
		{
			
		}

		void Update()
		{
			
		}
	}
	```
		
	</div></details>
	

	<br>

2. Actionクラスを定義するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	using System.Collections;
	using System.Collections.Generic;
	using UnityEngine;

	public class Action : MonoBehaviour
	{
		void Start()
		{
			
		}

		void Update()
		{
			
		}
	}
	```
		
	</div></details>
	

	<br>

3. Actionクラスに下記のメソッドを定義してプログラムを作成してください。

	```
	メソッド名：Run
	処理内容：走ると出力する
	```

	<details><summary>回答例</summary><div>
		
	```
	using System.Collections;
	using System.Collections.Generic;
	using UnityEngine;

	public class Action : MonoBehaviour
	{
		public void Run() 
		{
			Debug.Log("走る")
		}
	}
	```
		
	</div></details>
	

	<br>

4. UserクラスにActionクラスを繋げるための窓口を作成してください。

	<details><summary>回答例</summary><div>
		
	```
	using System.Collections;
	using System.Collections.Generic;
	using UnityEngine;

	public class User : MonoBehaviour
	{
		public Action action;
		
		void Start()
		{
			
		}

		void Update()
		{
			
		}
	}
	```
		
	</div></details>
	

	<br>

5. UserクラスのStartメソッド内でActionクラスのRunメソッドを呼び出してください。

	<details><summary>回答例</summary><div>
		
	```
	using System.Collections;
	using System.Collections.Generic;
	using UnityEngine;

	public class User : MonoBehaviour
	{
		public Action action;

		void Start()
		{
			action.Run();
		}

		void Update()
		{
			
		}
	}
	```
		
	</div></details>
	

	<br>

