PHP
========

[getFolderList](/php/getFolderList.php) ($path)    
Рекурсивный обход директории и возвращение массива строк со всеми файлами и каталогами.  

[filterRegexArray](/php/filterRegexArray.php) ($arr, $regexValue=null, $regexKey=null, $keySafe=false, $operator="&&")  
Фильтрация массива строк: по значению, по ключу, по значению и ключу.  
Фильтрация произвольного массива: по ключу.  
$keySave - булево, нужно ли сохранять оригинальные ключи  
$operator - если фильтрация по значению и ключу, то определяет как соотносить между собой два фильтра `return $valueFilterResult $operator $keyFilterResult`  

[cidr_match](/php/cidr_match.php) ($ip, $ranges)  
Возвращает принадлежит ли IPv4 одной из подсетей в массиве $ranges.  


Python  
=========  

[getDataURL](/python3/getDataURL) (imgPath)  
Возвращает Data-URL для изображения.  

