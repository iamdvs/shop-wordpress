<aside class="single_sidebar_widget search_widget">
                 <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                    <div class="form-group">
                         <div class="input-group mb-3">
                              <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
                              <input type="text" class="form-control" value="<?php echo get_search_query() ?>" name="s" placeholder="<?php echo esc_attr_x('  مثال: موبایل', 'placeholder' ) ?>">
                             <div class="input-group-append">
                              </div>
                             </div>
                         </div>
                </form>
 </aside>