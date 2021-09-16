<?php

namespace IMSGlobal\Caliper\events;

class EventType extends \IMSGlobal\Caliper\util\BasicEnum {
    const
        __default = '',
        ANNOTATION = 'AnnotationEvent',
        ASSESSMENT = 'AssessmentEvent',
        ASSESSMENT_ITEM = 'AssessmentItemEvent',
        ASSIGNABLE = 'AssignableEvent',
        EVENT = 'Event',
        MEDIA = 'MediaEvent',
        NAVIGATION = 'NavigationEvent',
        OUTCOME = 'OutcomeEvent',
        READING = 'ReadingEvent',
        SESSION = 'SessionEvent',
        VIEW = 'ViewEvent';
}

