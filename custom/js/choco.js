function aa() {

    html2canvas(document.getElementById('big_picnic_basket_container'), {
        onrendered: function (canvas) {
            canvas.setAttribute('id', 'thecanvas');	//添加属性
            document.body.appendChild(canvas);
        },
        background: "",		//canvas的背景颜色，如果没有设定默认透明
        logging: true,		//在console.log()中输出信息
        width: 585,			//图片宽
        height: 530,		//图片高
        useCORS: true, // 【重要】开启跨域配置
    });
    // var N = $("#big_picnic_basket_img")
    //     .attr("src")
    //     .substr(30, 1);
    // console.log(">>>N<<<", N);
    // $("#thecanvas").css("-webkit-mask-image",
    //     "url(../scss/img/Customization/basket0" + N + "_mask.png)");
}

function bb() {
    var oCanvas = document.getElementById("thecanvas");
    /* 参考
    Canvas2Image.saveAsPNG(oCanvas);  // 这将会提示用户保存PNG图片
    Canvas2Image.saveAsJPEG(oCanvas); // 这将会提示用户保存JPG图片
    Canvas2Image.saveAsBMP(oCanvas);  // 这将会提示用户保存BMP图片
    // 返回一个包含PNG图片的<img>元素
    var oImgPNG = Canvas2Image.saveAsPNG(oCanvas, true);
    // 返回一个包含JPG图片的<img>元素
    var oImgJPEG = Canvas2Image.saveAsJPEG(oCanvas, true);
    // 返回一个包含BMP图片的<img>元素
    var oImgBMP = Canvas2Image.saveAsBMP(oCanvas, true);
    // 这些函数都可以接受高度和宽度的参数
    // 可以用来调整图片大小
    // 把画布保存成100x100的png格式
    Canvas2Image.saveAsPNG(oCanvas, false, 100, 100);
    */
    /*自动保存为png*/
    // 获取图片资源
    var img_data1 = Canvas2Image.saveAsPNG(oCanvas, true).getAttribute('src');
    saveFile(img_data1, 'richer.png');
}