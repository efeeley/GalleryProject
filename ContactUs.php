<?php include 'head.inc'; ?>

		<h3>How To Contact Us</h3>
		
			<p> Please fill out the form bellow with your questions, comments, or concerns. We will do our best to get back with you 
			within 24 hours. </p>

            <fieldset>
                <legend>Contact Request</legend>
                <form action="#" method="get">
                    <p><label for="name">Name:</label>
                    <input name="name" id="name" value="" type="text" /></p>
                    <p><label for="email">Email:</label>
                    <input name="email" id="email" value="" type="text" /></p>

                    <p><label for="message">Message:</label>
                    <textarea cols="37" rows="11" name="message" id="message"></textarea></p>
                    <p><input name="send" style="margin-left: 150px;" class="formbutton" value="Send" type="submit" /></p>
                </form>
            </fieldset>
		
<?php include 'FootandMenu.inc'; ?>