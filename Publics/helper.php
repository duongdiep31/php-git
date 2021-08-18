<?php
function uploadImage($image)
{
    $target_dir = BASE_MAIN . '/Publics/image';
    $name = $image['name'];
    $tmp = $image['tmp_name'];
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION ));
    $name = uniqid() . '_' . $name;

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($ext, $extensions) === false) {
       throw new ErrorException("extension not allowed, please choose a JPEG or PNG file.");
    }

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    move_uploaded_file($tmp,"$target_dir/$name");
    return $name;
}

function getStorageLink($image = '')
{
    if (empty($image)) {
        return 'mvc/Publics/image/no-image.png';
    }

    return 'Publics/image/' . $image;
}
?>


