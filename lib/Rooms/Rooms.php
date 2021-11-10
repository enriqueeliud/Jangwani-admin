<?php
class Rooms
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
            'floor' => 'Floor',
            'session' => 'Session',
            'room_number' => 'Room Number',
            'status' => 'Status',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at'
        ];

        return $ordering;
    }
}
?>
