<!-- EBOW WORDPRESS FAQ -->

<!-- Style -->
<style type="text/css" media="screen">
	#ebow_wp_faq_wrapper, #ebow_wp_faq_wrapper * {-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;}
	#ebow_wp_faq_wrapper {padding: 35px 0;}
	#ebow_wp_faq_wrapper #ebow_wp_faq {float: left; width: 100%; overflow: hidden;}
	#ebow_wp_faq_wrapper #ebow_wp_faq dl {float: left; width: 100%;}
	#ebow_wp_faq_wrapper #ebow_wp_faq dl dt {float: left; width: 100%;}
	#ebow_wp_faq_wrapper #ebow_wp_faq dl dd {padding-left: 20px; float: left; width: 100%; margin: 0;}
	#ebow_wp_faq_wrapper #ebow_wp_faq h1 {margin: 30px 0 10px; line-height: 40px; background: #666666; color: #FFFFFF; padding-left: 10px;}
	#ebow_wp_faq_wrapper #ebow_wp_faq h2 {margin: 25px 0 10px;}
	#ebow_wp_faq_wrapper #ebow_wp_faq p {}
	#ebow_wp_faq_wrapper #ebow_wp_faq ul {list-style: disc; list-style-position: inside;}
	#ebow_wp_faq_wrapper #ebow_wp_faq ul li {}
	#ebow_wp_faq_wrapper #ebow_wp_faq a {padding: 10px; background: #666666; color: #FFFFFF; margin: 10px 0; float: left; text-decoration: none; text-transform: uppercase;
		-o-transition: color .6s ease-out, background-color .3s ease-in, opacity .1s ease-out;  
		-ms-transition:color .6s ease-out, background-color .3s ease-in, opacity .1s ease-out;  
		-moz-transition:color .6s ease-out, background-color .3s ease-in, opacity .1s ease-out;
		-webkit-transition:color .6s ease-out, background-color .3s ease-in, opacity .1s ease-out; 
		transition:color .6s ease-out, background-color .3s ease-in, opacity .1s ease-out;
	}
	#ebow_wp_faq_wrapper #ebow_wp_faq a:hover {background: #333333;}
	#ebow_wp_faq_wrapper #ebow_wp_faq input {height: 38px; border:0; float:left; background: #FFFFFF; color: #666666; margin: 10px 0;}
	.clearfix {clear: both; width: 100%; height: 1px; float: left;}
	
	@media only screen and (max-width: 767px) {
		#ebow_wp_faq_wrapper #ebow_wp_faq dl dd {padding-left: 0; margin: 0;}
	}
</style>

<!-- Html -->
<div id="ebow_wp_faq_wrapper">

	<div id="ebow_wp_faq">
		
		<dl>
					
			<dt><h1>Easy Wordpress Guide</h1></dt>
			
			<dd>		
				<a target="_blank" href="http://easywpguide.com/wordpress-manual/" title="Ebow Wordpress Faq">View it online</a>
				<div class="clearfix"></div>
				<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/faq/EasyWPGuide_V2.6.pdf" title="Ebow Wordpress Faq">Download as PDF (v2.6)</a>
				<div class="clearfix"></div>
				<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/faq/EasyWPGuide_V2.6.docx" title="Ebow Wordpress Faq">Download as Microsoft Word document (v2.6)</a>
			</dd>
			
			<dd>
				<form method="get" id="searchform" name="searchform" action="http://easywpguide.com/" target="_blank">
					<input type="text" name="s" id="s" value="Search" size="30" onfocus="if(this.value=='Search'){this.value=''}" onblur="if(this.value==''){this.value='Search'}">
	      			<a href="#" class="btn" onclick="javascript:document.searchform.submit();" title="Perform search">Search »</a>
		  		</form>
			</dd>
			
								
			<!-- 
			<dt><h1>1. Pages</h1></dt>
			
			<dd>
				<h2>Creating a new page</h2>
				<ul>
					<li>On the dashboard, click Pages -> Add New on the left sidebar.</li>
					<li>Add the title for your page.</li>
					<li>In the main text field, add the text for the page. For headings you can change the text type to Heading in the toolbar.</li>
					<li>Once you are happy with your page choose Page Attributes -> Parent on the right sidebar and choose the parent for this new page.</li>
				</ul>					
		
				<h2>Deleting or editing a page</h2>
				<ul>
					<li>On the dashboard, click Pages -> All Pages on the left sidebar.</li>
					<li>Search for the file you want in the search bar.</li>
					<li>Hover our cursor over the page name, until the submenu appears below it. Select Trash.</li>
					<li>To edit a page instead, click the name of the page.</li>
					<li>Once the page opens, make the desired changes, and click Update.</li>
				</ul>
				
				<h2>Working with drafts</h2>
				<p>Sometimes you may wish to save a page without publishing, either because you wish to work on it further later, or because it should not be live on the site until a certain time or date. This is simple to achieve.</p>
				<ul>
					<li>Create a new page and edit as normal.</li>
					<li>When you wish to stop editing, click Save as Draft in the Publish panel on the right.</li>
				</ul>
				<p>If you wish to see what the page will look like before you publish, click View Page. Once you are happy that everything is correct select Publish.</p>
			</dd>
						
			<dt><h1>2. Videos, images and documents</h1></dt>
			
			<dd>
				<h2>Including an image on a page</h2>
				
				<ul>
					<li>Create a new page or open an existing one to edit.</li>
					<li>Position the cursor in the place you wish to add the image.</li>
					<li>Click Add Media above the toolbar.</li>
					<li>Click Upload Files.</li>
					<li>Click Select Files, and find the file on your computer.</li>
					<li>Once the file is uploaded to WordPress take care to give the image a clear semantic title.</li>
					<li>Describe the image in the Alt Text field. Users with reading and vision difficulties will have this text read to them by screen readers. You should describe what the image is in simple, semantic language. For example, “Two girls cycling on country road”.</li>
					<li>You can resize the image that will appear on the page to one of a number of options by selecting from Attachment Display Settings -> Size. This does not resize the image itself, and the full resolution image will still be available if the user clicks the image.</li>
					<li>Click Insert into Page.</li>
					<li>Click Update/Publish.</li>
				</ul>
				
				<h2>Adding a video to a page</h2>
				<p>The best way to include video on the site is to upload to a service such as Vimeo or Youtube, as this way you will avoid putting a large strain on your available bandwidth. Once you have uploaded your video, you can embed the link into your page using the embed command on the toolbar.</p>
				
				<h2>Adding a document to a page</h2>
				<ul>
					<li>Select Media -> Add New from the left sidebar on the dashboard.</li>
					<li>Add the document you wish to upload and save.</li>
					<li>Select Links from the left sidebar.</li>
					<li>Create a new page.</li>
					<li>Give our page a title. </li>
					<li>Repeat the title in the main text field and select all.</li>
					<li>Click the link button on the toolbar, and search for the saved document in the search field.</li>
					<li>Click Add Link.</li>
					<li>In the Categories panel on the right, select Links and Guidelines.</li>
					<li>Publish.</li>
				</ul>
			</dd>
			
			<dt><h1>3. Posts</h1></dt>
			
			<dd>
				<p>The news items are not contained in pages like most of the rest of the site, but in posts. The post system makes it easy to display web pages chronologically, which is ideal for news.</p>
				
				<h2>Adding posts</h2>
				<ul>
					<li>On the dashboard, go to Posts -> Add New on the left sidebar.</li>
					<li>Enter the title, body, and images, as you would on a page.</li>
					<li>You may wish to upload a featured image to illustrate the link the post. Click Featured Image -> Add Image on the right, and add as normal. (See Working with Images and Videos for more information).</li>
					<li>Publish.</li>
				</ul>
				
			</dd>
			
			<dt><h1>4. Menus</h1></dt>
			
			<dd>
				<p>The menus section of WordPress allows you to put links to your various pages within the navigation bar of the site. This makes it easy to provide a way for your users to find the page they want. Let’s get started.</p>
				
				<h2>Adding a page to a menu</h2>
				<ul>
					<li>On the dashboard, go to Appearance -> Menus on the left sidebar.</li>
					<li>You can find all pages in the site through the Pages panel list in the left.</li>
					<li>On the right top are the menu sets. Choose the one you wish to edit.</li>
					<li>Below the tabs is the full list of current menus. You can drag and drop menus into the desired position and order.</li>
					<li>Select the page you wish to add from the panel on the left, and click Add to Menu.</li>
					<li>Once the item appears on the right, you can drag it into the correct position.</li>
					<li>Once you are happy save to update the site.</li>
				</ul>
				
			</dd>
			
			-->
		</dl>	
	</div>

</div>