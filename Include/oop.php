<?php
class Oop{
    private $couresId;
    private $courseName;
    private $courseDuration;
    private $courseFees;
    private $regFees;
    private $cType;
    private $startDate;
    private $lectureName;


    function setCouresId($couresId){
        $this->couresId = $couresId;
    }

    function setCourseName($courseName){
        $this->courseName = $courseName;
    }

    function setCourseDuration($courseDuration){
        $this->courseDuration = $courseDuration;
    }

    function setCourseFees($courseFees){
        $this->courseFees = $courseFees;
    }

    function setRegFees($regFees){
        $this->regFees = $regFees;
    }

    function setCType($cType){
        $this->cType = $cType;
    }

    function setStartDate($startDate){
        $this->startDate = $startDate;
    }

    function setLectureName($lectureName){
        $this->lectureName = $lectureName;
    }



    function getCouresId(){
        return $this->couresId;
    }

    function getCourseName(){
        return $this->courseName;
    }

    function getCourseDuration(){
        return $this->courseDuration;
    }

    function getCourseFees(){
        return $this->courseFees;
    }

    function getRegFees(){
        return $this->regFees;
    }

    function getCType(){
        return $this->cType;
    }

    function getStartDate(){
        return $this->startDate;
    }

    function getLectureName(){
        return $this->lectureName;
    }

    
}



?>