<?php 
    include('database.php');

    $cate_name = filter_input(INPUT_POST, 'category_name');

    if ($cate_name != null){
        $sql= 'DELETE FROM categories WHERE categoryName = :category_name';
        $statement=$db->prepare($sql);
        $statement -> bindValue(':category_name', $cate_name );
        $result =$statement->execute();
        $statement->closeCursor();

        include('category_list.php');
    }
    else {
        $error = "bị lỗi rồi á";
        include('error.php');
    }
?>