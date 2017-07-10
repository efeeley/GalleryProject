<?php include 'head.inc'; ?>



			<article>
					
				<h3>Event Name</h3>
			
            <fieldset>
			
			<!-- Provided by Kelly and Chris -->
                <legend>Upload Your Images</legend>
                <form enctype="multipart/form-data" action="myaction.php" method="POST">
					<p><label for="image">Upload File:</label> <input type ="file" name ="image" /></p>
					<br/>
					<p><label for="pass">Password:</label> <input type="password" name="pass" /></p>
					<br/>
					<input type="submit" value="Upload" class="formbutton"/>
				</form>

            </fieldset>	
					
				
							

			
			</article>
        
<?php include 'FootandMenu.inc'; ?>