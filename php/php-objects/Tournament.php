<?php
/**
 * File: Tournament.php
 * @author: Brandon Bires-Navel (brn5915@rit.edu)
 * todo description
 */

/**
 * Class Tournament
 */
class Tournament{
    var $name; # Name of the tournament
    var $dates; # Dates of the tournament
    var $mapName; # Map name with the gamemode
    var $numPlayers; # Number of players on the team
    var $tierLimit; # Tier Limit
    var $totalTierPoints; # Total tier points
    var $teamLink; # Link to the team
    var $wotScoutLink; # Link to the gosustatistic (usally)

    /**
     * Tournament constructor.
     */
    public function __construct($data){
        $this->name = $data[0];
        $this->dates = $data[1];
        $this->mapName = $data[2];
        $this->numPlayers = $data[3];
        $this->tierLimit = $data[4];
        $this->totalTierPoints = $data[5];
        $this->teamLink = $data[6];
        $this->wotScoutLink = $data[7];
    }

    /**
     * @return mixed
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name){
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDates(){
        return $this->dates;
    }

    /**
     * @param mixed $dates
     */
    public function setDates($dates){
        $this->dates = $dates;
    }

    /**
     * @return mixed
     */
    public function getMapName(){
        return $this->mapName;
    }

    /**
     * @param mixed $mapName
     */
    public function setMapName($mapName){
        $this->mapName = $mapName;
    }

    /**
     * @return mixed
     */
    public function getNumPlayers(){
        return $this->numPlayers;
    }

    /**
     * @param mixed $numPlayers
     */
    public function setNumPlayers($numPlayers){
        $this->numPlayers = $numPlayers;
    }

    /**
     * @return mixed
     */
    public function getTierLimit(){
        return $this->tierLimit;
    }

    /**
     * @param mixed $tierLimit
     */
    public function setTierLimit($tierLimit){
        $this->tierLimit = $tierLimit;
    }

    /**
     * @return mixed
     */
    public function getTotalTierPoints(){
        return $this->totalTierPoints;
    }

    /**
     * @param mixed $totalTierPoints
     */
    public function setTotalTierPoints($totalTierPoints){
        $this->totalTierPoints = $totalTierPoints;
    }

    /**
     * @return mixed
     */
    public function getTeamLink(){
        return $this->teamLink;
    }

    /**
     * @param mixed $teamLink
     */
    public function setTeamLink($teamLink){
        $this->teamLink = $teamLink;
    }

    /**
     * @return mixed
     */
    public function getWotScoutLink(){
        return $this->wotScoutLink;
    }

    /**
     * @param mixed $wotScoutLink
     */
    public function setWotScoutLink($wotScoutLink){
        $this->wotScoutLink = $wotScoutLink;
    }
}