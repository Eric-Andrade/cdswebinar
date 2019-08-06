<?php
    
    function r_cdswebinar_options_mb( $post ) {
        $cdswebinar_data                = get_post_meta( $post->ID, 'cdswebinar_data', true );

        if(!$cdswebinar_data) {
            $cdswebinar_data             = array(
                'passwordsettings'      =>  'randompassword',
                'cost'                  =>   200,
                'webinarlink'           =>  'https://www.webinarjam.com/ewesoyunwebinar'
            );
        }

        ?>
        <!-- <h3>Password settings</h3> -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class='form-group'>
                        <label>Webinar link</label>
                        <input class='form-control' type='url' name='r_webinarlink' required value="<?php echo isset($cdswebinar_data['webinarlink']) ? stripslashes_deep($cdswebinar_data['webinarlink']) : ''; ?>"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class='form-group'>
                        <label>Webinar access</label>
                        <select class='form-control' name='r_passwordsettings'>
                            <option value='unpasswored'>No password</option>
                            <option value='randompassword' <?php echo $cdswebinar_data['passwordsettings'] == 'randompassword' ? 'SELECTED' : ''; ?>>Random password</option>
                            <option value='custompassword' <?php echo $cdswebinar_data['passwordsettings'] == 'custompassword' ? 'SELECTED' : ''; ?>>Custom password</option>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label>Webinar cost</label>
                        <input class='form-control' type='text' name='r_cost' required pattern='[0-9]{1,5}' value="<?php echo isset($cdswebinar_data['cost']) ? stripslashes_deep($cdswebinar_data['cost']) : ''; ?>"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class='form-group'>
                        <label>Webinar password</label>
                        <input class='form-control' type='text' name='r_webinarpassword' required value="password we"/>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }