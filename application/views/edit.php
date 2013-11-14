<meta charset="utf-8">

<?php
if(isset($items))
{
?>
<form action="http://localhost/vietdemo/index.php/book/edit" method="post">
    <input type="hidden" name="txtId" id="txtId" value="<?=$items[0]->bookId?>"/>
    <table>
        <tr style="height:50px">
            <td>Tên sách : </td>
            <td><input type="text" name="txtbookName" id="txtbookName" value="<?=$items[0]->bookName?>"/></td>
        </tr>
        <tr style="height:30px">
            <td>Số lượng : </td>
            <td><input type="text" name="txtQuantity" id="txtQuantity" value="<?=$items[0]->quantity?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td style="height: 44px"><input type="submit" class="btn-danger btn" value="Save"/> </td>
        </tr>
    </table>
</form>
<?php }?>