<?php

    /* WordPress Snippet For https://sakatacea.com/ */

    /* Some products appeared in multiple categories, this snippet changes the product thumbnail if the client is viewing the item in 1 of 2 specific categories */

    $output .= '<div class="product-thumb">';
        
        if($product_image){

        if (strpos($_SERVER['REQUEST_URI'], 'indoor-baby-leaf' )!==false){
                    
            $ibl_new_feat_img = get_field('featured_ibl_image_replacement');
            $ibl_new_feat_img_resized = $ibl_new_feat_img['sizes']['thumbnail'];
            $output .= "<img src ='".$ibl_new_feat_img_resized."' class='img-fluid'>";
            // $output .= var_dump($ibl_new_feat_img);
    
        } elseif(strpos($_SERVER['REQUEST_URI'], 'microgreen' )!==false) {
            
            $mg_new_feat_img = get_field('featured_mg_image_replacement', $product_id);
            $mg_new_feat_img_resized = $mg_new_feat_img['sizes']['thumbnail'];
            $output .= "<img src ='".$mg_new_feat_img."' class='img-fluid'>";
            // $output .= var_dump($ibl_new_feat_img);
    
        }else{
    
            $output .= $product_image;
    
        }
    
    }else{
        
        $output .= '<img src="/wp-content/themes/jld/images/placeholder.jpg" width="212" height="212" alt="">';
    
    }
        $output .= '</div>';

?>
