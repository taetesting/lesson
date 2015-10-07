<?php
namespace Zinio\Algorithms;
use Exception;

class ArrangeMatch
{
    private $numOfTeam;
    private $matchs;
    private $firstLegs;
    private $secondLegs;
    private $teams;

    public function __construct($teams = array()) {
        $this->numOfTeam = count($teams);
        $this->matchs = [];
        $this->teams = $teams;
    }

    public function run($teams = array())
    {
        // echo $this->numOfTeam . '---' . implode('; ', $this->teams);die;
        if (count($teams)) {
            $this->numOfTeam = count($teams);
            $this->teams = $teams;
        }
        if ($this->numOfTeam != count($this->teams)) {
            throw new Exception('Number Of Team is not match');
        }
        $this->firstLegs = [];
        $this->secondLegs = [];
        $this->permute(1, $this->numOfTeam, $this->firstLegs, $this->secondLegs);
    }

    private function permute($start, $numOfTeam, &$turn1, &$turn2)
    {
        if ($start >= $numOfTeam) {
            return;
        }
        // echo $start;die;
        for ($i = $start + 1; $i <= $numOfTeam; $i++) {
            $turn1[] = "{$this->teams[$start-1]}-{$this->teams[$i-1]}";
            $turn2[] = "{$this->teams[$i-1]}-{$this->teams[$start-1]}";
        }
        $start++;
        $this->permute($start, $numOfTeam, $turn1, $turn2);
    }

    public function getTheFirstRound()
    {
        return $this->firstLegs;
    }

    public function getTheSecondRound()
    {
        return $this->secondLegs;
    }
}