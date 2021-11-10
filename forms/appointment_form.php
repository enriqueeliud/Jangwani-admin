<fieldset>
    <div class="form-group">
        <label for="appointment">Appointment *</label>
          <input type="text" name="appointment" value="<?php echo htmlspecialchars($edit ? $appointment['appointment'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Appointment" class="form-control" required="required" id = "appointment" >
    </div> 

    <div class="form-group">
        <label for="therapist">Therapist *</label>
        <input type="text" name="therapist" value="<?php echo htmlspecialchars($edit ? $appointment['therapist'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Therapist" class="form-control" required="required" id="therapist">
    </div> 

    <div class="form-group">
        <label for="f_name">Patient_name *</label>
        <input type="text" name="f_name" value="<?php echo htmlspecialchars($edit ? $appointment['f_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Patient Name" class="form-control" required="required" id="f_name">
    </div> 
    
    <div class="form-group">
        <label>Gender * </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="male" <?php echo ($edit &&$appointment['gender'] =='male') ? "checked": "" ; ?> required="required"/> Male
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="female" <?php echo ($edit && $appointment['gender'] =='female')? "checked": "" ; ?> required="required" id="female"/> Female
        </label>
    </div>

    <div class="form-group">
        <label for="room">Room</label>
          <textarea name="room" placeholder="Room" class="form-control" id="room"><?php echo htmlspecialchars(($edit) ? $appointment['room'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div> 
    
    <div class="form-group">
        <label>State </label>
           <?php $opt_arr = array("Maharashtra", "Kerala", "Madhya pradesh"); 
                            ?>
            <select name="state" class="form-control selectpicker" required>
                <option value=" " >Please select your state</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt == $appointment['state']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }

                ?>
            </select>
    </div>  
    <div class="form-group">
        <label for="email">Patient_email</label>
            <input  type="email" name="email" value="<?php echo htmlspecialchars($edit ? $appointment['patient_email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="EmailAddress" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="patient_phone">Patient_phone</label>
            <input name="patient_phone" value="<?php echo htmlspecialchars($edit ? $appointment['patient_phone'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="987654321" class="form-control"  type="text" id="patient_phone">
    </div> 

    <div class="form-group">
        <label>Date</label>
        <input name="date" value="<?php echo htmlspecialchars($edit ? $appointment['date'] : '', ENT_QUOTES, 'UTF-8'); ?>"  placeholder="Date" class="form-control"  type="date">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
