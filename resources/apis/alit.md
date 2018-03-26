# Alit

This file is a foundation of alit framework, consists of three classes including: [Factory](factory), [Warehouse](warehouse) and this Alit class itself. It handles routing, native templating and the whole of system variables

Actually this file can be used as a stand alone script, means if you dont need other libaries, you can remove them. It will still works just fine.

Namespace: `\`

Location: `fw/alit.php`
<hr>



## Hive, the bee nest!
Hive (as bee hive) is a global system variables that holds values in the form of key/value arrays. 
Saving value to hive will guarantee that your saved value will be available globally to all of class and methods in your application.

In order to play around with hive, we provide some methhod that you can use. Let's take a look of them:

### set
**Set a value to hive or rewrite it if already exist**
```php
void set( string $key, mixed $val = NULL )
```
Usage example:
```php
$fw->set('a'); // a=NULL
$fw->set('b',123); // B=123, integer
$fw->set('c','foo'); // c='foo', string
$fw->set('d',TRUE); // d=TRUE, boolean
$fw->e='foo'; // magic method, first node only
```
Setting an array:
```php
$fw->set('a',array('b'=>'ccc'));
// Anda juga dapat menggunakan dot notation seperti di javascript
$fw->set('a.d','ddd');
$fw->set('a.1','111');
$fw->get('a.b'); // ccc
```
Setting multiple arrays:
```php
$fw->set(array('a.b'=>'bbb','b.c'=>'ccc','d.e.f'=>'fff'));
```


#### System Variables
Framework ini memiliki [Variabel Sistem](system-variables) tersendiri. 
Seluruh key variabel sistem ini dinamai dengan huruf kapital. Anda bisa mengubahnya untuk memodifikasi 
perilaku alit, sebagai contoh:
```php
$fw->set('DEBUG',3); // set level debug
$fw->set('LOG',TRUE); // mengaktifkan system log
```

### get
**Get a value from hive or default value if path doesn't exist**
```php
void get( string $key [, mixed $default=NULL ] )
```
Usage example:
```php
$fw->set('a.b.c','foo');
$fw->get('a.b.c'); // string 'foo'
$fw->get('a.b'); // array( [c]=>foo )
```
Get with default value:
```php
$fw->set('a'=>'aaa');
$fw->get('b'); // NULL
$fw->get('b','foo'); // string 'foo'
```

### add
**Add a value or array of value to hive**
```php
void add( string $key, $val=NULL [, $pop = FALSE ] )
```
<div class="alert alert-info">
	<i class="fa fa-info-circle"></i><code>$pop</code> is a helper to pop out the last key if the value is an array
</div>

Usage example:
```php
$fw->add('a.b','bbb');
$fw->add('a.c','ccc');
$fw->get('a');
// Result:
array(
    'bar'=>array('bbb'),
    'baz'=>array('ccc')
);
```
Adding value with pop:
```php
$fw->add('a.b','bbb');
$fw->add('a.c','ccc',TRUE);
$fw->get('a');
// Result:
array(
    'b'=>array('bbb'),
    0=>'ccc'
);
 */
```
Adding with associative array:
```php
$fw->add('a',array('b'=>'bbb','b.c'=>'ccc','b.d'=>'ddd'));
```

### has
**Check if key exists in hive**
```php
boolean has( string $key )
```
Usage example:
```php
$fw->set('a.b','bbb');
$fw->has('a'); // true
$fw->has('a.b'); // true
$fw->has('a.c'); // false
```

### exists
**Determine if the given key exists in the provided array**
```php
boolean exists( string $key, array $arr )
```
Usage example:
```php
$arr=array('a'=>'bbb');
$fw->exists('a',$arr); // true
$fw->exists('c',$arr); // false
```

### clear
**Clear a values of given hive key or keys**
```php
void clear( string|array $key )
```
Usage example:
```php
$fw->set('a',array('b'=>'bbb','c'=>'ccc','d'=>'ddd','e'=>'eee'));
$fw->clear('a.b');
$fw->clear(array('a.c','a.d'));
$fw->get('a');
// Result:
array(
	'b'=>array(),
	'c'=>array(),
	'd'=>array(),
	'e'=>'eee'
);
```

### erase
**Erase a hive path or array of hive paths**
```php
void erase( string|array $key )
```
Usage example:
```php
$fw->set('a',array('b'=>'bbb','c'=>'ccc','d'=>'ddd','e'=>'eee'));
$fw->erase('a.b');
$fw->erase(array('a.c','a.d'));
$fw->get('a');
// Result:
array('e'=>'eee');
```

### dry
**Check if given key or keys are empty**
```php
boolean dry( string|array $key )
```
<div class="alert alert-warning">
	<i class="fa fa-warning"></i> This method is uses the PHP's <code>empty()</code> function for checking. So, consider to take a look at <a href="http://php.net/functions.empty"> PHP empty() behaviour</a>.
</div>
Usage example:
```php
$fw->set('a',array('b'=>'bbb','c'=>'','d'=>array(),'e'=>TRUE,'f'=>FALSE));
$fw->dry('a.b'); // false
$fw->dry('a.e'); // false
$fw->dry(array('a.c','a.d','a.f')); // true
```

### merge
**Merge a given array with the given key**
```php
void merge( string|array $key, mixed $val = NULL )
```
Usage example:
```php
$fw->set('a.b','aaa');
$fw->merge('a.c');
$fw->merge('a.d','ddd');
// Result:
array(
    'b'=>'aaa',
    'c'=>array(),
    'd'=>array('ddd')
);
```

### pull
**Return the value of given key and delete the actual key**
```php
mixed pull( string $key [, mixed $default = NULL ] )
```
Usage example:
```php
$fw->set('a',array('b'=>'bbb','c'=>'ccc'));
echo $fw->pull('a.b'); // bbb
$fw->get('a');
// Result:
array('c'=>'ccc');

echo $fw->pull('a.x'); // NULL
echo $fw->pull('a.x','foo'); // foo
```

### push
**Push a given array to the end of the array in a given key**
```php
void push( string|array $key, mixed $val = NULL )
```
Usage example:
```php
$fw->set('a',array('b'=>'bbb','c'=>'ccc'));
$fw->push('a.c'); // array('a'=>array('c'=>NULL));
$fw->push(array('a.d'=>array('foo','bar'))); // string 'foo'
$fw->get('a');
// Result:
array(
    'b'=>'bbb'
    'c'=>'ccc'
    'd'=>array('foo','bar')
);
```

### sort
**Sort the values of a hive path or the entire hive**
```php
array sort( string|NULL $key )
```
Usage example:
```php
$fw->set(array(
    'a.1'=>'one',
    'a.x'=>'foo',
    'a.m'=>'bar',
    'a.c'=>'baz'
));
$data=$fw->sort('a');
print_r($data);
// Result:
array(
    'c'=>'baz'
    'm'=>'bar'
    'x'=>'foo'
    '1'=>'one'
);
```

### recsort
**Sort the values of a hive path or the entire hive**
```php
array recsort( [ string|NULL $key = NULL [, array|NULL $arr = NULL ]] )
```
Usage example:
```php
// Not Provided
// Not Ptovided
```

### arrsort
**Sort the given array**
```php
array arrsort( array $arr )
```
Usage example:
```php
// Not Provided
// Not Ptovided
```

### accessible
**Determine whether the given value is array accessible**
```php
boolean accessible( array $arr )
```
Usage example:
```php
// Not Provided
// Not Ptovided
```

### isassoc
**Determine if an array is associative**
```php
boolean isassoc( array|NULL $arr = NULL )
```
Usage example:
```php
// Not Provided
// Not Ptovided
```

### ref
**Store a key as reference**
```php
boolean isassoc( string $key, mixed  &$val = NULL )
```
Usage example:
```php
// Not Provided
// Not Ptovided
```

### hive
**Get all stored values in hive**
```php
boolean hive( )
```
Usage example:
```php
print_r($fw->hive());
```
