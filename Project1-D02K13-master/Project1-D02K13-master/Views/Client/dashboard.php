      <!--recommended product-->
    <!-- <div class="container">
        <h3 class="text-center" style="padding-top: 30px;">RECOMMENDED PRODUCT</h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="images/c1.png" alt="" class="card img-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center"> CUSTOM MENUS</h5>
                        <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
        
                        <div id="btn2" class="text-center"><button>View More</button></div>
                    </div>
                </div>
            </div> -->
     <!--end recommended product-->

     <!-- New Product -->
     <!-- <div class="container">
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" id="tpc">
                    <img src="images/ch.png" alt="" class="card image-top">
                    <div class="card-img-overlay">
                        <h4 class="card-titel">Best Chair</h4>
                        <p class="card-text">Lorem ipsum dolor</p>
                        <div id="btn2"><button>View More</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
   <!-- End New Product -->

   <!-- FEATURED -->
 <div class="container">
        <h3 class="text-center" style="margin-top: 50px; ">SẢN PHẨM NỔI BẬT</h3>
        <div class="row" style="margin-top: 50px;">
        <?php 
         foreach($arr['featured'] as $item) { 
        ?>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <a href="?redirect=product&id=<?= $item['id'] ?>"><img src="images/<?= $item['image']?>" alt="" class="card image-top"></a>
                    <div class="card-body">
                        <h3  class="card-titel text-center"><a href="?redirect=product&id=<?= $item['id'] ?>"><?= $item['name'] ?></a></h3>
                        <p class="card-text text-center"><?= number_format($item['price']);?><span>đ</span></p>
                        <div id="btn3" ><button><a href="?redirect=product&id=<?= $item['id'] ?>">Shop Now </a></button></div>
                    </div>
                </div>
            </div>
            <?php }?> 
        </div>
    </div>
     <!-- FEATURED -->
     