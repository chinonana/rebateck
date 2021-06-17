{"filter":false,"title":"web.php","tooltip":"/blog/routes/web.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":11,"column":2},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":152}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":51},"action":"insert","lines":["Route::get('/posts/{post}', 'PostController@show');"],"id":153}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":51},"action":"remove","lines":["Route::get('/posts/{post}', 'PostController@show');"],"id":154},{"start":{"row":11,"column":2},"end":{"row":12,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":11,"column":2},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":155}],[{"start":{"row":12,"column":0},"end":{"row":14,"column":3},"action":"insert","lines":["Route::get('/', function() {","    return view('index');","});"],"id":156}],[{"start":{"row":12,"column":0},"end":{"row":14,"column":3},"action":"remove","lines":["Route::get('/', function() {","    return view('index');","});"],"id":157}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":40},"action":"insert","lines":["Route::get('/', 'PostController@index');"],"id":158}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":40},"action":"remove","lines":["Route::get('/', 'PostController@index');"],"id":159}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":51},"action":"insert","lines":["Route::get('/posts/{post}', 'PostController@show');"],"id":160}],[{"start":{"row":11,"column":2},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":161}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":["R"],"id":162},{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":["O"]}],[{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"remove","lines":["O"],"id":163}],[{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":["o"],"id":164},{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"insert","lines":["u"]},{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"insert","lines":["t"]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["Rout"],"id":165},{"start":{"row":12,"column":0},"end":{"row":12,"column":5},"action":"insert","lines":["Route"]}],[{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"insert","lines":[":"],"id":166},{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"insert","lines":[":"]}],[{"start":{"row":12,"column":7},"end":{"row":12,"column":10},"action":"insert","lines":["get"],"id":167}],[{"start":{"row":12,"column":10},"end":{"row":12,"column":12},"action":"insert","lines":["()"],"id":168}],[{"start":{"row":12,"column":11},"end":{"row":12,"column":13},"action":"insert","lines":["\"\""],"id":169}],[{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"insert","lines":["/"],"id":170}],[{"start":{"row":12,"column":14},"end":{"row":12,"column":15},"action":"insert","lines":[","],"id":171}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":17},"action":"insert","lines":["\"\""],"id":172}],[{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"insert","lines":["P"],"id":173},{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"insert","lines":["o"]}],[{"start":{"row":12,"column":16},"end":{"row":12,"column":18},"action":"remove","lines":["Po"],"id":174},{"start":{"row":12,"column":16},"end":{"row":12,"column":30},"action":"insert","lines":["PostController"]}],[{"start":{"row":12,"column":30},"end":{"row":12,"column":31},"action":"insert","lines":["@"],"id":175}],[{"start":{"row":12,"column":31},"end":{"row":12,"column":32},"action":"insert","lines":["i"],"id":176},{"start":{"row":12,"column":32},"end":{"row":12,"column":33},"action":"insert","lines":["n"]},{"start":{"row":12,"column":33},"end":{"row":12,"column":34},"action":"insert","lines":["d"]},{"start":{"row":12,"column":34},"end":{"row":12,"column":35},"action":"insert","lines":["e"]},{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"insert","lines":["x"]}],[{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"insert","lines":[";"],"id":177}],[{"start":{"row":12,"column":39},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":178}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":53},"action":"insert","lines":["Route::get('/posts/create', 'PostController@create');"],"id":179}],[{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"remove","lines":["\""],"id":180}],[{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"insert","lines":["'"],"id":181}],[{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"remove","lines":["\""],"id":182}],[{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":["'"],"id":183}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"remove","lines":["\""],"id":184}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"insert","lines":["'"],"id":185}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"remove","lines":["\""],"id":186}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"insert","lines":["'"],"id":187}],[{"start":{"row":14,"column":51},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":188}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":46},"action":"insert","lines":["Route::post('/posts', 'PostController@store');"],"id":189}],[{"start":{"row":15,"column":46},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":190},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""]},{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""]},{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":19,"column":0},"end":{"row":24,"column":3},"action":"insert","lines":["Route::get('/', function () {","  return view('welcome');","});","Route::get('hello', function() {","  return view('hello.index');","});"],"id":191}],[{"start":{"row":17,"column":0},"end":{"row":24,"column":3},"action":"remove","lines":["","","Route::get('/', function () {","  return view('welcome');","});","Route::get('hello', function() {","  return view('hello.index');","});"],"id":192},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"remove","lines":["",""]},{"start":{"row":15,"column":46},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":11,"column":2},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":193},{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":14,"column":0},"end":{"row":16,"column":3},"action":"insert","lines":["Route::get('/', function() {","    return view('index');","});"],"id":194}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":45},"action":"insert","lines":["Route::get('/posts', 'PostController@index');"],"id":195}],[{"start":{"row":13,"column":45},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":196}],[{"start":{"row":15,"column":0},"end":{"row":17,"column":3},"action":"remove","lines":["Route::get('/', function() {","    return view('index');","});"],"id":197}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":40},"action":"insert","lines":["Route::get('/', 'PostController@index');"],"id":198}],[{"start":{"row":15,"column":40},"end":{"row":16,"column":39},"action":"remove","lines":["","Route::get('/','PostController@index');"],"id":199}],[{"start":{"row":15,"column":40},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":200},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":51},"action":"insert","lines":["Route::get('/posts/{post}', 'PostController@show');"],"id":201}],[{"start":{"row":17,"column":51},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":202}],[{"start":{"row":19,"column":53},"end":{"row":20,"column":51},"action":"remove","lines":["","Route::get('/posts/{post}', 'PostController@show');"],"id":203}],[{"start":{"row":19,"column":53},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":204}],[{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":205},{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":53},"action":"insert","lines":["Route::get('/posts/create', 'PostController@create');"],"id":206}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":53},"action":"remove","lines":["Route::get('/posts/create', 'PostController@create');"],"id":207}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":46},"action":"insert","lines":["Route::post('/posts', 'PostController@store');"],"id":208}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":46},"action":"remove","lines":["Route::post('/posts', 'PostController@store');"],"id":209},{"start":{"row":21,"column":53},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"remove","lines":["",""],"id":210},{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"remove","lines":["",""]},{"start":{"row":17,"column":51},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":15,"column":40},"end":{"row":16,"column":0},"action":"remove","lines":["",""],"id":211}],[{"start":{"row":13,"column":45},"end":{"row":14,"column":0},"action":"remove","lines":["",""],"id":212}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":["/"],"id":213},{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"remove","lines":["/"],"id":214},{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":17,"column":46},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":216}],[{"start":{"row":18,"column":0},"end":{"row":19,"column":53},"action":"insert","lines":["Route::get('/posts/{post}/edit', 'PostController@edit');","Route::put('/posts/{post}', 'PostController@update');"],"id":217}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":["/"],"id":218},{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":17,"column":46},"end":{"row":19,"column":53},"action":"remove","lines":["","Route::get('/posts/{post}/edit', 'PostController@edit');","Route::put('/posts/{post}', 'PostController@update');"],"id":219}],[{"start":{"row":17,"column":46},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":220}],[{"start":{"row":18,"column":0},"end":{"row":19,"column":53},"action":"insert","lines":["Route::get('/posts/{post}/edit', 'PostController@edit');","Route::put('/posts/{post}', 'PostController@update');"],"id":221}],[{"start":{"row":13,"column":45},"end":{"row":14,"column":42},"action":"remove","lines":["","//Route::get('/', 'PostController@index');"],"id":222}],[{"start":{"row":13,"column":45},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":223}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":53},"action":"insert","lines":["","Route::get('/posts/create', 'PostController@create');"],"id":224}],[{"start":{"row":13,"column":45},"end":{"row":14,"column":0},"action":"remove","lines":["",""],"id":225}],[{"start":{"row":15,"column":51},"end":{"row":16,"column":53},"action":"remove","lines":["","Route::get('/posts/create', 'PostController@create');"],"id":226}],[{"start":{"row":14,"column":53},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":227},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":56},"action":"insert","lines":["Route::get('/posts/{post}/edit', 'PostController@edit');"],"id":228}],[{"start":{"row":19,"column":46},"end":{"row":20,"column":56},"action":"remove","lines":["","Route::get('/posts/{post}/edit', 'PostController@edit');"],"id":229}],[{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"remove","lines":["",""],"id":230},{"start":{"row":15,"column":56},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":16,"column":51},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":231}],[{"start":{"row":16,"column":51},"end":{"row":17,"column":0},"action":"remove","lines":["",""],"id":232}],[{"start":{"row":17,"column":46},"end":{"row":18,"column":53},"action":"remove","lines":["","Route::put('/posts/{post}', 'PostController@update');"],"id":233}],[{"start":{"row":16,"column":51},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":234}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":51},"action":"insert","lines":["Route::get('/posts/{post}', 'PostController@show');"],"id":235}],[{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"remove","lines":["t"],"id":236},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"remove","lines":["e"]},{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"remove","lines":["g"]}],[{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"insert","lines":["p"],"id":237},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["u"]},{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["t"]}],[{"start":{"row":15,"column":56},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":238}],[{"start":{"row":16,"column":0},"end":{"row":17,"column":51},"action":"insert","lines":["","Route::put('/posts/{post}', 'PostController@show');"],"id":239}],[{"start":{"row":15,"column":56},"end":{"row":16,"column":0},"action":"remove","lines":["",""],"id":240}],[{"start":{"row":17,"column":51},"end":{"row":18,"column":51},"action":"remove","lines":["","Route::put('/posts/{post}', 'PostController@show');"],"id":241}],[{"start":{"row":16,"column":47},"end":{"row":16,"column":48},"action":"remove","lines":["w"],"id":242},{"start":{"row":16,"column":46},"end":{"row":16,"column":47},"action":"remove","lines":["o"]},{"start":{"row":16,"column":45},"end":{"row":16,"column":46},"action":"remove","lines":["h"]},{"start":{"row":16,"column":44},"end":{"row":16,"column":45},"action":"remove","lines":["s"]}],[{"start":{"row":16,"column":44},"end":{"row":16,"column":45},"action":"insert","lines":["u"],"id":243},{"start":{"row":16,"column":45},"end":{"row":16,"column":46},"action":"insert","lines":["p"]},{"start":{"row":16,"column":46},"end":{"row":16,"column":47},"action":"insert","lines":["d"]},{"start":{"row":16,"column":47},"end":{"row":16,"column":48},"action":"insert","lines":["a"]},{"start":{"row":16,"column":48},"end":{"row":16,"column":49},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":49},"end":{"row":16,"column":50},"action":"insert","lines":["e"],"id":244}],[{"start":{"row":16,"column":53},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":245}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":56},"action":"insert","lines":["Route::delete('/posts/{post}', 'PostController@delete');"],"id":246}],[{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"remove","lines":["e"],"id":247}],[{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["o"],"id":248}],[{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"remove","lines":["o"],"id":249}],[{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["r"],"id":250},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"insert","lines":["o"]},{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"insert","lines":["y"]}],[{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"remove","lines":["y"],"id":251},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"remove","lines":["o"]},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"remove","lines":["r"]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"remove","lines":["t"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"remove","lines":["e"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"remove","lines":["l"]},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"remove","lines":["e"]},{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"remove","lines":["d"]}],[{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"insert","lines":["d"],"id":252},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"insert","lines":["e"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"insert","lines":["s"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"insert","lines":["t"]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"insert","lines":["o"]},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["r"]},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"insert","lines":["o"]}],[{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"insert","lines":["y"],"id":253}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":46},"end":{"row":19,"column":46},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1623227677002,"hash":"f0c7446b9725f4bb51bdec473cbfa61383570995"}