<?php
    
    function r_cdswebinar_options_mb( $post) {
        $cdswebinar_data                = get_post_meta( $post->ID, 'cdswebinar_data', true );

        if(!$cdswebinar_data) {
            $cdswebinar_data             = array(
                'passwordsettings'      => 'randompassword',
                'messageuser'           => 'Este es un mensaje para el usuario we',
                'webinarlink'           => 'https://www.webinarjam.com/ewesoyunwebinar'
            );
        }

        ?>
        <h3>Password settings</h3>
        <div class="form-group">
            <label>Webinar link</label>
            <input class="form-control" type="text" name="r_webinarlink" pleaceholder="Webinar link" value=<?php echo $cdswebinar_data['webinarlink']; ?> width="200"/>
        </div>
        <div class="form-group">
            <label>Webinar access</label>
            <select class="form-control" name="r_passwordsettings">
                <option value="unpasswored">No password</option>
                <option value="randompassword" <?php echo $cdswebinar_data['passwordsettings'] == "randompassword" ? 'SELECTED' : ''; ?>>Random password</option>
                <option value="custompassword" <?php echo $cdswebinar_data['passwordsettings'] == "custompassword" ? 'SELECTED' : ''; ?>>Custom password</option>
            </select>
        </div>
        <div class="form-group">
            <label>Message for user</label>
            <input class="form-control" type="text" name="r_messageuser" pleaceholder="Message for user" value=<?php echo $cdswebinar_data['messageuser']; ?> required/>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-info">Get clientes</button>
        </div>
        <?php
    }