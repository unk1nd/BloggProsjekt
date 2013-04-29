<?php
	/* 			Comment Class 
	 * 		Objekt/Skall som inneholder informasjon om en enkelt kommentar.
	 */
	
	class Comment {
		//Instansevariabler
		private $id;
		private $article_id;
		private $author_id;
		private $author_name;
		private $comment;
		private $date;
		private $ip;
		
		//Constructor for kommentarene
		public function __construct($id = null, $article_id = null, $author_id = null, $author_name = null, $comment = null, $date = null, $ip = null) {
			$this->id = $id;
			$this->article_id = $article_id;
			$this->author_id = $author_id;
			$this->author_name = $author_name;
			$this->comment = $comment;
			$this->date = $date;
			$this->ip = $ip;
		}
		
		//Getters
		public function getId(){return $this->id;}
		public function getArticleId(){return $this->article_id;}
		public function getAuthorId(){return $this->author_id;}
		public function getAuthorName(){return $this->author_name;}
		public function getComment(){return $this->comment;}
		public function getDate(){return $this->date;}
		public function getIp(){return $this->ip;}
		
		//And setters
		public function setId($input){$this->id = $input;}
		public function setArticleId($input){$this->article_id = $input;}
		public function setAuthorId($input){$this->author_id = $input;}
		public function setAuthorName($input){$this->author_name = $input;}
		public function setComment($input){$this->comment = $input;}
		public function setDate($input){$this->date = $input;}
		public function setIp($input){$this->ip = $input;}
		
	}

?>