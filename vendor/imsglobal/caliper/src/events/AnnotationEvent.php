<?php

namespace IMSGlobal\Caliper\events;

class AnnotationEvent extends Event {
    public function __construct() {
        parent::__construct();
        $this->setType(new EventType(EventType::ANNOTATION));
    }
}
