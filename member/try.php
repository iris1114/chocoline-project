      <!------ orderlist ------->
      <?php
        try {
            require_once("../common/php/connect_choco.php");

            // $sql = "select * from order_master where mem_no= 1";
            // $orders1 = $pdo->query($sql);
            // $order_rows1 = $orders1->fetchAll(PDO::FETCH_ASSOC);

            $sql = "select * from order_master where mem_no= :mem_no";
            $orders1 = $pdo->prepare($sql);
            $orders1->bindValue(":mem_no", $_SESSION["mem_no"]);
            $orders1->execute();
            $order_rows1 = $orders1->fetchAll(PDO::FETCH_ASSOC);
            // $sql2 = "select * from order_list Inner join customized_product on customized_product.customized_product_no=order_list.customized_product_no where order_no=$order_rows1[$i]['order_no']";
            // $orders2 = $pdo->query($sql2);
            // $order_rows2 = $orders2->fetchAll(PDO::FETCH_ASSOC);




        } catch (PDOException $e) {
            echo "錯誤 : ", $e->getMessage(), "<br>";
            echo "行號 : ", $e->getLine(), "<br>";
        }

        ?>







      <section id="orderlist" class="tabcontent">
          <form action="" class="clearfix">
              <?php
                for ($i = 0; $i < count($order_rows1); $i++) {
                    ?>
                  <div class="my_order">
                      <div class="col_lg_3">
                          <p>訂單日期：</p>
                          <p><?php echo $order_rows1[$i]['order_time']; ?></p>
                      </div>
                      <div class="col_lg_3">
                          <p>訂單編號：</p>
                          <p><?php echo $order_rows1[$i]['order_no']; ?></p>
                      </div>
                      <div class="col_lg_3">
                          <p>訂單狀態：</p>
                          <p><?php
                                if ($order_rows1[$i]['shipping_status'] == 1) {
                                    echo "已出貨";
                                } else {
                                    echo "未出貨";
                                }
                                ?></p>
                      </div>
                      <div class="col_lg_3">
                          <p>總金額:</p>
                          <p> NT$ <?php echo $order_rows1[$i]['order_amount']; ?></p>
                      </div>
                  </div>

                  <div class="my_order">
                      <div class="detail col_md_12 col_lg_12">
                          <div class="order_detail_box">
                              <h2 class="order_detail_title font-20">查看明細</h2>



                              <?php

                                $sql2 = "select * from order_list Inner join customized_product on customized_product.customized_product_no=order_list.customized_product_no where order_no=:orderno";
                                $orders2 = $pdo->prepare($sql2);
                                $orders2->bindValue(":orderno", $order_rows1[$i]['order_no']);
                                $orders2->execute();
                                $order_rows2 = $orders2->fetchAll(PDO::FETCH_ASSOC);


                                for ($j = 0; $j < count($order_rows2); $j++) {
                                    ?>
                                  <div class="order_content_box">
                                      <div class="order_content">
                                          <div class="product_img col_md_6 col_lg_6">
                                              <img src="image/common/logo_icon.png" alt="product">
                                          </div>
                                          <div class="product_detail col_md_6 col_lg_6">
                                              <p><?php echo $order_rows2[$j]['customized_product_name']; ?></p>
                                              <p>價格：NT$ <?php echo $order_rows2[$j]['product_price']; ?> </p>
                                              <p>數量：<?php echo $order_rows2[$j]['product_qty']; ?></p>
                                          </div>
                                      </div>
                                  </div>
                              <?php
                                }
                                ?>



                              <?php

                                $sql2 = "select * from order_list Inner join classic_product on classic_product.classic_product_no=order_list.classic_product_no where order_no=:orderno;";
                                $orders3 = $pdo->prepare($sql2);
                                $orders3->bindValue(":orderno", $order_rows1[$i]['order_no']);
                                $orders3->execute();
                                $order_rows3 = $orders3->fetchAll(PDO::FETCH_ASSOC);



                                for ($k = 0; $k < count($order_rows3); $k++) {
                                    ?>
                                  <div class="order_content">
                                      <div class="product_img col_md_6 col_lg_6">
                                          <img src="image/common/logo_icon.png" alt="product">
                                      </div>
                                      <div class="product_detail col_md_6 col_lg_6">
                                          <p><?php echo $order_rows3[$k]['classic_product_name']; ?></p>
                                          <p>價格：NT$ <?php echo $order_rows3[$k]['product_price']; ?> </p>
                                          <p>數量：<?php echo $order_rows3[$k]['product_qty']; ?></p>
                                      </div>
                                  </div>
                              <?php
                                }
                                ?>

                          </div>
                      </div>
                  </div>
              <?php
                }
                ?>
          </form>
      </section>





      select * from favorites f join contest c on f.contest_no =c.contest_no join customized_product cp on c.customized_product_no =cp.customized_product_no where f.mem_no =2