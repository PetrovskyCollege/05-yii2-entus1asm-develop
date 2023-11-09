

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body><h2 style="padding: 10px; text-align: center">Корзина</h2>
<?
if ($session['cart'] ) {


?>
<table class="table table-striped">

    <thead>
    <tr>
        <th scope="col">Фото</th>
        <th scope="col">Наименование</th>
        <th scope="col">Количество</th>
        <th scope="col">Цена</th>
        <th scope="col"></th>
    </tr>
    </thead>

    <tbody>
    <? foreach ($session['cart'] as $id => $good) { ?>
    <tr>
        <td style="vertical-align: middle" width="150"><img src="/img/<?=$good['img']?>" alt="<?=$good['name']?>"></td>
        <td style="vertical-align: middle"><?=$good['name']?></td>
        <td style="vertical-align: middle"><?=$good['goodQuantity']?></td>
        <td style="vertical-align: middle"><?=$good['price']*$good['goodQuantity']?> рублей</td>
        <td class="delete" style="text-align: center; cursor: pointer; vertical-align: middle; color: red">
            <span>✖</span></td>
    </tr>
    <? } ?>
    <tr style="border-top: 4px solid black">
        <td colspan="4">Всего товаров</td>
        <td class="total-quantity"><?=$session['cart.totalQuantity']?></td>
    </tr>
    <tr>
        <td colspan="4">На сумму </td>
        <td style="font-weight: 700"><?=$session['cart.totalSum']?> рублей</td>
    </tr>
    </tbody>

</table>

<div class="modal-buttons" style="display: flex; padding: 15px; justify-content: space-around">
    <button type="button" class="btn btn-danger">Очистить корзину</button>
    <button type="button" class="btn btn-secondary btn-close">Продолжить покупки</button>
    <button type="button" class="btn btn-success btn-next">Оформить заказ</button>
</div><div id="js-atavi-extension-install"></div><div id="target_kultivator_ico" data-ico="chrome-extension://ailgcbdikiapkcbglcpfippolmjfljgi/images/ico.png" style="display: none;"></div></body></html>
<? } else { ?>
<h3> В вашей корзине ничего нет :( </h3>
<button type="button" class="btn btn-success btn-next">Начать покупки</button>

<? }