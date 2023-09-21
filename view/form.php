<?php
if (isset($_GET['id'])) {
    $p = $_SESSION['product'];// gán p là thông tin của sản phẩm cần update (nếu có)
}
?>
<div>
    <h2 style="text-align: center; color: red; margin-bottom:20px;"><?php echo isset($_GET['id']) ? "Sửa sản phẩm" : "Thêm sản phẩm";?></h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <table style="margin-left: 150px;">
            <tr>
                <td width="20%" style="font-weight: bold;">Tên sản phẩm</td>
                <td style="padding: 7px 7px;"><input type="text" name="name" value="<?php echo isset($_GET['id']) ? $p['name'] : '';?>" style="height: 30px;"></td>

            </tr>
            <tr>
                <td style="font-weight: bold;">Chọn ảnh</td>
                <td style="padding: 7px 7px;"><input type="file" name="img" accept="image/*"></td>
                <?php $image = isset($_GET['id']) ? $p['image'] : '';  ?>
            <tr>
                <td></td>

            </tr>
            </tr>
            <tr>
                <td style="font-weight: bold"><label>Thể loại</label></td>
                <td style="padding: 7px 7px;"><select name="id_category" style="height: 30px;">
                        <option value="<?php echo isset($_GET['id']) ? $p['id_category'] : '';?>"><?php echo isset($_GET['id']) ? $p['id_category'] : '';?></option>
                        <?php foreach ($_SESSION['category'] as $value) { ?>
                            <option value="<?php echo $value['id'];?>">
                                <?php echo $value['id']." - ".$value['name'];?>
                            </option>
                        <?php } ?>
                    </select></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Giá Tiền</td>
                <td style="padding: 7px 7px;"><input type="text" name="price" value="<?php echo isset($_GET['id']) ? $p['price'] : '';?>" style="height: 30px;"> đồng</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Mô tả</td>
                <td style="padding: 7px 7px;"><textarea name="content" cols="60" rows="13"><?php echo isset($_GET['id']) ? $p['content'] : '';?></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td style="padding: 7px 7px;"><input type="submit" name="submit" value="<?php echo isset($_GET['id']) ? "Sửa" : "Thêm";//có id là update, không có là insert?>" style="padding:5px 10px; font-weight: bold;"></td>
            </tr>
        </table>
    </form>
</div>
