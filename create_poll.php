<?php $title = "Create A Poll"; ?>
<?php include 'headerfunction.php'; ?>
<div id="createForm">
    <form class="form-horizontal" action="alert_page_poll.php" method="post">
<fieldset>

    <center><legend>Create A Poll       <i class="glyphicon glyphicon-pencil"></i>   </legend></center>

<div class="control-group">
  <label class="control-label" for="pollname">Poll Title/Name:</label>
  <div class="controls">
    <input id="pollname" name="pollname" type="text" class="input-xlarge">
    <p class="help-block">What will the title of the poll be. This is what will be visible to users</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="description">Description:</label>
  <div class="controls">                     
    <textarea id="description" name="description"></textarea>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="categories">Category:</label>
  <div class="controls">
    <select id="categories" name="categories" class="input-xlarge">
      <option></option>
      <option>Political</option>
      <option>Media</option>
      <option>Games</option>
      <option>Movies</option>
      <option>Misc.</option>
    </select>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="visibility">Visibility:</label>
  <div class="controls">
    <label class="checkbox" for="visibility-0">
      <input type="checkbox" name="visibility" id="visibility-0" value="Private">
      Private
    </label>
    <label class="checkbox" for="visibility-1">
      <input type="checkbox" name="visibility" id="visibility-1" value="Public">
      Public
    </label>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="closedate">Close Poll:</label>
  <div class="controls">
    <input id="closedate" name="closedate" type="text" placeholder="mm/dd/yyyy" class="input-medium">
    <p class="help-block">When will the poll no longer be able to be voted on</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="option1">Option 1:</label>
  <div class="controls">
    <input id="option1" name="option1" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="option2">Option 2:</label>
  <div class="controls">
    <input id="option2" name="option2" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="option3">Option 3:</label>
  <div class="controls">
    <input id="option3" name="option3" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="option4">Option 4:</label>
  <div class="controls">
    <input id="option4" name="option4" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="option5">Option 5:</label>
  <div class="controls">
    <input id="option5" name="option5" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="option6">Option 6:</label>
  <div class="controls">
    <input id="option6" name="option6" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="submitbutton"></label>
  <div class="controls">
    <button id="submitbutton" name="submitbutton" class="btn btn-primary">Submit Poll</button>
  </div>
</div>

</fieldset>
</form>
    
</div>
<?php include 'footer.php'; ?>