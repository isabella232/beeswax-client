<?php

namespace Audiens\BeesWax\Segment;

class BeesWaxSegment
{
    /** @var string|null */
    protected $id;

    /** @var string|null */
    protected $alternativeId;

    /** @var int|null */
    protected $advertiserId;

    /**
     * Max 191 characters
     * @var string
     */
    protected $name;

    /** @var string|null */
    protected $description;

    /** @var float */
    protected $cpmCost;

    /**
     * Max 90
     * @var int
     */
    protected $ttlDays;

    /**
     * Should reporting include this segment when it is used as a negative target ("NOT")
     * @var bool
     */
    protected $aggregateExcludes;

    /**
     * BeesWaxSegment constructor.
     *
     * @param string   $name
     * @param string   $description
     * @param string   $alternativeId
     * @param int|null $advertiserId
     * @param float    $cpmCost
     * @param int      $ttlDays
     * @param bool     $aggregateExcludes
     */
    public function __construct(
        string $name,
        ?string $description = null,
        ?string $alternativeId = null,
        ?int $advertiserId = null,
        float $cpmCost = 0,
        int $ttlDays = 30,
        bool $aggregateExcludes = false
    ) {
        $this->alternativeId = $alternativeId;
        $this->advertiserId = $advertiserId;
        $this->name = $name;
        $this->description = $description;
        $this->cpmCost = $cpmCost;
        $this->ttlDays = $ttlDays;
        $this->aggregateExcludes = $aggregateExcludes;
    }

    public function setId(string $id): BeesWaxSegment
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAlternativeId(): ?string
    {
        return $this->alternativeId;
    }

    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getCpmCost(): float
    {
        return $this->cpmCost;
    }

    public function getTtlDays(): int
    {
        return $this->ttlDays;
    }

    public function isAggregateExcludes(): bool
    {
        return $this->aggregateExcludes;
    }
}
