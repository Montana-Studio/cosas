<?php
            
                    global $paginas;

                    $big = 999999999;

                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $paginas->max_num_pages,
                        'prev_text'    => '<i class="fa fa-angle-left"></i> anterior',
                        'next_text'    => 'siguiente <i class="fa fa-angle-right"></i>'
                    ) );
                
?>