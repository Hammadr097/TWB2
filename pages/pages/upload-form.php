<form id="contact" name="contact" method="post">  
  <fieldset> 
  	<div class="col-sm-2">
  		<div class="form-group label-floating">
			<label style="color: maroon;" class="control-label">Title</label>
			<input type="text" name="stitle" id="stitle" class="form-control" size="30" style="width: 180px" required>
		</div>
	</div>
	<div class="col-sm-2">
  		<div class="form-group label-floating">
			<label style="color: maroon;" class="control-label">Genre</label>
			<input type="text" name="sgenre" id="sgenre" class="form-control" size="30" style="width: 180px" required>
		</div>
	</div>
	<div class="col-sm-2">
  		<div class="form-group label-floating">
			<label style="color: maroon;" class="control-label">Location</label>
			<input type="text" name="slocation" id="slocation" class="form-control" size="30" style="width: 180px" required>
		</div>
	</div>
	<div class="col-sm-6">
  		<div class="form-group label-floating">
			<label style="color: maroon;" class="control-label">Write Your Message here!</label>
			<textarea class="form-control" id="sstory" rows="5" style="width: 645px;" required></textarea>
		</div>
	</div>
	<input type="file" name="spic" id="spic" class="spic" required>
	<label id="splabel"> Upload Your Image Here</label>
    <input id="ssubmit" type="submit" name="submit" value="Upload" style="float: right; background-color: #9e3b33; border-radius: 10px;color: white;" required> 
  </fieldset>  
</form>