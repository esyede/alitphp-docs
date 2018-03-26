# Routing

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

## Test
```php
bool function name( [ [string $arg = NULL], int $num] )
```

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

```php
// Vars
$res = 'test';
var_dump($res);
```
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
```html
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>404 Not Found</title>
	</head>
	<body>
		<center>
		<h1>404</h1>
		<p>{{ $var['test'] }}</p>
		</center>
		<ul>
		@foreach ($lang['Main']['Feature'] as $val)
			<li>{{ $val }}</li>
		@endforeach
		</ul>
	</body>
</html>
```

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
```php
// Prohibit direct access to file
defined('DS') or die('Direct file access is not allowed.');



class Test {

	const
		// Reporting level
		RL_FALSE=0,
		RL_TRUE=1,
		RL_BOTH=2;

	protected
		// Test results
		$data=[],
		// Success indicator
		$passed=TRUE;

	/**
	 * Return test results
	 * @return  array
	 */
	function results() {
		return $this->data;
	}

	/**
	 * Return FALSE if at least one test case fails
	 * @return  boolean
	 */
	function passed() {
		return $this->passed;
	}

	/**
	 * Evaluate condition and save test result
	 * @param   boolean       $cond
	 * @param   string|NULL   $msg
	 * @return  object
	 */
	function expect($cond,$msg=NULL) {
		$fw=\Alit::instance();
		$out=(bool)$cond;
		if ($this->level==$out
        ||$this->level==self::RL_BOTH) {
			$data=['status'=>$out,'message'=>$msg,'source'=>NULL];
			foreach (debug_backtrace() as $src)
				if (isset($src['file'])) {
					$data['source']=$fw->slash($src['file']).
						':<font color="red">'.$src['line'].'</font>';
					break;
				}
			$this->data[]=$data;
		}
		if (!$out&&$this->passed)
			$this->passed=FALSE;
		return $this;
	}

	/**
	 * Append message to test results
	 * @param   string  $msg
	 * @return  void
	 */
	function message($msg) {
		$this->expect(TRUE,$msg);
	}

	/**
	 * Class constructor
	 * @param  int  $level
	 */
	function __construct($level=self::RL_BOTH) {
		$this->level=$level;
	}
}
```