<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
</head>

<body>
    <!-- header start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="image/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">商品管理 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">管理員管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">機器人管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">留言檢舉管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">選美管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">會員管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">訂單管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">商品分類管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">商品管理</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">CHOCO星人外型</a>
                        <a class="dropdown-item" href="#">CHOCO星人基底</a>
                        <a class="dropdown-item" href="#">CHOCO星人口味</a>
                        <a class="dropdown-item" href="#">CHOCO星人眼睛</a>
                        <a class="dropdown-item" href="#">CHOCO星人嘴巴</a>
                        <a class="dropdown-item" href="#">CHOCO星人頭飾</a>
                        <a class="dropdown-item" href="#">CHOCO星人頭飾</a>
                        <a class="dropdown-item" href="#">CHOCO星人其他裝飾</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header end -->
    <!-- navbar start -->
    <div class="tab_wrap">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">CHOCO星人外型</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">CHOCO星人基底</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">CHOCO星人口味</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">CHOCO星人眼睛</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">CHOCO星人嘴巴</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">CHOCO星人頭飾</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">CHOCO星人其他裝飾</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <!-- <form onsubmit="return returnR(this)"> -->
                <!-- <form action=""> -->
                <input class="btn btn-primary add" type="submit" value="新增">
                <!-- </form> -->
                <div class="clearfix"></div>
                <table>
                    <thead>
                        <tr>
                            <th>配件編號</th>
                            <th>配件名稱</th>
                            <th>配件價格(元)</th>
                            <th>圖片路徑</th>
                            <th>修改</th>
                            <th>刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>000001</td>
                            <!-- <td><input class="input_revise" type="radio" value="1" name="sold_situation" style="display: none" checked disabled>
                                <span class="radio_desc" style="display: none">已出貨d</span>
                                <span class="show_value">已出貨</span>
                                <input class="input_revise" type="radio" value="1" name="sold_situation" style="display: none">
                                <span class="radio_desc" style="display: none">未出貨d</span>
                                <span class="show_value" style="display: none">未出貨</span>
                            </td> -->
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">白巧克力</span></td>
                            <td><input class="input_revise" type="number" value="123" style="display:none"><span class="show_value">123</span></td>
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">怕.jpg</span></td>
                            <td><input class="btn btn-primary revise" type="submit" value="修改"><input class="btn btn-primary confirm" type="submit" value="確定" style="display:none">
                            </td>
                            <td><input class="btn btn-primary delete" type="submit" value="刪除"></td>
                        </tr>
                        <tr>
                            <td>000002</td>
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">黑巧克力</span></td>
                            <td><input class="input_revise" type="number" value="123" style="display:none"><span class="show_value">123</span></td>
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">怕.jpg</span></td>
                            <td><input class="btn btn-primary revise" type="submit" value="修改"><input class="btn btn-primary confirm" type="submit" value="確定" style="display:none">
                            </td>
                            <td><input class="btn btn-primary delete" type="submit" value="刪除"></td>
                        </tr>
                        <tr class="new_data_sample" style="display:none">
                            <td>000003</td>
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">牛奶巧克力</span></td>
                            <td><input class="input_revise" type="number" value="123" style="display:none"><span class="show_value">123</span></td>
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">怕.jpg</span></td>
                            <td><input class="btn btn-primary revise" type="submit" value="修改"><input class="btn btn-primary confirm" type="submit" value="確定" style="display:none">
                            </td>
                            <td><input class="btn btn-primary delete" type="submit" value="刪除"></td>
                        </tr>
                    </tbody>
                </table>
                <!-- </form> -->
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <!-- <form onsubmit="return returnR(this)"> -->
                <input class="btn btn-primary add" type="submit" value="新增">
                <table>
                    <thead>
                        <tr>
                            <th>配件編號</th>
                            <th>配件名稱</th>
                            <th>配件價格(元)</th>
                            <th>圖片路徑</th>
                            <th>修改</th>
                            <th>刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>000001</td>
                            <td><input class="input_revise" type="radio" value="1" name="sold_situation" style="display: none" checked disabled>
                                <span class="radio_desc" style="display: none">已出貨d</span>
                                <span class="show_value">已出貨</span>
                                <input class="input_revise" type="radio" value="1" name="sold_situation" style="display: none">
                                <span class="radio_desc" style="display: none">未出貨d</span>
                                <span class="show_value" style="display: none">未出貨</span>
                            </td>
                            <!-- <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">白巧克力</span></td> -->
                            <td><input class="input_revise" type="number" value="123" style="display:none"><span class="show_value">123</span></td>
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">怕.jpg</span></td>
                            <td><input class="btn btn-primary revise" type="submit" value="修改"><input class="btn btn-primary confirm" type="submit" value="確定" style="display:none">
                            </td>
                            <td><input class="btn btn-primary delete" type="submit" value="刪除"></td>
                        </tr>
                        <tr>
                            <td>000002</td>
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">黑巧克力</span></td>
                            <td><input class="input_revise" type="number" value="123" style="display:none"><span class="show_value">123</span></td>
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">怕.jpg</span></td>
                            <td><input class="btn btn-primary revise" type="submit" value="修改"><input class="btn btn-primary confirm" type="submit" value="確定" style="display:none">
                            </td>
                            <td><input class="btn btn-primary delete" type="submit" value="刪除"></td>
                        </tr>
                        <tr class="new_data_sample" style="display:none">
                            <td>000003</td>
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">牛奶巧克力</span></td>
                            <td><input class="input_revise" type="number" value="123" style="display:none"><span class="show_value">123</span></td>
                            <td><input class="input_revise" type="text" value="123" style="display:none"><span class="show_value">怕.jpg</span></td>
                            <td><input class="btn btn-primary revise" type="submit" value="修改"><input class="btn btn-primary confirm" type="submit" value="確定" style="display:none">
                            </td>
                            <td><input class="btn btn-primary delete" type="submit" value="刪除"></td>
                        </tr>
                    </tbody>
                </table>
                <!-- </form> -->
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quibusdam eum officiis voluptas dolor mollitia impedit quis quisquam, sint quam, neque voluptatibus. Laudantium quasi molestias enim repudiandae cupiditate velit eligendi.</div>
        </div>
    </div>
    <!-- navbar end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/back_end.js"></script>
</body>

</html>