 <!--====== FOOTER START ======-->
 <footer class="footer-two">
     <div class="footer-widget-area pt-100 pb-50">
         <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-sm-6 order-1">
                     <!-- Site Info Widget -->
                     <div class="widget site-info-widget mb-20">
                         <div class="footer-logo mb-50">
                             <img src="{{('frontend-assets/img/footer-logo.png')}}" alt="Logo">
                         </div>
                         <p>Our cottage is one a kind on a big and beautiful lake. Sunrises are spectacular and the cottage is very private. There are 5 large size bedrooms and four bedrooms have full ensuites. Three bedroom have full lakeviews.</p>
                         <div class="social-links mt-20">
                             <a href="{{url($socialMedia->facebook)}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                             <a href="{{url($socialMedia->linkdin)}}" target="_blank"><i class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 order-3 order-lg-2">
                     <!-- Nav Widget -->
                     <div class="widget nav-widget mb-50">
                         <div>
                             <h4 class="widget-title">Quick Links</h4>
                             <ul>
                                 <li><a href="javascript:void(0)">Emsdale, Canada</a></li>
                                 <li><a href="javascript:void(0)">Ryerson, Canada</a></li>
                                 <li><a href="javascript:void(0)">About Owner</a></li>
                                 <li><a href="javascript:void(0)">About Canada</a></li>
                                 <li><a href="javascript:void(0)">Activities</a></li>
                                 <li><a href="javascript:void(0)">Attractions</a></li>
                                 <li><a href="javascript:void(0)">Amenities</a></li>
                                 <li><a href="javascript:void(0)">Book & Enquiry</a></li>
                                 <li><a href="javascript:void(0)">Contact Us</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 order-2 order-lg-3">
                     <!-- Contact Widget -->
                     <div class="widget contact-widget mb-50">
                         <h4 class="widget-title">Contact Us.</h4>
                         <div class="contact-lists">
                             <div class="contact-box">
                                 <div class="icon">
                                     <i class="flaticon-call"></i>
                                 </div>
                                 <div class="desc">
                                     <h6 class="title">Phone Number</h6>
                                    {{$ContactUs->contact_phone}}
                                 </div>
                             </div>
                             <div class="contact-box">
                                 <div class="icon">
                                     <i class="flaticon-message"></i>
                                 </div>
                                 <div class="desc">
                                     <h6 class="title">Email Address</h6>
                                     <a href="mailto:alokpaliwal@yahoo.com">{{$ContactUs->contact_email}}</a>
                                 </div>
                             </div>
                             <div class="contact-box">
                                 <div class="icon">
                                     <i class="flaticon-location-pin"></i>
                                 </div>
                                 <div class="desc">
                                     <h6 class="title">Address</h6>
                                  {{$ContactUs->contact_addr}}
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="copyright-area pt-30 pb-30">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-6 col-md-5 order-2 order-md-1">
                     <p class="copyright-text copyright-two">Copyright © 2024 | Alok Paliwal | All rights reserved</p>
                 </div>
                 <div class="col-lg-6 col-md-7 order-1 order-md-2">
                     <div class="footer-menu text-end">
                         <ul>
                             <li>Designed by |  <a href="https://www.createonlineweb.com/" target="_blank">Create Online Web</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!--====== FOOTER END ======-->