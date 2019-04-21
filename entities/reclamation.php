<?php
class reclamation
{
	private $id;
	private $fullNameC;
	private $email;
	private $subject;
	private $message;
	private  $statut;
	public  $idProduit;
	public  $idUser;
	function __construct($fullNameC, $email, $subject, $message, $statut)
	{

		$this->fullNameC = $fullNameC;
		$this->email = $email;
		$this->subject = $subject;
		$this->message = $message;
		$this->statut = 0;
	}
	// getter 

	function getId()
	{
		return $this->id;
	}
	function getFullNameC()
	{
		return $this->fullNameC;
	}
	function getEmail()
	{
		return $this->email;
	}
	function getSubject()
	{
		return $this->subject;
	}
	function getMessage()
	{
		return $this->message;
	}
	function getStatut()
	{
		return $this->statut;
	}
	// setter 

	function setId($id)
	{
		$this->id = $id;
	}
	function setFullNameC($fullNameC)
	{
		$this->fullNameC = $fullNameC;
	}
	function setEmail($email)
	{
		$this->email = $email;
	}
	function setSubject($subject)
	{
		$this->subject = $subject;
	}
	function setMessage($message)
	{
		$this->message = $message;
	}
	function setStatut($statut)
	{
		$this->statut = $statut;
	}
}
