<?php

namespace Nangui\ChuckNorrisJokes;

class JokeFactory
{
	protected $jokes = [
		'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
		'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
		'Chuck Norris counted to infinity... Twice.',
		'The chief export of Chuck Norris is Pain.',
		'Chuck Norris uses pepper spray to spice up his steaks.'
	];

	public function __construct(array $jokes = null)
	{
		if ($jokes)
		{
			$this->jokes = $jokes;
		}
	}

	public function getRandomJoke()
	{
		return $this->jokes[array_rand($this->jokes)];
	}

	public function getRandomJokes($amount = 1)
	{
		// Implementation
	}
}