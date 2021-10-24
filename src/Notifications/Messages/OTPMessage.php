<?php

namespace Fouladgar\OTP\Notifications\Messages;

class OTPMessage
{
    private string $content;

    private string $to;

    public function content(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function to(string $to): self
    {
        $this->to = $to;

        return $this;
    }

    public function getPayload(): MessagePayload
    {
        return (new MessagePayload($this->to, $this->content));
    }
}