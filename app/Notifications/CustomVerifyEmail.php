<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class CustomVerifyEmail extends Notification
{
    use Queueable;

    protected $guard;

    /**
     * Create a new notification instance.
     *
     * @param string $guard
     */
    public function __construct(string $guard)
    {
        $this->guard = $guard;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param object $notifiable
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param object $notifiable
     * @return MailMessage
     */
    public function toMail(object $notifiable): MailMessage
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->subject('Verify Your Email Address')
            ->greeting('Hello, ' . $notifiable->name . '!')
            ->line('Thank you for registering. Please click the button below to verify your email address.')
            ->action('Verify Email', $verificationUrl)
            ->line('If you did not create this account, no further action is required.')
            ->salutation('Best regards, The Team');
    }

    /**
     * Generate the verification URL for the given notifiable.
     *
     * @param object $notifiable
     * @return string
     */
    protected function verificationUrl($notifiable): string
    {
        // Determine the base path based on the guard
        $basePath = $this->guard ;

        // Generate a signed route for email verification
        return URL::temporarySignedRoute(
            'verification.verify', // Match the route name in your web.php
            now()->addMinutes(60),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
                'guard' => $basePath // Include the guard in the URL
            ]
        );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param object $notifiable
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
