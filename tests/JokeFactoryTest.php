<?php

namespace Nangui\ChuckNorrisJokes\Test;

use Nangui\ChuckNorrisJokes\JokeFactory;
use \PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
	/** @test */
	public function it_returns_a_random_joke()
	{
		$jokes = new JokeFactory([
			'This is a joke'
		]);

		$joke = $jokes->getRandomJoke();

		$this->assertSame('This is a joke', $joke);
	}

	/** @test */
	public function it_returns_a_predefined_joke()
	{
		$chuckNorrisJokes = [
			'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
			'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
			'Chuck Norris counted to infinity... Twice.',
			'The chief export of Chuck Norris is Pain.',
			'Chuck Norris uses pepper spray to spice up his steaks.'
		];

		$jokes = new JokeFactory();

		$joke = $jokes->getRandomJoke();

		$this->assertContains($joke, $chuckNorrisJokes);
	}
}