<?php

namespace IP\Events;

use Illuminate\Queue\SerializesModels;
use IP\Modules\Quotes\Models\Quote;

class QuoteEmailed extends Event
{
    use SerializesModels;

    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
    }
}