			<form action="" method="post" class="idea-form">
						<div class="form-group">
							<div class="col-sm-4">
								        <select class="form-control required" name="category" required="" value="<?php echo !empty($idea['category'])?$idea['category']:''; ?>">
                                            <option value="No category selected">Select Category</option>
                                            <option value="Android App Development">Android App Development</option>
                                            <option value="Robotics">Robotics</option>
                                            <option value="Web App Development">Web App Development</option>
                                            <option value="Others">Others</option>
                                        </select>
							</div>
						</div>
							<br/><br/>
						<div class="form-group">
							<div class="col-sm-8">
								<input type="text" name="title" size="79" class="text" placeholder="Title (Required)" required="" value="<?php echo !empty($idea['title'])?$idea['title']:''; ?>"><br/><br/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-8">
								<textarea name="message" cols="80" rows="5" class="textarea" placeholder="Your message" required="" value="<?php echo !empty($idea['message'])?$idea['message']:''; ?>"></textarea><br/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-8">
								<input type="submit" value="Send" class="submit" name="ideaSubmit"><br/>
							</div>
						</div>
					</form>