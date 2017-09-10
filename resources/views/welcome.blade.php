<!--slider with banners-->
<section class="container">
    <div class="row clearfix">
        <!--slider-->
        <div class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
            <div class="flexslider animate_ftr long">
                <ul class="slides">
                    <?php foreach ($slider as $row) { ?>
                    <li><img class="mySLIDERS" src="uploads/sliders/<?=$row['slider_name'];?>" alt=""
                             data-custom-thumb="images/slide_01.jpg">
                        <section class="slide_caption t_align_c d_xs_none">
                            <!--<div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_10">Meet New Theme</div>
                            <hr class="slider_divider d_inline_b m_bottom_10">
                            <div class="color_light slider_title_4 tt_uppercase t_align_c m_bottom_45 m_md_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
                            <div class="color_light slider_title_2 m_bottom_45 m_sm_bottom_20">$<b>15.00</b></div> <a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Buy Now</a> --></section>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!--banners-->
        <?php foreach($all_add as $off_row):?>
        <?php if($off_row->offer_position == 1){?>
        <div class="col-lg-3 col-md-3 col-m-3 t_xs_align_c s_banners">
            <a style="height:220px" href="product/offer/<?=$off_row->offer_id;?>"
               class="d_block d_xs_inline_b m_bottom_20 animate_ftr">
                <img style="height:100%" src="uploads/offers/<?=$off_row->offer_image;?>" alt="">

            </a>
            <?php }?>
            <?php if($off_row->offer_position == 2){?>
            <a style="height:220px" href="product/offer/<?=$off_row->offer_id;?>"
               class="d_block d_xs_inline_b m_xs_left_5 animate_ftr m_mxs_left_0"> <img style="height:100%"
                                                                                        src="uploads/offers/<?=$off_row->offer_image;?>"
                                                                                        alt=""> </a>
        </div>
        <?php }?>
        <?php endforeach;?>
    </div>
</section>
<div class="page_content_offset" style="padding: 30px 0;overflow: hidden;">
    <div class="container">
        <section class="row clearfix">
            <?php foreach($all_add as $row):?>
            <?php if($row->offer_position == 3){?>
            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
                <a href="product/offer/<?=$row->offer_id;?>"
                   class="d_block banner animate_ftr wrapper r_corners relative m_xs_bottom_30 animate_horizontal_finished">
                    <img src="uploads/offers/<?=$row->offer_image;?>" alt=""> <span
                            class="banner_caption d_block vc_child t_align_c w_sm_auto">
        <span class="d_inline_middle">
               </span>
            </span>
                </a>
            </div>
            <?php }?>
            <?php if($row->offer_position == 4){?>
            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
                <a href="product/offer/<?=$row->offer_id;?>"
                   class="d_block banner animate_ftr wrapper r_corners type_2 relative animate_horizontal_finished">
                    <img src="uploads/offers/<?=$row->offer_image;?>" alt=""> <span
                            class="banner_caption d_block vc_child t_align_c w_sm_auto">
            <span class="d_inline_middle">
               </span>
            </span>
                </a>
            </div>
            <?php }?>
            <?php endforeach;?>
        </section>
    </div>
</div>

<script>
$(document).ready(function () {
    alert('dhf');
    var myIndex = 0;
    carousel();
});
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySLIDERS");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>