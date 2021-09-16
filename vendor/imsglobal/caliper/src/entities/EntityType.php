<?php

namespace IMSGlobal\Caliper\entities;

class EntityType extends \IMSGlobal\Caliper\util\BasicEnum implements Type {
    const
        __default = '',
        ANNOTATION = 'Annotation',
        ATTEMPT = 'Attempt',
        COURSE_OFFERING = 'CourseOffering',
        COURSE_SECTION = 'CourseSection',
        DIGITAL_RESOURCE = 'DigitalResource',
        ENTITY = 'Entity',
        GROUP = 'Group',
        LEARNING_OBJECTIVE = 'LearningObjective',
        MEMBERSHIP = 'hMembership',
        PERSON = 'Person',
        ORGANIZATION = 'Organization',
        RESPONSE = 'Response',
        RESULT = 'Result',
        SESSION = 'Session',
        SOFTWARE_APPLICATION = 'SoftwareApplication',
        VIEW = 'View';
}