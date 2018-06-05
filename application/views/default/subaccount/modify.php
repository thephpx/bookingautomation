<div class="row">
    <div class="offset-lg-2 col-md-8">
        <h3>Modify Sub Account</h3><hr/>
        <br class="clearfix" /><br/>

        <form method="post" action="<?php print current_url(); ?>" class="needs-validation">

            <div class="form-group">
                <label for="enabled">Enabled:</label>
                <select class="form-control <?php if(form_error('enabled')) print 'is-invalid'; ?>" name="enabled">
                    <option value="1" <?php if($row->enabled == 1) print 'selected="selected"'; ?>>True</option>
                    <option value="0" <?php if($row->enabled == 0) print 'selected="selected"'; ?>>False</option>
                </select>
                <?php print form_error('role', '<div class="invalid-feedback">','</div>'); ?>
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control <?php if(form_error('role')) print 'is-invalid'; ?>" name="role">
                    <option value="0" <?php if($row->role == 0) print 'selected="selected"'; ?>>Admin</option>
                    <option value="1" <?php if($row->role == 1) print 'selected="selected"'; ?>>Read Only</option>
                    <option value="2" <?php if($row->role == 2) print 'selected="selected"'; ?>>Cleaner</option>
                    <option value="3" <?php if($row->role == 3) print 'selected="selected"'; ?>>Front Desk</option>
                    <option value="4" <?php if($row->role == 4) print 'selected="selected"'; ?>>Back Office</option>
                    <option value="5" <?php if($row->role == 5) print 'selected="selected"'; ?>>Stayin Town</option>
                    <option value="6" <?php if($row->role == 6) print 'selected="selected"'; ?>>Channel Manager</option>
                    <option value="7" <?php if($row->role == 7) print 'selected="selected"'; ?>>No Cards</option>
                    <option value="8" <?php if($row->role == 8) print 'selected="selected"'; ?>>Cleaner Manager</option>
                </select>
                <?php print form_error('role', '<div class="invalid-feedback">','</div>'); ?>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="<?php print base_url(); ?>" class="btn btn-primary">Back</a>
            </div>

        </form>
    </div>
</div>