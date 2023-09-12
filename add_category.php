<?php
    $category_name = filter_input(INPUT_POST, 'cate_name');

    if ($category_name == null ){
        $error = 'Chưa điền vào tên loại sản phẩm. Vui lòng nhập lại';
        include('error.php');
    }else {
        include_once('database.php');

        $query = 'INSERT INTO categories (categoryName) VALUES (:cate_name)';
        $statement = $db-> prepare($query);
        $statement->bindValue(':cate_name' , $category_name);
        $statement->execute();
        $statement->closeCursor();

        include('category_list.php');
    }
 ?>