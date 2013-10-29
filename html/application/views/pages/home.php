<article>
	<section#WURFL>
		<h4>VERSION: <?php echo $wurflInfo->version; ?></h4>
		User Agent: <b> <?php echo htmlspecialchars($ua); ?> </b>
		<ul>
			<li>ID: <?php echo $requestingDevice->id; ?></li>
			<li>Brand Name: <?php echo $requestingDevice->getCapability('brand_name'); ?> </li>
			<li>Model Name: <?php echo $requestingDevice->getCapability('model_name'); ?> </li>
			<li>Marketing Name: <?php echo $requestingDevice->getCapability('marketing_name'); ?> </li>
			<li>Preferred Markup: <?php echo $requestingDevice->getCapability('preferred_markup'); ?> </li>
			<li>Resolution Width: <?php echo $requestingDevice->getCapability('resolution_width'); ?> </li>
			<li>Resolution Height: <?php echo $requestingDevice->getCapability('resolution_height'); ?> </li>
		</ul>
		<p><b>Query WURFL by providing the user agent:</b></p>
	</section>
</article>