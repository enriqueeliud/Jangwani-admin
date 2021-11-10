<fieldset>
    <div class="form-group">
        <label for="floor">Floor *</label>
          <input type="text" name="floor" value="<?php echo htmlspecialchars($edit ? $room['floor'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Floor" class="form-control" required="required" id = "floor" >
    </div> 

    <div class="form-group">
        <label for="session">Session *</label>
        <input type="text" name="session" value="<?php echo htmlspecialchars($edit ? $room['session'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Session" class="form-control" required="required" id="session">
    </div> 

    <div class="form-group">
        <label>Status * </label>
        <label class="radio-inline">
            <input type="radio" name="status" value="male" <?php echo ($edit &&$room['status'] =='occupied') ? "checked": "" ; ?> required="required"/> Occupied
        </label>
        <label class="radio-inline">
            <input type="radio" name="status" value="female" <?php echo ($edit && $room['status'] =='available')? "checked": "" ; ?> required="required" id="available"/> Available
        </label>
    </div>

  
    <div class="form-group">
        <label>State </label>
           <?php $opt_arr = array("Maharashtra", "Kerala", "Madhya pradesh"); 
                            ?>
            <select name="state" class="form-control selectpicker" required>
                <option value=" " >Please select state</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt == $patient['state']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }

                ?>
            </select>
    </div>  
 

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
