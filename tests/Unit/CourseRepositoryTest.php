<?php

namespace Tests\Unit;

use App\Repositories\EloquentCourseRepository;
use PHPUnit\Framework\TestCase;
use App\Models\Course;
use PHPUnit\Framework\Attributes\Test;

class CourseRepositoryTest extends TestCase
{

    /** @test */ 
    public function given_a_course__should_be_saved(): void
    {
        $courseName="Nombre del curso";
        $courseMock=$this->getMockBuilder(Course::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->sut=new EloquentCourseRepository($courseMock);
        
        $courseMock
            ->expects($this->exactly(1))
            ->method('save')
            ->with(['name'=>$courseName]);
        
        $this->sut->save($courseName);
    }
}
