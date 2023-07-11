            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <label>
                    <input type="search" class="search-field"
                        placeholder="<?php echo esc_attr_x( 'Search a product …', 'placeholder' ) ?>"
                        value="<?php echo get_search_query() ?>" name="s"
                        title="<?php echo esc_attr_x( 'Search a product:', 'label' ) ?>" />
                </label>
                <input type="submit" class="search-submit"
                    value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
            </form>