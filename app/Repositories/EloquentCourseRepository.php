<?php

namespace App\Repositories;

use App\Models\Course;

class EloquentCourseRepository
{
    protected Course $course;

    public function __construct(Course $course)
    {
        $this->course=$course;        
    }

    public function save(string $coursename){
        $this->course->save(['name'=>$coursename]);
    }



}