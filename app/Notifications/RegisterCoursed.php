<?php

namespace App\Notifications;

use App\Models\RegisterCourse;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class RegisterCoursed extends Notification
{
    use Queueable;
    
    public $registerCourse;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(RegisterCourse $registerCourse)
    {
        // 注入回复实体，方便 toDatabase 方法中的使用
        $this->registerCourse = $registerCourse;
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
        $url = route('registerCourses.edit', $this->registerCourse->id);
    
        return (new MailMessage)
            ->line('有新的培训课程申请.')
            ->action('查看申请', url($url))
            ->line('Thank you for using SeaLand Management System!');
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
