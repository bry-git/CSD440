<?php

class BaseballTeam {
    public $teamId;
    public $teamName;
    public $city;
    public $foundedYear;
    public $coachName;

    public function __construct($teamId, $teamName, $city, $foundedYear, $coachName) {
        $this->teamId = $teamId;
        $this->teamName = $teamName;
        $this->city = $city;
        $this->foundedYear = $foundedYear;
        $this->coachName = $coachName;
    }

    /**
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * @param mixed $teamName
     */
    public function setTeamName($teamName): void
    {
        $this->teamName = $teamName;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getFoundedYear()
    {
        return $this->foundedYear;
    }

    /**
     * @param mixed $foundedYear
     */
    public function setFoundedYear($foundedYear): void
    {
        $this->foundedYear = $foundedYear;
    }

    /**
     * @return mixed
     */
    public function getCoachName()
    {
        return $this->coachName;
    }

    /**
     * @param mixed $coachName
     */
    public function setCoachName($coachName): void
    {
        $this->coachName = $coachName;
    }


}