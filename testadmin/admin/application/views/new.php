<? $this->load->view('header') ?>
    
    <div class="row-fluid">
        <div class="span10">
            <form class="form-horizontal">
                <fieldset>
                <legend>Controls Bootstrap supports</legend>
                <div class="control-group">
                <label class="control-label" for="input01">Text input</label>
                <div class="controls">
                <input type="text" class="input-xlarge" id="input01">
                <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
                </div>
                </div>

                <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="reset" class="btn">Cancel</button>
                </div>
                </fieldset>
            </form>
        </div>
        
        <div class="span2">
            <a class="btn btn-large" href="#">New project</a>
        </div>
    </div>
    
<? $this->load->view('footer') ?>