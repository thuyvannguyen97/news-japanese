<?php
function showErrors($errors, $name){
    if ($errors->has($name)) {
        echo '<div class="alert alert-danger">';
        echo  '<strong>'. $errors->first($name).'</strong>';
        echo '</div>';
    }
}
function getCate($arr, $parent, $tab, $idSelect){
    foreach ($arr as $value) {
        if ($value['parent'] == $parent) {
            if($value['id'] == $idSelect){
                echo '<option selected value="'.$value['id'].'">'.$tab.$value['name'].'</option>';
            }
            else {
                echo '<option value="'.$value['id'].'">'.$tab.$value['name'].'</option>';
            }
            getCate($arr, $value['id'], $tab.'---|', $idSelect);
        }
    }
}
function showCate($arr, $parent, $tab){
    foreach ($arr as $value) {
        if ($value['parent'] == $parent) {

            echo '<div class="item-menu"><span>'.$tab.$value['name'].'</span>';
            echo '<div class="category-fix">
                    <a class="btn-category btn-primary" href="/admin/category/edit/'.$value['id'].'"><i class="fa fa-edit"></i></a>
                    <a onclick="return delCate('."'".$value['name']."'".')" class="btn-category btn-danger" href="/admin/category/del/'.$value['id'].'"><i class="fas fa-times"></i></i></a>
                </div>
            </div>';
            showCate($arr, $value['id'], $tab.'---|');
        }
    }
}

