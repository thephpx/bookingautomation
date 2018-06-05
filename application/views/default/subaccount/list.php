<div class="row">
    <div class="offset-lg-2 col-md-8">
        <h3>Sub Accounts</h3><hr/>
        <?php if(isset($page_message)){ ?>
            <div class="alert alert-<?php print $page_message_type; ?>" role="alert">
                <?php print $page_message; ?>
            </div>
        <?php }?>
        <a href="<?php echo site_url('subaccounts/create');?>" class="btn btn-success float-right">Create</a>
        <br class="clearfix" /><br/>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col" width="50%">Username</th>
                <th scope="col" width="30%">Status</th>
                <th scope="col" width="20%">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_object($rows)) foreach($rows as $row){ ?>
                <tr>
                    <td scope="row"><?php print $row->username; ?></td>
                    <td scope="row"><?php if($row->enabled == 1) print 'Enabled'; else print 'Disabled'; ?></td>
                    <td scope="row">
                        <a class="btn btn-sm btn-warning" href="<?php print site_url('subaccounts/update/'.$row->id); ?>">
                            Update Role
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>