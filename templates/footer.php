<footer class="content-info">
  	<div class="footer-content">
    	<?php dynamic_sidebar('sidebar-footer'); ?>
    	<div class="row"><a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php get_template_part( 'templates/svgs/skar', 'logo' ); ?></a></div>
    	<div class="row">
	    	<ul class="social-container">
	    		<li><a href="https://www.facebook.com/skaradvertising/" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank"><img src="/wp-content/uploads/2016/05/facbook-icon.png"></a></li>
	    		<li><a href="https://twitter.com/skaradvertising" data-toggle="tooltip" data-placement="top" title="Twitter" target="_blank"><img src="/wp-content/uploads/2016/05/twitter-icon.png"></a></li>
	    		<li><a href="https://www.linkedin.com/company/skar-advertising" data-toggle="tooltip" data-placement="top" title="LinkedIn" target="_blank"><img src="/wp-content/uploads/2016/05/linkedin-icon.png"></a></li>
	    	</ul>
    	</div>
  	</div>
</footer>

<div class="modal fade" id="email-alerts" tabindex="-1" role="dialog" aria-labelledby="email-alertsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="email-alertsLabel">Sign up for email alerts</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="12365" title="Email Alerts"]'); ?>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="new-business" tabindex="-1" role="dialog" aria-labelledby="new-businessLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="email-alertsLabel">New Business Opportunities</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="12472" title="New Business contact form"]'); ?>
      </div>
    </div>
  </div>
</div>