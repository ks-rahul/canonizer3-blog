<?php

if ( ! defined('ABSPATH')) exit;  // if direct access
?>


<!--<form role="search" method="get" id="searchform" action="<?php //echo esc_url(home_url( '/' )); ?>">
    <div>
       <input type="text" placeholder="<?php //esc_attr_e('Search &hellip;', 'bug-blog'); ?>" name="s" id="s" value="<?php //echo get_search_query(); ?>" />
	 </div>
</form> -->
<form method="get" action="https://www.google.com/custom" target="_top">
                            <div class="input-group search-panel">
                               <table>
									<tr>
										<td class="radio radio-primary">
										<input type="radio" name="sitesearch" value="" checked id="ss0"></input>
										<label for="ss0" title="Search the Web"><font size="-1" color="black">Web</font></label></td>
										<td class="radio radio-primary">
										<input type="radio" name="sitesearch" value="canonizer.com" id="ss1" checked></input>
										<label for="ss1" title="Search canonizer.com"><font size="-1" color="black">Canonizer.com</font></label></td>
									</tr>
								</table>
                                <input type="hidden" name="search_param" value="all" id="search_param">         
                                <input type="text" class="form-control search" name="q" id="sbi" placeholder="Google Search for...">
                               
									<input type="submit" name="sa" value="Search" id="sbb"></input>
									<input type="hidden" name="client" value="pub-6646446076038181"></input>
									<input type="hidden" name="forid" value="1"></input>
									<input type="hidden" name="ie" value="ISO-8859-1"></input>
									<input type="hidden" name="oe" value="ISO-8859-1"></input>
									<input type="hidden" name="cof" value="GALT:#0066CC;GL:1;DIV:#999999;VLC:336633;AH:center;BGC:FFFFFF;LBGC:FF9900;ALC:0066CC;LC:0066CC;T:000000;GFNT:666666;GIMP:666666;LH:43;LW:220;L:https://canonizer.com/images/CANONIZER.PNG;S:https://;FORID:1"></input>
									<input type="hidden" name="hl" value="en"></input>
                              </div>
                        </form>
