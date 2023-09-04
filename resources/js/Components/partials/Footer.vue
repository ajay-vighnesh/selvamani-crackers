<script setup>
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  
  company_address: String,
  mobile_number_3:Number,
    
});
</script>


<template>
  <!-- footer start -->
  <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <Link :href="route('order')"> <img src="img/LP CMYK.png" alt=""> </Link>
                        <p>Thiruppathi Payro World </p>
                        <p>K.Iniya Pattasu Kadai Madathupatti, Sivakasi-626128</p>
                        <!-- <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div> -->
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-widget">
                        <h4>Our Service</h4>
                        <ul>
                            <li><Link :href="route('order')">Home</Link></li>
                            <li><Link :href="route('about')">About</Link></li>
                            <!-- <li><Link :href="route('order')">Order</Link></li> -->
                            <li><Link :href="route('contact')">Contact</Link></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contact Info</h4>
                        <p>D.No:2/363,Kananjampatti village, Sivakasi, Tamilnadu -626131</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-phone fa-rotate-90"></i>8122703101</a></li>
                            <li><a href="#"><i class="fa fa-phone fa-rotate-90"></i>8072583471</a></li>
                            <!-- <li><a href="#"><i class="ti-world"></i> ariclawyerfirm.com</a></li> -->
                        </ul>
                    </div>
                </div>
        
            </div>

        </div>
       
    </footer>
        <!-- footer end -->
</template>








