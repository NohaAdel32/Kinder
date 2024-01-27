<?php
namespace App\Traits;

trait ReadUnreadTrait
{
    public function markAsRead()
    {
        $this->update(['read_at' => true]);
    }

    public function markAsUnread()
    {
        $this->update(['read_at' => false]);
    }
}