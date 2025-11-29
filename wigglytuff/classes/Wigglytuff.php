<?php
require_once __DIR__ . "/BasePokemon.php";

class Wigglytuff extends BasePokemon {
    public function __construct($level = 5, $hp = 140) {
        parent::__construct("Wigglytuff", "Normal/Fairy", $level, $hp, "Double-Edge");
    }

    public function specialMove(): string {
        return "Wigglytuff menggunakan Double-Edge! Serangan kuat namun menguras tenaga.";
    }

    public function train($trainingType, $intensity) {
        $before = ['level' => $this->level, 'hp' => $this->hp];

        if ($trainingType === "Attack") {
            $this->level += floor($intensity / 8);
            $this->hp += floor($intensity / 3);
        } elseif ($trainingType === "Defense") {
            $this->hp += floor($intensity / 2);
        } elseif ($trainingType === "Speed") {
            $this->level += floor($intensity / 12);
        }

        if ($this->hp > 999) $this->hp = 999;

        return [
            'trainingType' => $trainingType,
            'intensity' => $intensity,
            'before' => $before,
            'after' => ['level' => $this->level, 'hp' => $this->hp],
            'specialMove' => $this->specialMove()
        ];
    }
}
