<?php
class Appointments
{
  
    public function __construct()
    {
    }

    public function __destruct()
    {
    }
    
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'ID',
            'appointment' => 'Appointment',
            'therapist' => 'Therapist',
            'gender' => 'Gender',
            'patient_phone' => 'Phone',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at'
        ];

        return $ordering;
    }
}
?>
