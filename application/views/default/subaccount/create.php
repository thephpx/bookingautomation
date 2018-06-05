<div class="row">
    <div class="offset-lg-4 col-md-4">
        <h3>Create Sub Accounts</h3><hr/>
        <br class="clearfix" />

        <form method="post" action="<?php print current_url(); ?>" class="needs-validation">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control <?php if(form_error('username')) print 'is-invalid'; ?>" name="username" value=""/>
                    <?php print form_error('username', '<div class="invalid-feedback">','</div>'); ?>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control <?php if(form_error('password')) print 'is-invalid'; ?>" name="password" value=""/>
                    <?php print form_error('password', '<div class="invalid-feedback">','</div>'); ?>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control <?php if(form_error('email')) print 'is-invalid'; ?>" name="email" value=""/>
                    <?php print form_error('email', '<div class="invalid-feedback">','</div>'); ?>
                </div>

                <div class="form-group">
                    <label for="role">Role:</label>
                    <select class="form-control <?php if(form_error('role')) print 'is-invalid'; ?>" name="role">
                        <option value="0">Admin</option>
                        <option value="1">Read Only</option>
                        <option value="2">Cleaner</option>
                        <option value="3">Front Desk</option>
                        <option value="4">Back Office</option>
                        <option value="5">Stayin Town</option>
                        <option value="6">Channel Manager</option>
                        <option value="7">No Cards</option>
                        <option value="8">Cleaner Manager</option>
                    </select>
                    <?php print form_error('role', '<div class="invalid-feedback">','</div>'); ?>
                </div>

                <div class="form-group">
                    <label class="control-label">System Emails:</label>
                    <select class="form-control" name="systemEmails">
                        <option value="0">Administrator Email</option>
                        <option value="1">Administrator Email and Cc: Property</option>
                        <option value="2">Property Email</option>
                        <option value="3">Master Account Email</option>
                        <option value="4">Administrator Email and Cc: Master</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label">Booking Emails:</label>
                    <select class="form-control" name="bookingEmails">
                        <option value="0">Administrator Email</option>
                        <option value="1">Administrator Email and Cc: Property</option>
                        <option value="2">Property Email</option>
                        <option value="3">Master Account Email</option>
                        <option value="4">Administrator Email and Cc: Master</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="label-control">Booking ReplyTo Emails:</label>
                    <select class="form-control" name="bookingReplyto">
                        <option value="0">Guest Email</option>
                        <option value="1">Property Email</option>
                        <option value="2">Adminitrator Email</option>
                        <option value="3">Master Account Email</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="<?php print base_url(); ?>" class="btn btn-primary">Back</a>
                </div>
        </form>
    </div>
</div>