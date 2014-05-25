<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Random
 * Date: 25.05.14
 * Time: 16:16
 * To change this template use File | Settings | File Templates.
 */
 
Header("Access-Control-Allow-Origin: *");
Header("Access-Control-Allow-Headers: Content-Type, X-Requested-With");
Header("Content-type: text/html; charset=windows-1251");

$root = "http://stickie.github.io/stickie/img/";
$extensionId = "lgnclgpmagnoifinalnfboehjjcpmihi";

$prices = array(
	5 => '5 голосов', 
	7 => '7 голосов',
	9 => '9 голосов',
	30 => '30 рублей', 
	50 => '50 рублей',
	90 => '90 рублей'
	);
	
if(!$_POST['price'] || !$prices[$_POST['price']]) {
	$r = array_rand($prices);
}
else $r = $_POST['price'];

?>15260<!><!>0<!>6557<!>0<!>Купить набор стикеров<!><div class="im_stickers_buy_header">
    <img src="<?=$root;?>panda/26.png" width="86" height="92" class="im_stickerpack_img fl_l" />
    <div class="im_stickerpack_info clear_fix">
        <div class="im_stickerpack_name">
            Панда
        </div>
        <div class="im_stickerpack_desc">Веселая панда.</div>
        <div class="im_sticker_act im_stickerpack_buy im_sticker_act_blue" data-price="<?=$r;?>" onclick="return chrome.runtime.sendMessage('<?=$extensionId;?>', ['Store', 'Buy', 'Panda', <?=$r;?>);">Купить за <b><?=$prices[$r];?></b></div>
    </div>
</div>
<div class="im_stickerpack_list clear_fix">
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/1.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/2.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/3.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/4.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/5.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/6.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/7.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/8.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/9.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/10.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/11.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/12.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/13.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/14.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/15.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/16.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/17.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/18.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/19.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/20.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/21.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/22.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/23.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/24.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/25.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/26.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/27.png" width="108" height="92"  /></div>
    <div class="im_stickerpack_preview fl_l"><img src="<?=$root;?>panda/28.png" width="108" height="92"  /></div>
</div><!>box.setOptions({width: 500, bodyStyle: 'padding: 0px;'});