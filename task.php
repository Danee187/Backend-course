<?php

class Task {

    public $description;
    public $assignee;
    protected $completed=false;

    public function __construct($description, $assignee)
    {
        $this->description = $description;
        $this->assignee = $assignee;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function getAssignee()
    {
        return $this->assignee;
    }

    public function setAssignee($assignee)
    {
        $this->assignee = $assignee;
    }
}
