<template>
    <section class="product_section">
        <div class="container">
            <div class="product_heading">
                <h2>{{ title }}</h2>
            </div>
            <div class="product_container">
                <div class="box">
                    <div class="box-content">
                        <div class="img-box">
                            <img src="/style/images/w1.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <div class="text">
                                <h6>Men's Watch</h6>
                                <h5><span>$</span> 300</h5>
                            </div>
                            <div class="like">
                                <h6>Like</h6>
                                <div class="star_container">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href=""> Add To Cart </a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="img-box">
                            <img src="/style/images/w2.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <div class="text">
                                <h6>Men's Watch</h6>
                                <h5><span>$</span> 300</h5>
                            </div>
                            <div class="like">
                                <h6>Like</h6>
                                <div class="star_container">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href=""> Add To Cart </a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="img-box">
                            <img src="/style/images/w3.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <div class="text">
                                <h6>Men's Watch</h6>
                                <h5><span>$</span> 300</h5>
                            </div>
                            <div class="like">
                                <h6>Like</h6>
                                <div class="star_container">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href=""> Add To Cart </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

export default {
    props:{
        title:String
    }
};
</script>
