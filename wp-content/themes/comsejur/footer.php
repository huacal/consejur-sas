	<!-- Footer
		============================================= -->
 <footer class="footer-bottom">
     <div class="footer-inner">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <?php
                     if(is_active_sidebar('sidebar-footer-1')){
                        dynamic_sidebar('sidebar-footer-1');
                     }     
                     ?>
                 </div>

                 <div class="col-md-3 offset-md-1 col-sm-12">
                 <?php
                     if(is_active_sidebar('sidebar-footer-2')){
                        dynamic_sidebar('sidebar-footer-2');
                     }     
                     ?>
                 </div>

                 <div class="col-md-4">
                 <?php
                     if(is_active_sidebar('sidebar-footer-3')){
                        dynamic_sidebar('sidebar-footer-3');
                     }     
                     ?>
                 </div>

                 <div class="container">
                     <div class="row">
                     <div class="col-md-12 legal-row">
                     <div class="copyrights-message">2020 © <span class="colored">Comsejur SAS</span>. Todos los Derechos Reservados.</div>
                     </div>
                     </div>
                 </div>

                 
             </div>
         </div>
     </div>
 </footer>

</div><!-- #full-container end -->

<a class="scroll-top-icon scroll-top" href="#"><i class="fas fa-angle-up"></i></a>

<?php wp_footer();?>
</body>

</html>