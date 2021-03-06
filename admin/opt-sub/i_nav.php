<?php
error_reporting(0);
if($_POST["i_opt"]){

    // 导航设置
    update_option("i_header_hidden",$_POST["i_header_hidden"]);
    update_option("i_login_hidden",$_POST["i_login_hidden"]);
    update_option("i_logo_hidden",$_POST["i_logo_hidden"]);
    update_option("i_hello",$_POST["i_hello"]);
    
}
?>

<div class="wrap">
    <h1>导航设置</h1>
    <form method="post" action="" novalidate="novalidate">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><label for="i_header_hidden">隐藏导航栏</label></th>
                    <td>
                        <input name="i_header_hidden" type="text" value="<?php echo get_option("i_header_hidden"); ?>" class="regular-text">
                        <p class="description">数字1为开启。向下滚动页面时隐藏导航栏。默认：关闭</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="i_login_hidden">隐藏登录入口</label></th>
                    <td>
                        <input name="i_login_hidden" type="text" value="<?php echo get_option("i_login_hidden"); ?>" class="regular-text">
                        <p class="description">数字1为开启。默认：关闭</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="i_logo_hidden">隐藏logo</label></th>
                    <td>
                        <input name="i_logo_hidden" type="text" value="<?php echo get_option("i_logo_hidden"); ?>" class="regular-text">
                        <p class="description">数字1为开启。显示在导航栏的logo图标。默认：关闭</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="i_hello">登录提示</label></th>
                    <td>
                        <input name="i_hello" type="text" value="<?php echo get_option("i_hello"); ?>" class="regular-text">
                        <p class="description">移动端未登录提示。默认：Hi, 请登录!</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="i_opt"  class="button button-primary" value="保存更改">
        </p>
    </form>
</div>