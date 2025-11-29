<?php
abstract class BasePokemon {
    protected string $name;
    protected string $type;
    protected int $level;
    protected int $hp;
    protected string $specialMove;

    public function __construct($name, $type, $level, $hp, $specialMove) {
        $this->name = $name;
        $this->type = $type;
        $this->level = $level;
        $this->hp = $hp;
        $this->specialMove = $specialMove;
    }

    abstract public function specialMove(): string;

    public function train($trainingType, $intensity) {
        $before = ['level' => $this->level, 'hp' => $this->hp];

        $this->level += floor($intensity / 10);
        $this->hp += floor($intensity / 2);

        if ($this->hp > 999) $this->hp = 999;

        return [
            'trainingType' => $trainingType,
            'intensity' => $intensity,
            'before' => $before,
            'after' => ['level' => $this->level, 'hp' => $this->hp],
            'specialMove' => $this->specialMove()
        ];
    }

    public function getName() { return $this->name; }
    public function getType() { return $this->type; }
    public function getLevel() { return $this->level; }
    public function getHp() { return $this->hp; }
}
