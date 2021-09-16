<?php namespace LogExpander\Events;

class AssignmentSubmitted extends Event {
    /**
     * Reads data for an event.
     * @param [String => Mixed] $opts
     * @return [String => Mixed]
     * @override Event
     */
    public function read(array $opts) {
        $submission = $this->repo->readObject($opts['objectid'], $opts['objecttable']);
        $grade_items = $this->repo->readGradeItems($grade->assignment, 'assign');
        return array_merge(parent::read($opts), [
            'submission' => $submission,
            'grade_items' => $grade_items,
            'module' => $this->repo->readModule($submission->assignment, 'assign'),
        ]);
    }
}