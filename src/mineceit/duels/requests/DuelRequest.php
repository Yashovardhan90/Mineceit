<?php

declare(strict_types=1);

namespace mineceit\duels\requests;

use mineceit\MineceitCore;
use mineceit\player\MineceitPlayer;

class DuelRequest
{

	/* @var MineceitPlayer */
	private $from;
	/* @var MineceitPlayer */
	private $to;
	/* @var string */
	private $queue;
	/* @var bool|null */
	private $ranked;
	/* @var string */
	private $fromName;
	/* @var string */
	private $toName;
	/* @var string */
	private $texture;
	/* @var string */
	private $toDisplayName;
	/* @var string */
	private $fromDisplayName;

	public function __construct(MineceitPlayer $from, MineceitPlayer $to, string $queue, bool $ranked)
	{
		$this->from = $from;
		$this->to = $to;
		$this->queue = $queue;
		$this->ranked = $ranked;
		$this->toName = $to->getName();
		$this->fromName = $from->getName();
		$this->toDisplayName = $to->getDisplayName();
		$this->fromDisplayName = $from->getDisplayName();
		$kit = MineceitCore::getKits()->getKit($queue);
		$this->texture = ($kit !== null) ? $kit->getMiscKitInfo()->getTexture() : '';
	}

	/**
	 * @return string
	 */
	public function getTexture(): string
	{
		return $this->texture;
	}

	/**
	 * @return MineceitPlayer
	 */
	public function getFrom(): MineceitPlayer
	{
		return $this->from;
	}

	/**
	 * @return MineceitPlayer
	 */
	public function getTo(): MineceitPlayer
	{
		return $this->to;
	}

	/**
	 * @return bool
	 */
	public function isRanked(): bool
	{
		return $this->ranked;
	}

	/**
	 * @return string
	 */
	public function getQueue(): string
	{
		return $this->queue;
	}

	/**
	 * @return string
	 */
	public function getFromName(): string
	{
		return $this->fromName;
	}

	/**
	 * @return string
	 */
	public function getToName(): string
	{
		return $this->toName;
	}


	/**
	 * @return string
	 */
	public function getFromDisplayName(): string
	{
		return $this->fromDisplayName;
	}

	/**
	 * @return string
	 */
	public function getToDisplayName(): string
	{
		return $this->toDisplayName;
	}
}
