<?php
    
    function r_cdswebinar_options_mb( $post ) {
        $cdswebinar_data                = get_post_meta( $post->ID, 'cdswebinar_data', true );

        if(!$cdswebinar_data) {
            $cdswebinar_data             = array(
                'passwordsettings'      =>  'randompassword',
                'cost'                  =>   200,
                'webinarlink'           =>  'http://itecordurango.com/subdominios/api_kityplancho/api/Clientes?ID=71',
                'webinarpassword'     =>  'ewe'
            );
        }
       ?>
        <!-- <h3>Password settings</h3> -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class='form-group'>
                        <label>Webinar link</label>
                        <input class='form-control' type='url' name='r_webinarlink' required autocomplete="off" value="<?php echo isset($cdswebinar_data['webinarlink']) ? stripslashes_deep($cdswebinar_data['webinarlink']) : ''; ?>"/>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="ewe()">Search</button>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class='form-group'>
                        <label>Webinar access</label>
                        <select class='form-control' name='r_passwordsettings' id='r_passwordsettings' onchange='inputAvailable()'>
                            <option value='unpasswored'>No password</option>
                            <option value='randompassword' <?php echo $cdswebinar_data['passwordsettings'] == 'randompassword' ? 'SELECTED' : ''; ?>>Random password</option>
                            <option value='custompassword' <?php echo $cdswebinar_data['passwordsettings'] == 'custompassword' ? 'SELECTED' : ''; ?>>Custom password</option>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label>Webinar cost</label>
                        <input class='form-control' type='text' name='r_cost' required autocomplete="off" pattern='[0-9]{1,5}' value="<?php echo isset($cdswebinar_data['cost']) ? stripslashes_deep($cdswebinar_data['cost']) : ''; ?>"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class='form-group'>
                        <label>Webinar password</label>
                        <input class='form-control ewe' type='text' name='r_webinarpassword' id='r_webinarpassword' autocomplete="off" value="<?php echo isset($cdswebinar_data['webinarpassword']) ? stripslashes_deep($cdswebinar_data['webinarpassword']) : ''; ?>"/>
                    </div>
                </div>
                <?php
                echo "<script type='text/javascript'>";
                    echo "function inputAvailable()";
                    echo "{";
                        echo "var x = document.getElementById('r_passwordsettings').value;";
                        echo "if(x === 'unpasswored'){";
                            echo "$('#r_webinarpassword').attr('readonly', 'readonly');"; // si no tiene contreaseña lo bloqueas
                            echo "$('#r_webinarpassword').removeAttr('required');";
                            echo "document.getElementById('r_webinarpassword').value = ''"; // vacia el campo de password si select es igual a unpasswored, para que guarde vacio en BBDD
                            // echo "return this;";
                            echo "}";
                        echo "else {";
                            echo "$('#r_webinarpassword').removeAttr('readonly');";
                            echo "$('#r_webinarpassword').attr('required', 'required');"; // si no tiene contreaseña lo bloqueas
                            // echo "return this;";
                            echo "}";
                            // echo "return this;";
                    echo "}";
                    echo "window.inputAvailable();";
                    echo "function ewe() {";                        
                        echo "console.log('=================');";
                        echo "console.log('ewe9');";
                        echo "console.log('=================');";
                    echo "}";
                echo "</script>";
                ?>
            </div>
        </div>
        <?php
    }