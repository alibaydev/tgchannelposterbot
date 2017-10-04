<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a registered user.
 * @Entity(repositoryClass="\Application\Repository\PostRepository")
 * @Table(name="posts")
 */
class Post
{
	/**
	 * @Id
	 * @Column(name="id")
	 * @GeneratedValue
	 */
	private $id;

	/**
	 * @Column(name="title")
	 */
	private $title;

	/**
	 * @Column(name="content")
	 */
	private $content;

	/**
	 * @var boolean
	 * @Column(name="is_published")
	 */
	private $published;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param mixed $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return mixed
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * @param mixed $content
	 */
	public function setContent($content)
	{
		$this->content = $content;
	}

	/**
	 * @return mixed
	 */
	public function isPublished()
	{
		return $this->published;
	}

	/**
	 * @param mixed $published
	 */
	public function setPublished($published)
	{
		$this->published = $published;
	}

}