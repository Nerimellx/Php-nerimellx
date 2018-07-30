<?php
require_once('src/Delivery/NovaPoshtaApi2.php');
require_once('src/Delivery/NovaPoshtaApi2Areas.php');

$np = new \LisDev\Delivery\NovaPoshtaApi2(
    'da5991a8f98e1a9500d68d1ed51f51ac',
    'ru', // Язык возвращаемых данных: ru (default) | ua | en
    FALSE, // При ошибке в запросе выбрасывать Exception: FALSE (default) | TRUE
    'curl' // Используемый механизм запроса: curl (defalut) | file_get_content
);
if($_POST['warehouses']) {
    $wh = $np->getWarehouses($_POST['warehouses']);
    foreach ($wh['data'] as $warehouse) {
        echo '<option value="'.$warehouse['Ref'].'">'.$warehouse['DescriptionRu'].'</option>';
    }
} else {
    $cities = $np->getCities();
    foreach ($cities['data'] as $city) {
        echo '<option value="'.$city['Ref'].'">'.$city['DescriptionRu'].'</option>';
    }
}
?>
