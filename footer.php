			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="general-info">
						<p>
							<span class="footer-phone">
								<a href="tel:07850545566">078 505 455 66</a>
							</span>

							<span class="footer-email">
								<a href="mailto:kontakt@marcinzogrodnik.pl">kontakt@marcinzogrodnik.pl</a>
							</span>
						</p>
						<?php footer_menu(); ?>
					</div>
					<p class="copyright">&copy; <?php echo date('Y'); ?>  <?php bloginfo('name'); ?>.</p>

				</div>
			</footer>
		</main>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
