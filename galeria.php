
            <!-- <ul>
                <li><a href="#car1"><img src="/assets/img/hero-bg.jpg" class="min"></a></li>
                <li><a href="#car2"><img src="/assets/img/hero-bg.jpg" class="min"></a></li>
                <li><a href="#car3"><img src="/assets/img/hero-bg.jpg" class="min"></a></li>
                <li><a href="#car4"><img src="/assets/img/hero-bg.jpg" class="min"></a></li>
                <li><a href="#car5"><img src="/assets/img/hero-bg.jpg" class="min"></a></li>
                <li><a href="#car6"><img src="/assets/img/hero-bg.jpg" class="min"></a></li>
                <li><a href="#car7"><img src="/assets/img/hero-bg.jpg" class="min"></a></li>
                <li><a href="#car8"><img src="/assets/img/hero-bg.jpg" class="min"></a></li>
                <li><a href="#car9"><img src="/assets/img/hero-bg.jpg" class="min"></a></li>
                <li><a href="#car10"><img src="/assets/img/hero-bg.jpg" class="min"></a></li>
            </ul>
            <?php
            $listaImagens = [
                "/assets/img/hero-bg.jpg",
                "/assets/img/hero-bg.jpg",
                "/assets/img/hero-bg.jpg",
                "/assets/img/hero-bg.jpg",
                "/assets/img/hero-bg.jpg",
                "/assets/img/hero-bg.jpg",
                "/assets/img/hero-bg.jpg",
                "/assets/img/hero-bg.jpg",
                "/assets/img/hero-bg.jpg",
                "/assets/img/hero-bg.jpg"
            ];
            foreach($listaImagens as $key => $imagem){
                ?>
            
            <div class="lbox" id="<?="car{$key}"?>">
                <div class="box_img">
                    <a href="#car<?=$key-1?>" class="btnlbox" id="prev">&#171;</a>
                    <a href="#photoscars" class="btnlbox" id="close">X</a>
                    <img src="<?=$imagem?>">
                    <a href="#car<?=$key+1?>" class="btnlbox" id="next">&#187;</a>
                </div> -->
               
        </div>

        <!-- <?php
        }
        ?> -->



<style>.min{
    width: 200px;
    padding: 10px;
}

.lbox{
    visibility: none;
    opacity: 0;
}

.lbox:target{
    opacity: 1;
    visibility: visible;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(10,10,10,.7);
    position: fixed;
}

.box_img{
    width: 1000px;
    margin: 150px auto;
}

.btnlbox{
    color: #fff;
    font-family: 'Arial';
    text-decoration: none;
    position: absolute;
    width: 50px;
    height: 50px;
    font-size: 40px;
    text-align: center;
}

#prev{
    left: 5%;
    top: 45%;
}

#next{
    right: 5%;
    top: 45%;
}

#close{
    top: 14%;
    right: 5%;
}

#photoscars ul{
    width: 880px !important;
    list-style: none;
    display: flex;
    margin: 100px auto;
}</style>










Galeria 2

<div class="gallery autoplay items-10">
                    <div id="item-1" class="control-operator"></div>
                    <div id="item-2" class="control-operator"></div>
                    <div id="item-3" class="control-operator"></div>
                    <div id="item-4" class="control-operator"></div>
                    <div id="item-5" class="control-operator"></div>
                    <div id="item-6" class="control-operator"></div>
                    <div id="item-7" class="control-operator"></div>
                    <div id="item-8" class="control-operator"></div>
                    <div id="item-9" class="control-operator"></div>
                    <div id="item-10" class="control-operator"></div>

                    <?php
                    $listaImagens = [
                        "/assets/img/cars/car1.jpg",
                        "/assets/img/cars/car2.jpg",
                        "/assets/img/cars/car3.jpg",
                        "/assets/img/cars/car4.jpg",
                        "/assets/img/cars/car5.jpg",
                        "/assets/img/cars/car6.jpg",
                        "/assets/img/cars/car7.jpg",
                        "/assets/img/cars/car8.jpg",
                        "/assets/img/cars/car9.jpg",
                        "/assets/img/cars/car10.jpg"
                    ];

                    foreach ($listaImagens as $key => $imagem) {
                    ?>

                        <figure class="item">
                            <img src="<?= $imagem ?>">
                        </figure>

                        <a href="#car<?= $key - 1 ?>"> <i class="btnphotos fas fa-arrow-circle-right" id="btnprevious"></i></a>
                        <a href="#car<?= $key + 1 ?>"> <i class="btnphotos fas fa-arrow-circle-left" id="btnnext"></i></a>

                        <div class="controls">
                            <a href="#item-1" class="control-button">•</a>
                            <a href="#item-2" class="control-button">•</a>
                            <a href="#item-3" class="control-button">•</a>
                            <a href="#item-4" class="control-button">•</a>
                            <a href="#item-5" class="control-button">•</a>
                            <a href="#item-6" class="control-button">•</a>
                            <a href="#item-7" class="control-button">•</a>
                            <a href="#item-8" class="control-button">•</a>
                            <a href="#item-9" class="control-button">•</a>
                            <a href="#item-10" class="control-button">•</a>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
    </section>



    <style>
        .btnphotos{
    position: absolute;
    z-index: 99;
    top: 40%;
    right: 2%;
    color: #fff;
    font-weight: bold;
    font-size: 48px;
}

#btnprevious{
    position: absolute;
    z-index: 99;
    top: 40%;
    right: 2%;
    color: #fff;
    font-weight: bold;
    font-size: 24px;
}

#btnnext{
    position: absolute;
    z-index: 99;
    top: 40%;
    left: 2%;
    color: #fff;
    font-weight: bold;
    font-size: 24px;
}

    </style>