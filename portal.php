<?php 
/*
Template Name: Portal
*/
get_header(); ?>
<div class="hero-home sm">
	<div class="container">
		<div data-aos="fade-left">
			<h1>61 MILPERRA ROAD</h1>
			<h2>Project<br> Portal</h2>
		</div>
		<div class="link">
			<a href="#" class="btn btn-primary">Enquire</a>
		</div>
	</div>
	<div class="bg">
		<p class="caption">Artist Impression</p>
		<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/bg_portal.jpg" alt="">
	</div>
</div>
<div class="section section-portal">
	<div class="container">
		<div class="text">
			<p>This Project Portal provides public access to key information and documentation relating to the proposed development at 61 Milperra Road.</p>

			<p>The portal has been established to support transparency and ongoing communication by making relevant project material available in a single location, including approvals, plans, reports and project updates.</p>
		</div>
		<div class="box">
			<div class="item" data-aos="fade">
				<h3>Approved Strategies, Plans and Management Programs</h3>
				<p>This section contains approved strategies, plans and management programs prepared for the project in accordance with planning and regulatory requirements.</p>
				<p>These documents outline the framework for construction, environmental management, operational controls and compliance measures associated with the development.</p>
				<div class="link">
					<a href="#" class="btn btn-primary">Download</a>
				</div>
			</div>
			<div class="item" data-aos="fade">
				<h3>Development Consent & Stamped Plans</h3>
				<p>The Development Consent and stamped plans for the project are available in this section.</p>
				<p>These documents detail the approved scope of development and the conditions that apply to the project, including endorsed architectural and site plans.</p>
				<div class="link">
					<a href="#" class="btn btn-primary">Download</a>
				</div>
			</div>

			<div class="item" data-aos="fade">
				<h3>Environmental Impact Statement, Submissions Report & Additional Information</h3>
				<p>This section contains the Environmental Impact Statement (EIS), Submissions Report and supporting documentation prepared as part of the planning assessment process.</p>
				<p>Together, these documents address potential environmental, traffic, social and economic impacts and outline proposed mitigation measures.</p>
				<div class="link">
					<a href="#" class="btn btn-primary">Download</a>
				</div>
			</div>
			<div class="item" data-aos="fade">
				<h3>Project Staging</h3>
				<p>Project staging information outlines the anticipated sequencing and delivery of works for the development.</p>
				<div class="link">
					<a href="#" class="btn btn-primary">Download</a>
				</div>
			</div>
			<div class="item" data-aos="fade">
				<h3>Project Enquiries and Complaints</h3>
				<p>Gateway Capital is committed to open communication with stakeholders and the community.</p>
				<p>Members of the public may submit project-related enquiries or complaints using the contact details or submission form provided below. Supporting documentation may be uploaded where relevant.</p>
				<p>All enquiries and complaints will be managed in accordance with the project&rsquo;s communication and complaints handling procedures.</p>
				<div class="link">
					<a href="#" class="btn btn-primary">Download</a>
				</div>
			</div>
		</div>
		<div class="enquiry">
			<div class="heading">
				<h2>Complaints and<br> Enquiries</h2>
			</div>
			<div class="info">
				<p>A register of project enquiries and complaints will be maintained for the development. In accordance with project requirements, a summary register will be made available on a quarterly basis.</p>
			</div>
			<div class="agents" data-aos="fade">
				<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/agent3.png" alt=""></div>
				<h4>Riley Sampson</h4>
				<p>Development Manager<br>
				+61 487 319 800<br>
				riley.sampson@gatewaycapital.com.au</p>
			</div>
		</div>

	</div>
</div>

<?php include('agents.php'); ?>
<?php get_footer();?>