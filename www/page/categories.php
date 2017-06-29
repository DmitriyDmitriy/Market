<?php
 include("db.php");

//Получаем массив нашего меню из БД в виде массива
function getCat($mysqli){
	$sql = 'SELECT * FROM catalog';
	$res = mysql_query($sql);

	//Создаем масив где ключ массива является ID меню
	$cat = array();
	while($row = mysql_fetch_array($res)){
		$cat[$row['id']] = $row;
	}
	return $cat;
}

//Функция построения дерева из массива от Tommy Lacroix
function getTree($dataset) {
	$tree = array();

	foreach ($dataset as $id => &$node) {    
		//Если нет вложений
		if (!$node['parent']){
			$tree[$id] = &$node;
		}else{ 
			//Если есть потомки то перебераем массив
            $dataset[$node['parent']]['childs'][$id] = &$node;
		}
	}
	return $tree;
}

//Получаем подготовленный массив с данными
$cat  = getCat($mysqli); 

//Создаем древовидное меню
$tree = getTree($cat);

//Шаблон для вывода меню в виде дерева
function tplMenu($category){
	$menu = '<ul>
		<a href="?id='.$category['id'].'" title="'. $category['title'] .'">'. 
		$category['title'].'</a>';
		
		if(isset($category['childs'])){
			$menu .= '<li>'. showCat($category['childs']) .'</li>';
		}
	$menu .= '</ul>';
	
	return $menu;
}

/**
* Рекурсивно считываем наш шаблон
**/
function showCat($data){
	$string = '';
	foreach($data as $item){
		$string .= tplMenu($item);
	}
	return $string;
}

//Получаем HTML разметку
$cat_menu = showCat($tree);

echo $cat_menu;
?>