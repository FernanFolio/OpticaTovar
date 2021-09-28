<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CompraNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $orden = null;

    public function __construct($orden)
    {
        $this->orden = $orden;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $total = $this->orden->productos()->sum('precio');
        return (new MailMessage)
            ->greeting('Hola ' . $notifiable->name)
            ->line("Tu compra por $$total en Optica Tovar se ha realizado correctamente. Ahora está registrada en tu historial de compras. Dale un vistazo.")
            ->action('Optica Tovar', url('/mis_compras'))
            ->line('Gracias por comprar en Optica Tovar!');
           
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
