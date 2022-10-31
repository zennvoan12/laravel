 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

     <div class="footer-content">
         <div class="container">

             <div class="row g-5">
                 <div class="col-lg-4">
                     <h3 class="footer-heading">About ZenBlog</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem
                         deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae
                         officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
                     <p><a href="about.html" class="footer-link-more">Learn More</a></p>
                 </div>
                 <div class="col-6 col-lg-2">
                     <h3 class="footer-heading">Menu</h3>
                     <ul class="footer-links list-unstyled">
                         <li><a href="/"><i class="bi bi-chevron-right"></i> Home</a></li>
                         <li><a href="/posts"><i class="bi bi-chevron-right"></i> Blog</a></li>
                         <li><a href="/categories"><i class="bi bi-chevron-right"></i>
                                 Categories</a></li>

                         <li><a href="/about"><i class="bi bi-chevron-right"></i> About </a></li>

                     </ul>
                 </div>
                 <div class="col-6 col-lg-2">
                     <h3 class="footer-heading">Category</h3>
                     <ul class="footer-links list-unstyled">
                         @if (Request::url() === '/posts')
                             @foreach ($posts->take(3) as $post)
                                 <li><a href="/categories/{{ $post->category->slug }}"><i
                                             class="bi bi-chevron-right"></i>
                                         {{ $post->category->name }}</a></li>
                             @endforeach
                         @elseif (Request::url() === '/categories')
                             @foreach ($categories->take(3) as $category)
                                 <li><a href="/categories/{{ $category->slug }}"><i class="bi bi-chevron-right"></i>
                                         {{ $category->name }}</a></li>
                             @endforeach
                         @endif
                     </ul>
                 </div>


             </div>
         </div>
     </div>

     <div class="footer-legal">
         <div class="container">

             <div class="row justify-content-between">
                 <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                     <div class="copyright">
                         © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
                     </div>

                     <div class="credits">
                         <!-- All the links in the footer should remain intact. -->
                         <!-- You can delete the links only if you purchased the pro version. -->
                         <!-- Licensing information: https://bootstrapmade.com/license/ -->
                         <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                         Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                     </div>

                 </div>

                 <div class="col-md-6">
                     <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                         <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                         <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                         <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                         <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                         <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                     </div>

                 </div>

             </div>

         </div>
     </div>

 </footer>
