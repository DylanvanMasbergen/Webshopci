<section class="main-content">
		<div class="row">
			<div class="span8">
				<div class="row-fluid">
					<br/> 
					<a href="" class="btn btn-success">New Product</a>
					<a href="" class="btn btn-success">View Product</a>
					<br/> <br/> 
					<div class="control-group">
					<label  class="control-label">Titel</label>
						<div class="controls">
							<input type="text" name="title" class="span8"/>
						</div>
					</div>

					<div class="control-group">
					<label class="control-label">Beschrijving</label>
						<div class="controls">
							<textarea name="description" rows="3" id="textarea" class="span8"></textarea>
						</div>
					</div>

					<div class="control-group">
					<label  class="control-label">Prijs</label>
						<div class="controls">
							<input type="text" name="price" class="span8"/>
						</div>
					</div>

					<div class="control-group">
					<label  class="control-label">Vat</label>
						<div class="controls">
							<input type="text" name="vat" class="span8"/>
						</div>
					</div>

					<div class="control-group">
					<label  class="control-label">Korting</label>
						<div class="controls" class="span8">
							<input type="text" name="disc" class="span8"/>
						</div>
					</div>

					<div class="control-group">
					<label  class="control-label">Vooraad</label>
						<div class="controls">
							<input type="text" name="unit" class="span8"/>
						</div>
					</div>

					<div class="control-group">
					<label  class="control-label">Unit</label>
						<div class="controls" class="span8" >
							<select name="unitid">
								<?php
									foreach ($allUnit as $value ) {
										echo "<option value=\"{$value->id}\">{$value->name}</option>";
									}
								?>
							</select>
						</div>
					</div>

						<div class="control-group">
					<label  class="control-label">Category</label>
						<div class="controls" class="span8" >
							<select name="Catid" id="catid">
								<option value="0">Select Category</option>
								<?php
									foreach ($allCat as $value ) {
										echo "<option value=\"{$value->id}\">{$value->name}</option>";
									}
								?>
							</select>
						</div>
					</div>


						<div class="control-group">
					<label  class="control-label">Sub Category</label>
						<div class="controls" class="span8" >
							<select name="scatid" id="scatid">
								<option value="0">Select Category first</option>
								
							</select>
						</div>
					</div>

					<div class="control-group">
					<label  class="control-label">Plaatje</label>
						<div class="controls">
							<input type="file" name="picture"/>
						</div>
					</div>

					<button class="btn btn-inverse pull-right">Confirm order</button>
				</div>
			</div>				
		</div>
</section>

<script>
	$(document).ready(function(){
		$("#catid").change(function(){
			var catid = $(this).val();
			if(catid == 0){
				$("#scatid").html("");
				$("#scatid").append("<option value='0'>Select Category first</option>");
			}
			else if(catid == 1){
				$("#scatid").html("");
				$("#scatid").append("<option value='1'>Toshiba</option>");
				$("#scatid").append("<option value='2'>Dell</option>");
				$("#scatid").append("<option value='3'>HP</option>");
				$("#scatid").append("<option value='4'>Lenovo</option>");
			}
			else if(catid == 2){
				$("#scatid").html("");
				$("#scatid").append("<option value='5'>Nikon</option>");
				$("#scatid").append("<option value='6'>Canon</option>");
			}
			else if(catid == 3){
				$("#scatid").html("");
				$("#scatid").append("<option value='7'>jbl</option>");
				$("#scatid").append("<option value='8'>Sonos</option>");
			
			}
			else if(catid == 4){
				$("#scatid").html("");
				$("#scatid").append("<option value='9'>Tom Tom</option>");
			}
		});
		
	});
</script>